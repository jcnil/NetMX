<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_product'); ?>
		<?php echo $form->dropDownList($model,'type_product',array('Consumible'=>'Consumible','Servicio'=>'Servicio'), array('empty'=>'-- Seleccione--')); ?>
		<?php echo $form->error($model,'type_product'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warranty'); ?>
		<?php echo $form->textField($model,'warranty'); ?>
		<?php echo $form->error($model,'warranty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lot_id'); ?>
		<?php echo $form->textField($model,'lot_id'); ?>
		<?php echo $form->error($model,'lot_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_sale'); ?>
		<?php echo $form->textArea($model,'description_sale',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_inventory'); ?>
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
		<?php echo $form->error($model,'date_inventory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->