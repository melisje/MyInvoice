<?php
/* @var $this PerformanceController */
/* @var $model Performance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'performance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ORDER_ID'); ?>
		<?php echo $form->textField($model,'ORDER_ID',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ORDER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERFORMANCE_DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'PERFORMANCE_DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PERFORMANCE_DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERFORMANCE_QUANTITY'); ?>
		<?php echo $form->textField($model,'PERFORMANCE_QUANTITY'); ?>
		<?php echo $form->error($model,'PERFORMANCE_QUANTITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERFORMANCE_UNITPRICE'); ?>
		<?php echo $form->textField($model,'PERFORMANCE_UNITPRICE'); ?>
		<?php echo $form->error($model,'PERFORMANCE_UNITPRICE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERFORMANCE_DATE'); ?>
		<?php echo $form->textField($model,'PERFORMANCE_DATE'); ?>
		<?php echo $form->error($model,'PERFORMANCE_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAKEINACCOUNT'); ?>
		<?php echo $form->textField($model,'TAKEINACCOUNT'); ?>
		<?php echo $form->error($model,'TAKEINACCOUNT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED'); ?>
		<?php echo $form->textField($model,'CREATED'); ?>
		<?php echo $form->error($model,'CREATED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->