<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Counters', 'url'=>array('index')),
	array('label'=>'Manage Counters', 'url'=>array('admin')),
);
?>

<h1>Create Counters</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>