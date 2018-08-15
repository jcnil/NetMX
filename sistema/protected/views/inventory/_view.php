<?php
/* @var $this InventoryController */
/* @var $data Inventory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_product')); ?>:</b>
	<?php echo CHtml::encode($data->type_product); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barcode')); ?>:</b>
	<?php echo CHtml::encode($data->barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<?php 
	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warranty')); ?>:</b>
	<?php echo CHtml::encode($data->warranty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_price')); ?>:</b>
	<?php echo CHtml::encode($data->list_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lot_id')); ?>:</b>
	<?php echo CHtml::encode($data->lot_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->new_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_purchase')); ?>:</b>
	<?php echo CHtml::encode($data->description_purchase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_sale')); ?>:</b>
	<?php echo CHtml::encode($data->description_sale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_inventory')); ?>:</b>
	<?php echo CHtml::encode($data->date_inventory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

</div>