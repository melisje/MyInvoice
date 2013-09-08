<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Invoices', 'url'=>array('index')),
	array('label'=>'Create Invoices', 'url'=>array('create')),
	array('label'=>'View Invoices', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Invoices', 'url'=>array('admin')),
);
?>

<h1>Update Invoices <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>