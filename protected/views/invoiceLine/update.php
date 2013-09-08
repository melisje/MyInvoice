<?php
/* @var $this InvoiceLineController */
/* @var $model InvoiceLine */

$this->breadcrumbs=array(
	'Invoice Lines'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvoiceLine', 'url'=>array('index')),
	array('label'=>'Create InvoiceLine', 'url'=>array('create')),
	array('label'=>'View InvoiceLine', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage InvoiceLine', 'url'=>array('admin')),
);
?>

<h1>Update InvoiceLine <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>