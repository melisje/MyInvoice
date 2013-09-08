<?php
/* @var $this CountersController */
/* @var $model Counters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'counters-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COUNTERID'); ?>
		<?php echo $form->textField($model,'COUNTERID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'COUNTERID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALUE'); ?>
		<?php echo $form->textField($model,'VALUE'); ?>
		<?php echo $form->error($model,'VALUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PREFIX'); ?>
		<?php echo $form->textField($model,'PREFIX',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PREFIX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUFFIX'); ?>
		<?php echo $form->textField($model,'SUFFIX',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SUFFIX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIGITS'); ?>
		<?php echo $form->textField($model,'DIGITS'); ?>
		<?php echo $form->error($model,'DIGITS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->