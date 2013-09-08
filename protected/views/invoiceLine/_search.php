<?php
/* @var $this InvoiceLineController */
/* @var $model InvoiceLine */
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
		<?php echo $form->label($model,'InvoiceID'); ?>
		<?php echo $form->textField($model,'InvoiceID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LineNr'); ?>
		<?php echo $form->textField($model,'LineNr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Quantity'); ?>
		<?php echo $form->textField($model,'Quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UnitPrice'); ?>
		<?php echo $form->textField($model,'UnitPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reduction'); ?>
		<?php echo $form->textField($model,'Reduction'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->