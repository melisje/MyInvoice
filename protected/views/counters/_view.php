<?php
/* @var $this CountersController */
/* @var $data Counters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTERID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COUNTERID), array('view', 'id'=>$data->COUNTERID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VALUE')); ?>:</b>
	<?php echo CHtml::encode($data->VALUE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PREFIX')); ?>:</b>
	<?php echo CHtml::encode($data->PREFIX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUFFIX')); ?>:</b>
	<?php echo CHtml::encode($data->SUFFIX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIGITS')); ?>:</b>
	<?php echo CHtml::encode($data->DIGITS); ?>
	<br />


</div>