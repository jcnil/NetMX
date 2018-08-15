<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Registrar Usuarios', 'url'=>array('create')),
	array('label'=>'Buscar Usuario', 'url'=>array('admin')),
);
?>

<h1>Usuarios</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>,
	'itemView'=>'_view',
)); */?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
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
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
