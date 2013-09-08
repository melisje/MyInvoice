<?php
/* @var $this PerformanceController */
/* @var $model Performance */

$this->breadcrumbs=array(
	'Performances'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Performance', 'url'=>array('index')),
	array('label'=>'Create Performance', 'url'=>array('create')),
	array('label'=>'View Performance', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Performance', 'url'=>array('admin')),
);
?>

<h1>Update Performance <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>