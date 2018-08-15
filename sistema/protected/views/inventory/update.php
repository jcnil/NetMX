<?php
/* @var $this InventoryController */
/* @var $model Inventory */

$this->breadcrumbs=array(
	'Inventario'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Inventario', 'url'=>array('index')),
	array('label'=>'Registrar Inventario', 'url'=>array('create')),
	array('label'=>'Ver Inventario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Buscar Inventario', 'url'=>array('admin')),
);
?>

<h1>Actualizar Inventario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>