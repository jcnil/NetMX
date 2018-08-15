<?php
/* @var $this InventoryController */
/* @var $model Inventory */

$this->breadcrumbs=array(
	'Inventario'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Lista de Inventorio', 'url'=>array('index')),
	array('label'=>'Registrar Inventario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inventory-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar en Inventario</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br>
<br>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventory-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
