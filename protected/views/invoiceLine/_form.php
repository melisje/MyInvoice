<?php
/* @var $this InvoiceLineController */
/* @var $model InvoiceLine */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoice-line-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceID'); ?>
		<?php echo $form->textField($model,'InvoiceID'); ?>
		<?php echo $form->error($model,'InvoiceID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LineNr'); ?>
		<?php echo $form->textField($model,'LineNr'); ?>
		<?php echo $form->error($model,'LineNr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Quantity'); ?>
		<?php echo $form->textField($model,'Quantity'); ?>
		<?php echo $form->error($model,'Quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UnitPrice'); ?>
		<?php echo $form->textField($model,'UnitPrice'); ?>
		<?php echo $form->error($model,'UnitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Reduction'); ?>
		<?php echo $form->textField($model,'Reduction'); ?>
		<?php echo $form->error($model,'Reduction'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->