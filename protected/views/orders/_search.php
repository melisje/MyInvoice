<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ORDER_ID'); ?>
		<?php echo $form->textField($model,'ORDER_ID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUSTOMER_ID'); ?>
		<?php echo $form->textField($model,'CUSTOMER_ID',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORDER_DESCRIPTION'); ?>
		<?php echo $form->textField($model,'ORDER_DESCRIPTION',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORDER_DATE'); ?>
		<?php echo $form->textField($model,'ORDER_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED'); ?>
		<?php echo $form->textField($model,'CREATED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLOSED'); ?>
		<?php echo $form->textField($model,'CLOSED'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'_CREATED'); ?>
		<?php echo $form->textField($model,'_CREATED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->