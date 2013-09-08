<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs = array(
    'Invoices' => array('index'),
    $model->ID,
);

$this->menu = array(
    array('label' => 'List Invoices', 'url' => array('index')),
    array('label' => 'Create Invoices', 'url' => array('create')),
    array('label' => 'Update Invoices', 'url' => array('update', 'id' => $model->ID)),
    array('label' => 'Delete Invoices', 'url' => '#', 'linkOptions' => array('submit' => array(
                'delete', 'id' => $model->ID), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Invoices', 'url' => array('admin')),
);
?>

<h1>View Invoices #<?php echo $model->ID; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'ID',
        'InvoiceNr',
        'InvoiceDate',
        'DueDate',
        'CustomerID',
        'CustomerReference',
        'VAT',
        'Remark',
        'Type',
        'Conditions',
        'PayDate',
        'Subject',
    ),
));

echo "$sql<br>";

$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'invoice-line-grid',
    'dataProvider' => $dataProvider,
//    'filter' => $model,
    'columns' => array(
//        'ID',
//        'InvoiceID',
        'LineNr',
        'Description',
        'Quantity',
        'UnitPrice',
        /*
          'Reduction',
         */
//        array(
//            'class' => 'CButtonColumn',
//        ),
    ),
));
?>
