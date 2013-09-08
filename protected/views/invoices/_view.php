<?php
/* @var $this InvoicesController */
/* @var $data Invoices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InvoiceNr')); ?>:</b>
	<?php echo CHtml::encode($data->InvoiceNr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InvoiceDate')); ?>:</b>
	<?php echo CHtml::encode($data->InvoiceDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DueDate')); ?>:</b>
	<?php echo CHtml::encode($data->DueDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerID')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CustomerReference')); ?>:</b>
	<?php echo CHtml::encode($data->CustomerReference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VAT')); ?>:</b>
	<?php echo CHtml::encode($data->VAT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Remark')); ?>:</b>
	<?php echo CHtml::encode($data->Remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->Type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Conditions')); ?>:</b>
	<?php echo CHtml::encode($data->Conditions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PayDate')); ?>:</b>
	<?php echo CHtml::encode($data->PayDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subject')); ?>:</b>
	<?php echo CHtml::encode($data->Subject); ?>
	<br />

	*/ ?>

</div>