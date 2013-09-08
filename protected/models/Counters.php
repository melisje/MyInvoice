<?php

/**
 * This is the model class for table "tbl_Counters".
 *
 * The followings are the available columns in table 'tbl_Counters':
 * @property string $COUNTERID
 * @property integer $VALUE
 * @property string $PREFIX
 * @property string $SUFFIX
 * @property integer $DIGITS
 */
class Counters extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_Counters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COUNTERID', 'required'),
			array('VALUE, DIGITS', 'numerical', 'integerOnly'=>true),
			array('COUNTERID', 'length', 'max'=>50),
			array('PREFIX, SUFFIX', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COUNTERID, VALUE, PREFIX, SUFFIX, DIGITS', 'safe', 'on'=>'search'),
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
			'COUNTERID' => 'Counterid',
			'VALUE' => 'Value',
			'PREFIX' => 'Prefix',
			'SUFFIX' => 'Suffix',
			'DIGITS' => 'Digits',
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

		$criteria->compare('COUNTERID',$this->COUNTERID,true);
		$criteria->compare('VALUE',$this->VALUE);
		$criteria->compare('PREFIX',$this->PREFIX,true);
		$criteria->compare('SUFFIX',$this->SUFFIX,true);
		$criteria->compare('DIGITS',$this->DIGITS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Counters the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
