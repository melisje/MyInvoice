<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerNr'); ?>
		<?php echo $form->textField($model,'CustomerNr',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CustomerNr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CustomerCode'); ?>
		<?php echo $form->textField($model,'CustomerCode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CustomerCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Location'); ?>
		<?php echo $form->textField($model,'Location',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ZipCode'); ?>
		<?php echo $form->textField($model,'ZipCode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ZipCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Country'); ?>
		<?php echo $form->textField($model,'Country',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VAT'); ?>
		<?php echo $form->textField($model,'VAT',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Rate'); ?>
		<?php echo $form->textField($model,'Rate'); ?>
		<?php echo $form->error($model,'Rate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->