<?php

/**
 * This is the model class for table "{{partners}}".
 *
 * The followings are the available columns in table '{{partners}}':
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $identification
 * @property string $sex
 * @property string $state_civil
 * @property string $address
 * @property string $zip
 * @property string $email
 * @property string $fax
 * @property string $phone
 * @property string $home_phone
 * @property string $comment
 * @property integer $active
 * @property integer $product_id
 * @property integer $create_uid
 * @property string $create_date
 * @property string $write_date
 * @property integer $write_uid
 *
 * The followings are the available model relations:
 * @property Users $createU
 * @property Products $product
 * @property Users $writeU
 */
class Partners extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{partners}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, last_name, identification, address', 'required'),
			array('active, product_id, create_uid, write_uid', 'numerical', 'integerOnly'=>true),
			array('name, last_name, identification, address, email, fax', 'length', 'max'=>128),
			array('sex', 'length', 'max'=>8),
			array('state_civil', 'length', 'max'=>45),
			array('zip', 'length', 'max'=>24),
			array('phone, home_phone', 'length', 'max'=>20),
			array('comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, last_name, identification, sex, state_civil, address, zip, email, fax, phone, home_phone, comment, active, product_id, create_uid, create_date, write_date, write_uid', 'safe', 'on'=>'search'),
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
			'createU' => array(self::BELONGS_TO, 'Users', 'create_uid'),
			'product' => array(self::BELONGS_TO, 'Products', 'product_id'),
			'writeU' => array(self::BELONGS_TO, 'Users', 'write_uid'),
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
			'identification' => 'Identificacion',
			'sex' => 'Sexo',
			'state_civil' => 'Estado Civil',
			'address' => 'Direccion',
			'zip' => 'Codigo Postal',
			'email' => 'Email',
			'fax' => 'Fax',
			'phone' => 'Telefono Personal',
			'home_phone' => 'Telefono de Casa',
			'comment' => 'Comentario',
			'active' => 'Activo',
			'product_id' => 'Producto',
			'create_uid' => 'Create Uid',
			'create_date' => 'Create Date',
			'write_date' => 'Write Date',
			'write_uid' => 'Write Uid',
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
		$criteria->compare('identification',$this->identification,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('state_civil',$this->state_civil,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('create_uid',$this->create_uid);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('write_date',$this->write_date,true);
		$criteria->compare('write_uid',$this->write_uid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Partners the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
