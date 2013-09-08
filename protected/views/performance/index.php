<?php
/* @var $this PerformanceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Performances',
);

$this->menu=array(
	array('label'=>'Create Performance', 'url'=>array('create')),
	array('label'=>'Manage Performance', 'url'=>array('admin')),
);
?>

<h1>Performances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
