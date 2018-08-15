<?php
/* @var $this InventoryController */
/* @var $model Inventory */

$this->breadcrumbs=array(
	'Inventario'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Lista de Inventario', 'url'=>array('index')),
	array('label'=>'Registrar Inventario', 'url'=>array('create')),
	array('label'=>'Actualizar Inventario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Inventario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Usted esta seguro de eliminar el Inventario?')),
	array('label'=>'Buscar Inventario', 'url'=>array('admin')),
);
?>

<h1>Ver Inventario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
	),
)); ?>
