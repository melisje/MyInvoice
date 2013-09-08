<?php
/* @var $this CountersController */
/* @var $model Counters */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COUNTERID'); ?>
		<?php echo $form->textField($model,'COUNTERID',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VALUE'); ?>
		<?php echo $form->textField($model,'VALUE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PREFIX'); ?>
		<?php echo $form->textField($model,'PREFIX',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUFFIX'); ?>
		<?php echo $form->textField($model,'SUFFIX',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIGITS'); ?>
		<?php echo $form->textField($model,'DIGITS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->