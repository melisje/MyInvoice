<?php
/* @var $this OrdersController */
/* @var $data Orders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORDER_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ORDER_ID), array('view', 'id'=>$data->ORDER_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUSTOMER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CUSTOMER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORDER_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->ORDER_DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORDER_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->ORDER_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLOSED')); ?>:</b>
	<?php echo CHtml::encode($data->CLOSED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->_CREATED); ?>
	<br />


</div>