<?php

/**
 * This is the model class for table "{{products}}".
 *
 * The followings are the available columns in table '{{products}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $type_product
 * @property string $barcode
 * @property string $code
 * @property string $price
 * @property string $quantity
 * @property double $warranty
 * @property string $list_price
 * @property integer $lot_id
 * @property string $new_quantity
 * @property string $location
 * @property string $description_purchase
 * @property string $description_sale
 * @property string $date_inventory
 * @property integer $active
 * @property integer $create_uid
 * @property string $create_date
 * @property string $write_date
 * @property integer $write_uid
 *
 * The followings are the available model relations:
 * @property Partners[] $partners
 * @property Users $createU
 * @property Users $writeU
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{products}}';
	}

	public function validaQuantity($attribute){
		if($this->quantity <= 0){
			$this->addError($attribute,'La cantidad de producto es menor o igual a 0');
		}
	}

	public function validaPrice($attribute){
		if($this->price <= 0){
			$this->addError($attribute,'El precio del producto es menor o igual a 0');
		}
	}

	public function validaWarranty($attribute){
		if($this->warranty <= 0){
			$this->addError($attribute,'La garantia del producto es menor o igual a 0');
		}
	}


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, type_product, code, price, quantity, warranty', 'required'),
			array('lot_id, active, create_uid, write_uid', 'numerical', 'integerOnly'=>true),
			array('warranty', 'numerical'),
			array('name, location', 'length', 'max'=>128),
			array('type_product', 'length', 'max'=>70),
			array('barcode', 'length', 'max'=>13),
			array('code', 'length', 'max'=>7),
			array('price, quantity, list_price, new_quantity', 'length', 'max'=>10),
			array('description, description_purchase, description_sale, date_inventory', 'safe'),
			array('quantity','validaQuantity'),
			array('price','validaPrice'),
			array('warranty','validaWarranty'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, type_product, barcode, code, price, quantity, warranty, list_price, lot_id, new_quantity, location, description_purchase, description_sale, date_inventory, active, create_uid, create_date, write_date, write_uid', 'safe', 'on'=>'search'),
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
			'partners' => array(self::HAS_MANY, 'Partners', 'product_id'),
			'createU' => array(self::BELONGS_TO, 'Users', 'create_uid'),
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
			'description' => 'Descripcion',
			'type_product' => 'Tipo de Producto',
			'barcode' => 'Codigo de Barra',
			'code' => 'Codigo',
			'price' => 'Precio',
			'quantity' => 'Cantidad',
			'warranty' => 'Garantia',
			'list_price' => 'Lista de Precio',
			'lot_id' => 'Lote',
			'new_quantity' => 'Nueva Cantidad',
			'location' => 'Ubicacion',
			'description_purchase' => 'Descripcion de Compra',
			'description_sale' => 'Descripcion de Venta',
			'date_inventory' => 'Fecha de Inventario',
			'active' => 'Activo',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type_product',$this->type_product,true);
		$criteria->compare('barcode',$this->barcode,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('warranty',$this->warranty);
		$criteria->compare('list_price',$this->list_price,true);
		$criteria->compare('lot_id',$this->lot_id);
		$criteria->compare('new_quantity',$this->new_quantity,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description_purchase',$this->description_purchase,true);
		$criteria->compare('description_sale',$this->description_sale,true);
		$criteria->compare('date_inventory',$this->date_inventory,true);
		$criteria->compare('active',$this->active);
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
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
