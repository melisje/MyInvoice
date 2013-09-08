<?php
/* @var $this InvoiceLineController */
/* @var $data InvoiceLine */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InvoiceID')); ?>:</b>
	<?php echo CHtml::encode($data->InvoiceID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LineNr')); ?>:</b>
	<?php echo CHtml::encode($data->LineNr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Quantity')); ?>:</b>
	<?php echo CHtml::encode($data->Quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UnitPrice')); ?>:</b>
	<?php echo CHtml::encode($data->UnitPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reduction')); ?>:</b>
	<?php echo CHtml::encode($data->Reduction); ?>
	<br />


</div>