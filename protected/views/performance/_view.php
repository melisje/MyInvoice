<?php
/* @var $this PerformanceController */
/* @var $data Performance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORDER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ORDER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERFORMANCE_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->PERFORMANCE_DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERFORMANCE_QUANTITY')); ?>:</b>
	<?php echo CHtml::encode($data->PERFORMANCE_QUANTITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERFORMANCE_UNITPRICE')); ?>:</b>
	<?php echo CHtml::encode($data->PERFORMANCE_UNITPRICE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERFORMANCE_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->PERFORMANCE_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAKEINACCOUNT')); ?>:</b>
	<?php echo CHtml::encode($data->TAKEINACCOUNT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED); ?>
	<br />

	*/ ?>

</div>