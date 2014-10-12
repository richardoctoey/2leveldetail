<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-transaksi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaksi_id'); ?>
		<?php echo $form->textField($model,'transaksi_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'transaksi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produk_id'); ?>
		<?php echo $form->textField($model,'produk_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'produk_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->