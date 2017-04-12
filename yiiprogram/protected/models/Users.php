<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $dob
 * @property integer $age
 * @property string $sex
 * @property string $email
 * @property string $mobphone
 * @property string $street
 * @property string $suburb
 * @property integer $pincode
 * @property string $occupation
 * @property string $medicareno
 * @property string $cardno
 * @property string $emergencyname
 * @property string $relationship
 * @property string $contactno
 * @property string $refrence
 * @property integer $subscriberId
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, last_name, dob, age, sex, email, mobphone, street, suburb, pincode, occupation, medicareno, cardno, emergencyname, relationship, contactno, refrence, subscriberId', 'required'),
			array('age, pincode, subscriberId', 'numerical', 'integerOnly'=>true),
			array('name, last_name, occupation, emergencyname, relationship, refrence', 'length', 'max'=>50),
			array('dob, cardno', 'length', 'max'=>20),
			array('sex', 'length', 'max'=>10),
			array('email', 'length', 'max'=>80),
			array('mobphone, medicareno, contactno', 'length', 'max'=>13),
			array('street, suburb', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, last_name, dob, age, sex, email, mobphone, street, suburb, pincode, occupation, medicareno, cardno, emergencyname, relationship, contactno, refrence, subscriberId', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'last_name' => 'Last Name',
			'dob' => 'Dob',
			'age' => 'Age',
			'sex' => 'Sex',
			'email' => 'Email',
			'mobphone' => 'Mobphone',
			'street' => 'Street',
			'suburb' => 'Suburb',
			'pincode' => 'Pincode',
			'occupation' => 'Occupation',
			'medicareno' => 'Medicareno',
			'cardno' => 'Cardno',
			'emergencyname' => 'Emergencyname',
			'relationship' => 'Relationship',
			'contactno' => 'Contactno',
			'refrence' => 'Refrence',
			'subscriberId' => 'Subscriber',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobphone',$this->mobphone,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('suburb',$this->suburb,true);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('medicareno',$this->medicareno,true);
		$criteria->compare('cardno',$this->cardno,true);
		$criteria->compare('emergencyname',$this->emergencyname,true);
		$criteria->compare('relationship',$this->relationship,true);
		$criteria->compare('contactno',$this->contactno,true);
		$criteria->compare('refrence',$this->refrence,true);
		$criteria->compare('subscriberId',$this->subscriberId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
