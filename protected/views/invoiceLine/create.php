<?php
/* @var $this InvoiceLineController */
/* @var $model InvoiceLine */

$this->breadcrumbs=array(
	'Invoice Lines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvoiceLine', 'url'=>array('index')),
	array('label'=>'Manage InvoiceLine', 'url'=>array('admin')),
);
?>

<h1>Create InvoiceLine</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>