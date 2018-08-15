<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_product'); ?>
		<?php echo $form->dropDownList($model,'type_product',array('Consumible'=>'Consumible','Servicio'=>'Servicio'), array('empty'=>'-- Seleccione--')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_inventory'); ?>
		 <?php
		  	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			   'model'=>$model,
			   'attribute'=>'date_inventory',
			   'language' => 'es',
			   'htmlOptions' => array('readonly'=>"readonly",'store'=>'true'),
			   'options'=>array(
				    'dateFormat'=>'yy-mm-dd',
				    'selectOtherMonths'=>false,
				    'showAnim'=>'slide',
				    'showOtherMonths'=>false, 
				    'changeMonth' => 'false', 
				    'changeYear' => 'false', 
				    'minDate'=>'date("Y-m-d")', 
				    'maxDate'=> "+20Y",
			    ),
			  )); 
			 ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
	</div>
   
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->