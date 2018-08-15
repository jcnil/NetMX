<?php
/* @var $this PartnersController */
/* @var $model Partners */
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
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->dropDownList($model,'sex',array('Masculino'=>'Masculino','Femenino'=>'Femenino'), array('empty'=>'-- Seleccione--')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state_civil'); ?>
		<?php echo $form->dropDownList($model,'state_civil',array('Soltero'=>'Soltero','Casado'=>'Casado','Divorciado'=>'Divorciado','Viudo'=>'Viudo'), array('empty'=>'-- Seleccione--')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->dropDownList($model,'product_id', CHtml::listData(Products::model()->findAll(),'id', 'name'), array('prompt'=>'-- Seleccione--'
			)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

		<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->