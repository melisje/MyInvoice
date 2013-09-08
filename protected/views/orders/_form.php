<?php
/* @var $this OrdersController */
/* @var $model Orders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-form',
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
		<?php echo $form->labelEx($model,'CUSTOMER_ID'); ?>
		<?php echo $form->textField($model,'CUSTOMER_ID',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CUSTOMER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORDER_DESCRIPTION'); ?>
		<?php echo $form->textField($model,'ORDER_DESCRIPTION',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ORDER_DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORDER_DATE'); ?>
		<?php echo $form->textField($model,'ORDER_DATE'); ?>
		<?php echo $form->error($model,'ORDER_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED'); ?>
		<?php echo $form->textField($model,'CREATED'); ?>
		<?php echo $form->error($model,'CREATED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLOSED'); ?>
		<?php echo $form->textField($model,'CLOSED'); ?>
		<?php echo $form->error($model,'CLOSED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_CREATED'); ?>
		<?php echo $form->textField($model,'_CREATED'); ?>
		<?php echo $form->error($model,'_CREATED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->