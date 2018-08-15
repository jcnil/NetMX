<?php
/* @var $this PartnersController */
/* @var $model Partners */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Lista de Clientes', 'url'=>array('index')),
	array('label'=>'Registrar Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Usted esta seguro de eliminar el Cliente?')),
	array('label'=>'Buscar Clientes', 'url'=>array('admin')),
);
?>

<h1>Ver Clientes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'last_name',
		'identification',
		'sex',
		'state_civil',
		'address',
		'zip',
		'email',
		'fax',
		'phone',
		'home_phone',
		'comment',
		'active',
		'product_id',
	),
)); ?>

