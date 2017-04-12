<?php
/* @var $this SubscriberController */
/* @var $model Subscriber */

$this->breadcrumbs=array(
	'Subscribers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subscriber', 'url'=>array('index')),
	array('label'=>'Create Subscriber', 'url'=>array('create')),
	array('label'=>'View Subscriber', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subscriber', 'url'=>array('admin')),
);
?>

<h1>Update Subscriber <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>