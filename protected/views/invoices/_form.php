<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceNr'); ?>
		<?php echo $form->textField($model,'InvoiceNr',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'InvoiceNr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InvoiceDate'); ?>
		<?php echo $form->textField($model,'InvoiceDate'); ?>
		<?php echo $form->error($model,'InvoiceDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DueDate'); ?>
		<?php echo $form->textField($model,'DueDate'); ?>
		<?php echo $form->error($model,'DueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID'); ?>
		<?php echo $form->error($model,'CustomerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerReference'); ?>
		<?php echo $form->textField($model,'CustomerReference',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CustomerReference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VAT'); ?>
		<?php echo $form->textField($model,'VAT'); ?>
		<?php echo $form->error($model,'VAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remark'); ?>
		<?php echo $form->textArea($model,'Remark',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Conditions'); ?>
		<?php echo $form->textArea($model,'Conditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Conditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PayDate'); ?>
		<?php echo $form->textField($model,'PayDate'); ?>
		<?php echo $form->error($model,'PayDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Subject'); ?>
		<?php echo $form->textField($model,'Subject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Subject'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->