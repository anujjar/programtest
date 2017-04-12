<?php
/* @var $this SubscriberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subscribers',
);

$this->menu=array(
	array('label'=>'Create Subscriber', 'url'=>array('create')),
	array('label'=>'Manage Subscriber', 'url'=>array('admin')),
);
?>

<h1>Subscribers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
