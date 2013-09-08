<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerNr')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerNr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerCode')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Location')); ?>:</b>
	<?php echo CHtml::encode($data->Location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ZipCode')); ?>:</b>
	<?php echo CHtml::encode($data->ZipCode); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Country')); ?>:</b>
	<?php echo CHtml::encode($data->Country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VAT')); ?>:</b>
	<?php echo CHtml::encode($data->VAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rate')); ?>:</b>
	<?php echo CHtml::encode($data->Rate); ?>
	<br />

	*/ ?>

</div>