<?php

/**
 * This is the model class for table "tbl_Customer".
 *
 * The followings are the available columns in table 'tbl_Customer':
 * @property integer $ID
 * @property string $CustomerNr
 * @property string $CustomerCode
 * @property string $Name
 * @property string $Address
 * @property string $Location
 * @property string $ZipCode
 * @property string $Country
 * @property string $VAT
 * @property double $Rate
 *
 * The followings are the available model relations:
 * @property Orders[] $orders
 */
class Customer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_Customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('Rate', 'numerical'),
			array('CustomerNr', 'length', 'max'=>10),
			array('CustomerCode, Name, Address, Location, ZipCode, Country, VAT', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, CustomerNr, CustomerCode, Name, Address, Location, ZipCode, Country, VAT, Rate', 'safe', 'on'=>'search'),
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
			'orders' => array(self::HAS_MANY, 'Orders', 'CUSTOMER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'CustomerNr' => 'Customer Nr',
			'CustomerCode' => 'Customer Code',
			'Name' => 'Name',
			'Address' => 'Address',
			'Location' => 'Location',
			'ZipCode' => 'Zip Code',
			'Country' => 'Country',
			'VAT' => 'Vat',
			'Rate' => 'Rate',
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
		$criteria->compare('CustomerNr',$this->CustomerNr,true);
		$criteria->compare('CustomerCode',$this->CustomerCode,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Location',$this->Location,true);
		$criteria->compare('ZipCode',$this->ZipCode,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('VAT',$this->VAT,true);
		$criteria->compare('Rate',$this->Rate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
