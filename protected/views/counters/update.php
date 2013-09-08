<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->COUNTERID=>array('view','id'=>$model->COUNTERID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Counters', 'url'=>array('index')),
	array('label'=>'Create Counters', 'url'=>array('create')),
	array('label'=>'View Counters', 'url'=>array('view', 'id'=>$model->COUNTERID)),
	array('label'=>'Manage Counters', 'url'=>array('admin')),
);
?>

<h1>Update Counters <?php echo $model->COUNTERID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>