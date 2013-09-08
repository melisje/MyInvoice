<?php
/* @var $this PerformanceController */
/* @var $model Performance */

$this->breadcrumbs=array(
	'Performances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Performance', 'url'=>array('index')),
	array('label'=>'Manage Performance', 'url'=>array('admin')),
);
?>

<h1>Create Performance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>