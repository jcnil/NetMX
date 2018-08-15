<?php
/* @var $this PartnersController */
/* @var $model Partners */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Lista de Clientes', 'url'=>array('index')),
	array('label'=>'Registrar Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#partners-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Cliente</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br>
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
