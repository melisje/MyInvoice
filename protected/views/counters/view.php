<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->COUNTERID,
);

$this->menu=array(
	array('label'=>'List Counters', 'url'=>array('index')),
	array('label'=>'Create Counters', 'url'=>array('create')),
	array('label'=>'Update Counters', 'url'=>array('update', 'id'=>$model->COUNTERID)),
	array('label'=>'Delete Counters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COUNTERID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Counters', 'url'=>array('admin')),
);
?>

<h1>View Counters #<?php echo $model->COUNTERID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COUNTERID',
		'VALUE',
		'PREFIX',
		'SUFFIX',
		'DIGITS',
	),
)); ?>
