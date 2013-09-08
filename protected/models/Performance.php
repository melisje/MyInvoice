<?php

/**
 * This is the model class for table "tbl_Performance".
 *
 * The followings are the available columns in table 'tbl_Performance':
 * @property integer $ID
 * @property string $ORDER_ID
 * @property string $PERFORMANCE_DESCRIPTION
 * @property double $PERFORMANCE_QUANTITY
 * @property double $PERFORMANCE_UNITPRICE
 * @property string $PERFORMANCE_DATE
 * @property integer $TAKEINACCOUNT
 * @property string $CREATED
 *
 * The followings are the available model relations:
 * @property Orders $oRDER
 */
class Performance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_Performance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TAKEINACCOUNT', 'numerical', 'integerOnly'=>true),
			array('PERFORMANCE_QUANTITY, PERFORMANCE_UNITPRICE', 'numerical'),
			array('ORDER_ID', 'length', 'max'=>100),
			array('PERFORMANCE_DESCRIPTION, PERFORMANCE_DATE, CREATED', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ORDER_ID, PERFORMANCE_DESCRIPTION, PERFORMANCE_QUANTITY, PERFORMANCE_UNITPRICE, PERFORMANCE_DATE, TAKEINACCOUNT, CREATED', 'safe', 'on'=>'search'),
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
			'oRDER' => array(self::BELONGS_TO, 'Orders', 'ORDER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ORDER_ID' => 'Order',
			'PERFORMANCE_DESCRIPTION' => 'Performance Description',
			'PERFORMANCE_QUANTITY' => 'Performance Quantity',
			'PERFORMANCE_UNITPRICE' => 'Performance Unitprice',
			'PERFORMANCE_DATE' => 'Performance Date',
			'TAKEINACCOUNT' => 'Takeinaccount',
			'CREATED' => 'Created',
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
		$criteria->compare('ORDER_ID',$this->ORDER_ID,true);
		$criteria->compare('PERFORMANCE_DESCRIPTION',$this->PERFORMANCE_DESCRIPTION,true);
		$criteria->compare('PERFORMANCE_QUANTITY',$this->PERFORMANCE_QUANTITY);
		$criteria->compare('PERFORMANCE_UNITPRICE',$this->PERFORMANCE_UNITPRICE);
		$criteria->compare('PERFORMANCE_DATE',$this->PERFORMANCE_DATE,true);
		$criteria->compare('TAKEINACCOUNT',$this->TAKEINACCOUNT);
		$criteria->compare('CREATED',$this->CREATED,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Performance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
