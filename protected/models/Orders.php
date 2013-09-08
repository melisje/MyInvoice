<?php

/**
 * This is the model class for table "tbl_Orders".
 *
 * The followings are the available columns in table 'tbl_Orders':
 * @property string $ORDER_ID
 * @property string $CUSTOMER_ID
 * @property string $ORDER_DESCRIPTION
 * @property string $ORDER_DATE
 * @property string $CREATED
 * @property integer $CLOSED
 * @property string $_CREATED
 *
 * The followings are the available model relations:
 * @property Customer $cUSTOMER
 * @property Performance[] $performances
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_Orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ORDER_ID', 'required'),
			array('CLOSED', 'numerical', 'integerOnly'=>true),
			array('ORDER_ID', 'length', 'max'=>100),
			array('CUSTOMER_ID', 'length', 'max'=>50),
			array('ORDER_DESCRIPTION', 'length', 'max'=>255),
			array('ORDER_DATE, CREATED, _CREATED', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ORDER_ID, CUSTOMER_ID, ORDER_DESCRIPTION, ORDER_DATE, CREATED, CLOSED, _CREATED', 'safe', 'on'=>'search'),
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
			'cUSTOMER' => array(self::BELONGS_TO, 'Customer', 'CUSTOMER_ID'),
			'performances' => array(self::HAS_MANY, 'Performance', 'ORDER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ORDER_ID' => 'Order',
			'CUSTOMER_ID' => 'Customer',
			'ORDER_DESCRIPTION' => 'Order Description',
			'ORDER_DATE' => 'Order Date',
			'CREATED' => 'Created',
			'CLOSED' => 'Closed',
			'_CREATED' => 'Created',
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

		$criteria->compare('ORDER_ID',$this->ORDER_ID,true);
		$criteria->compare('CUSTOMER_ID',$this->CUSTOMER_ID,true);
		$criteria->compare('ORDER_DESCRIPTION',$this->ORDER_DESCRIPTION,true);
		$criteria->compare('ORDER_DATE',$this->ORDER_DATE,true);
		$criteria->compare('CREATED',$this->CREATED,true);
		$criteria->compare('CLOSED',$this->CLOSED);
		$criteria->compare('_CREATED',$this->_CREATED,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
