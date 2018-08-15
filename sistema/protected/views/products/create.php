<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Buscar Producto', 'url'=>array('admin')),
);
?>

<h1>Registrar Productos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>