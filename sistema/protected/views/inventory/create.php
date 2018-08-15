<?php
/* @var $this InventoryController */
/* @var $model Inventory */

$this->breadcrumbs=array(
	'Inventario'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Inventorios', 'url'=>array('index')),
	array('label'=>'Buscar Inventario', 'url'=>array('admin')),
);
?>

<h1>Registrar Inventario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>