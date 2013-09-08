<?php

class InvoicesController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'invoicefromorder'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionInvoiceFromOrder($orderid)
    {
        // get new invoicenr
        $counter = Counters::model()->findByPk('INVOICE');
        $invoicenr = $counter->getNextValue();


        // make a new invoice for given order
        $invoice = new Invoices();
        $invoice->save();
        $invoice->InvoiceNr = $invoicenr;

        // set invoice date to current date
        $today = new DateTime;
        $invoice->InvoiceDate = $today->format("Y-m-d");

        // set the duedate of the invoice, which is by default 14 days after invoicedate
        $duedate = clone $today;
        $duedate->add(new DateInterval('P14D')); // P1D means a period of 1 day
        $invoice->DueDate = $duedate->format("Y-m-d");

        // set the customer 
        // retrieve customer from order
        $order = Orders::model()->findByPk($orderid);
        $invoice->CustomerID = $order->cUSTOMER->ID;

        // As customer reference we take the orderid
        $invoice->CustomerReference = $orderid;

        // set default VAT value
        $invoice->VAT = 0.21;  // default value
        // set default remark
        $invoice->Remark = "Uw betaling op rekening 001-4357364-06 met vermelding van factuurnummer.";

        // set default Type (=Factuur)
        $invoice->Type = "Factuur";

        // set default conditions for payment in 14days after invoice date
        $conditions = Conditions::model()->find("Description='14d'");
        $invoice->Conditions = $conditions->Text;

        // set the subject of the Invoice 
        $invoice->Subject = $order->ORDER_DESCRIPTION;

        $invoice->save();

        // get performances for given order
        $performances = Performance::model()->findAll("ORDER_ID='$orderid'",array('order'=>'ID'));
        

        // for every performance record, create InvoiceLine
        $i = 0;
        foreach ($performances as $performance)
        {
            // make new invoice line for current invoice
            $line = new InvoiceLine;
            $line->InvoiceID = $invoice->ID;

            // set the line number
            $line->LineNr = ++$i;

            // make the description of the invoice line. Prefix with performance date
            $pdate = date("d-m-Y", strtotime($performance->PERFORMANCE_DATE));
            $line->Description = "$pdate: " . $performance->PERFORMANCE_DESCRIPTION;

            // set the quantity
            $line->Quantity = $performance->PERFORMANCE_QUANTITY;

            // set the unit price
            $line->UnitPrice = $performance->PERFORMANCE_UNITPRICE;

            // set the reduction (default to 0, no reduction)
            $line->Reduction = 0;

            // save the invoice line
            $line->save();
        }


        // show the invoice
        $this->actionView($invoice->ID);
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $header = $this->loadModel($id);
        $invid = $header->ID;
//        $invid = $header->InvoiceNr;

        $lines = InvoiceLine::model()->findAll("InvoiceID=$invid");


        $sql = "SELECT * FROM tbl_InvoiceLine WHERE `InvoiceID`=$invid";

        $count = Yii::app()->db->createCommand("select count(*) from ($sql) `t`")->queryScalar();

        $config = array(
            'keyField' => 'ID',
            'totalItemCount' => $count,
            'sort' => array(
                'attributes' => array('ID', 'LineNr', 'Quantity', 'UnitPrice',),
            ),
            'pagination' => array('pageSize' => 20,)
        );

        $dp = new CSqlDataProvider($sql, $config);


        $this->render('view', array(
            'model' => $header,
            'lines' => $lines,
            'sql'=> $sql,
            'dataProvider'=>$dp,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Invoices;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Invoices']))
        {
            $model->attributes = $_POST['Invoices'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Invoices']))
        {
            $model->attributes = $_POST['Invoices'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array(
                        'admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Invoices');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Invoices('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Invoices']))
            $model->attributes = $_GET['Invoices'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Invoices the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Invoices::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Invoices $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'invoices-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
