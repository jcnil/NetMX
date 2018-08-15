<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productos',
);

$this->menu=array(
	array('label'=>'Registrar un Producto', 'url'=>array('create')),
	array('label'=>'Buscar Producto', 'url'=>array('admin')),
);
?>

<h1>Productos</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
<br>
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
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
		'location',
		'description_sale',
		'active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>