<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $sex
 * @property string $identification
 * @property string $address
 * @property string $phone
 * @property string $home_phone
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $active
 * @property integer $create_uid
 * @property string $create_date
 * @property string $write_date
 * @property integer $write_uid
 * @property string $profile
 *
 * The followings are the available model relations:
 * @property Partners[] $partners
 * @property Partners[] $partners1
 * @property Products[] $products
 * @property Products[] $products1
 * @property Users $createU
 * @property Users[] $users
 * @property Users $writeU
 * @property Users[] $users1
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_date, write_date', 'required'),
			array('active, create_uid, write_uid', 'numerical', 'integerOnly'=>true),
			array('name, last_name, identification, address, login, password, email', 'length', 'max'=>128),
			array('sex', 'length', 'max'=>10),
			array('phone, home_phone', 'length', 'max'=>20),
			array('profile', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, last_name, sex, identification, address, phone, home_phone, login, password, email, active, create_uid, create_date, write_date, write_uid, profile', 'safe', 'on'=>'search'),
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
			'partners' => array(self::HAS_MANY, 'Partners', 'create_uid'),
			'partners1' => array(self::HAS_MANY, 'Partners', 'write_uid'),
			'products' => array(self::HAS_MANY, 'Products', 'create_uid'),
			'products1' => array(self::HAS_MANY, 'Products', 'write_uid'),
			'createU' => array(self::BELONGS_TO, 'Users', 'create_uid'),
			'users' => array(self::HAS_MANY, 'Users', 'create_uid'),
			'writeU' => array(self::BELONGS_TO, 'Users', 'write_uid'),
			'users1' => array(self::HAS_MANY, 'Users', 'write_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nombre',
			'last_name' => 'Apellido',
			'sex' => 'Sexo',
			'identification' => 'Numero de Identificacion',
			'address' => 'Direccion',
			'phone' => 'Telefono Personal',
			'home_phone' => 'Telefono de Casa',
			'login' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'active' => 'Activo',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'write_date' => 'Write Date',
			'write_uid' => 'Write Uid',
			'profile' => 'Profile',
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
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('identification',$this->identification,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('write_date',$this->write_date,true);
		$criteria->compare('write_uid',$this->write_uid);
		$criteria->compare('profile',$this->profile,true);

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
