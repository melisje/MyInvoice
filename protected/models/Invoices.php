<?php

/**
 * This is the model class for table "tbl_Invoices".
 *
 * The followings are the available columns in table 'tbl_Invoices':
 * @property integer $ID
 * @property string $InvoiceNr
 * @property string $InvoiceDate
 * @property string $DueDate
 * @property integer $CustomerID
 * @property string $CustomerReference
 * @property double $VAT
 * @property string $Remark
 * @property string $Type
 * @property string $Conditions
 * @property string $PayDate
 * @property string $Subject
 */
class Invoices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_Invoices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CustomerID', 'numerical', 'integerOnly'=>true),
			array('VAT', 'numerical'),
			array('InvoiceNr, CustomerReference, Type', 'length', 'max'=>50),
			array('Subject', 'length', 'max'=>255),
			array('InvoiceDate, DueDate, Remark, Conditions, PayDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, InvoiceNr, InvoiceDate, DueDate, CustomerID, CustomerReference, VAT, Remark, Type, Conditions, PayDate, Subject', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'InvoiceNr' => 'Invoice Nr',
			'InvoiceDate' => 'Invoice Date',
			'DueDate' => 'Due Date',
			'CustomerID' => 'Customer',
			'CustomerReference' => 'Customer Reference',
			'VAT' => 'Vat',
			'Remark' => 'Remark',
			'Type' => 'Type',
			'Conditions' => 'Conditions',
			'PayDate' => 'Pay Date',
			'Subject' => 'Subject',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('InvoiceNr',$this->InvoiceNr,true);
		$criteria->compare('InvoiceDate',$this->InvoiceDate,true);
		$criteria->compare('DueDate',$this->DueDate,true);
		$criteria->compare('CustomerID',$this->CustomerID);
		$criteria->compare('CustomerReference',$this->CustomerReference,true);
		$criteria->compare('VAT',$this->VAT);
		$criteria->compare('Remark',$this->Remark,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('Conditions',$this->Conditions,true);
		$criteria->compare('PayDate',$this->PayDate,true);
		$criteria->compare('Subject',$this->Subject,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Invoices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
