<?php
/* @var $this CountersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Counters',
);

$this->menu=array(
	array('label'=>'Create Counters', 'url'=>array('create')),
	array('label'=>'Manage Counters', 'url'=>array('admin')),
);
?>

<h1>Counters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
