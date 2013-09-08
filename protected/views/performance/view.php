<?php
/* @var $this PerformanceController */
/* @var $model Performance */

$this->breadcrumbs=array(
	'Performances'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Performance', 'url'=>array('index')),
	array('label'=>'Create Performance', 'url'=>array('create')),
	array('label'=>'Update Performance', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Performance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Performance', 'url'=>array('admin')),
);
?>

<h1>View Performance #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ORDER_ID',
		'PERFORMANCE_DESCRIPTION',
		'PERFORMANCE_QUANTITY',
		'PERFORMANCE_UNITPRICE',
		'PERFORMANCE_DATE',
		'TAKEINACCOUNT',
		'CREATED',
	),
)); ?>
