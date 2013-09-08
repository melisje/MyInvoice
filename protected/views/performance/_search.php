<?php
/* @var $this PerformanceController */
/* @var $model Performance */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORDER_ID'); ?>
		<?php echo $form->textField($model,'ORDER_ID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERFORMANCE_DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'PERFORMANCE_DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERFORMANCE_QUANTITY'); ?>
		<?php echo $form->textField($model,'PERFORMANCE_QUANTITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERFORMANCE_UNITPRICE'); ?>
		<?php echo $form->textField($model,'PERFORMANCE_UNITPRICE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERFORMANCE_DATE'); ?>
		<?php echo $form->textField($model,'PERFORMANCE_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAKEINACCOUNT'); ?>
		<?php echo $form->textField($model,'TAKEINACCOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED'); ?>
		<?php echo $form->textField($model,'CREATED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->