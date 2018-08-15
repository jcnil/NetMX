<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Registrar Producto', 'url'=>array('create')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Usted esta seguro de querer eliminar el producto?')),
	array('label'=>'Gestionar Productos', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'description',
		'type_product',
		'barcode',
		'code',
		'price',
		'quantity',
		'warranty',
		'list_price',
		'lot_id',
		'new_quantity',
		'location',
		'description_purchase',
		'description_sale',
		'date_inventory',
		'active',
		/*
		'create_uid',
		'create_date',
		'write_date',
		'write_uid',*/
	),
)); ?>
