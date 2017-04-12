<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php echo $form->textField($model,'dob',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobphone'); ?>
		<?php echo $form->textField($model,'mobphone',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'mobphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suburb'); ?>
		<?php echo $form->textField($model,'suburb',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'suburb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pincode'); ?>
		<?php echo $form->textField($model,'pincode'); ?>
		<?php echo $form->error($model,'pincode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicareno'); ?>
		<?php echo $form->textField($model,'medicareno',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'medicareno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cardno'); ?>
		<?php echo $form->textField($model,'cardno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cardno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emergencyname'); ?>
		<?php echo $form->textField($model,'emergencyname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emergencyname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relationship'); ?>
		<?php echo $form->textField($model,'relationship',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'relationship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactno'); ?>
		<?php echo $form->textField($model,'contactno',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'contactno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refrence'); ?>
		<?php echo $form->textField($model,'refrence',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'refrence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subscriberId'); ?>
		<?php echo $form->textField($model,'subscriberId'); ?>
		<?php echo $form->error($model,'subscriberId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->