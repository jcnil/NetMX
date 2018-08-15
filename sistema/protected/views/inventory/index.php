<?php
/* @var $this InventoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventario',
);

$this->menu=array(
	array('label'=>'Registrar Inventario', 'url'=>array('create')),
	array('label'=>'Buscar Inventario', 'url'=>array('admin')),
);
?>

<h1>Inventarios</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>

<br>
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inventory-grid',
	'dataProvider'=>$dataProvider,
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
