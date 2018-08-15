<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Regsitrar Usuario',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Buscar Usuario', 'url'=>array('admin')),
);
?>

<h1>Registrar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>