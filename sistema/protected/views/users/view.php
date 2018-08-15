<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Registrar Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Usted esta seguro de eliminar el Usuario?')),
	array('label'=>'Buscar Usuario', 'url'=>array('admin')),
);
?>


<h1>Ver Usuarios #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'last_name',
		'sex',
		'identification',
		'address',
		'phone',
		'home_phone',
		'login',
		'password',
		'email',
		'active',
		'profile',
	),
)); ?>
