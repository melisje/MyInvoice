<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
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
		<?php echo $form->label($model,'InvoiceNr'); ?>
		<?php echo $form->textField($model,'InvoiceNr',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InvoiceDate'); ?>
		<?php echo $form->textField($model,'InvoiceDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DueDate'); ?>
		<?php echo $form->textField($model,'DueDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerID'); ?>
		<?php echo $form->textField($model,'CustomerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CustomerReference'); ?>
		<?php echo $form->textField($model,'CustomerReference',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VAT'); ?>
		<?php echo $form->textField($model,'VAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Remark'); ?>
		<?php echo $form->textArea($model,'Remark',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Type'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Conditions'); ?>
		<?php echo $form->textArea($model,'Conditions',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PayDate'); ?>
		<?php echo $form->textField($model,'PayDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Subject'); ?>
		<?php echo $form->textField($model,'Subject',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->