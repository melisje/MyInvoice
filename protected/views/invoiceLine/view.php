<?php
/* @var $this InvoiceLineController */
/* @var $model InvoiceLine */

$this->breadcrumbs=array(
	'Invoice Lines'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List InvoiceLine', 'url'=>array('index')),
	array('label'=>'Create InvoiceLine', 'url'=>array('create')),
	array('label'=>'Update InvoiceLine', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete InvoiceLine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvoiceLine', 'url'=>array('admin')),
);
?>

<h1>View InvoiceLine #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'InvoiceID',
		'LineNr',
		'Description',
		'Quantity',
		'UnitPrice',
		'Reduction',
	),
)); ?>
