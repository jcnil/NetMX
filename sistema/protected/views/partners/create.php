<?php
/* @var $this PartnersController */
/* @var $model Partners */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Clientes', 'url'=>array('index')),
	array('label'=>'Buscar Cliente', 'url'=>array('admin')),
);
?>

<h1>Registrar Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>