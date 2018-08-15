<?php
/* @var $this PartnersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
	array('label'=>'Registrar Cliente', 'url'=>array('create')),
	array('label'=>'Buscar Cliente', 'url'=>array('admin')),
);
?>

<h1>Clientes</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
<br>
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partners-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
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
	array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>