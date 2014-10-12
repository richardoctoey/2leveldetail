<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('XCActiveForm', array(
	'id'=>'transaksi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php if(Yii::app()->user->hasFlash('error')): ?>
	<div class="row flash-error">
		<?php echo Yii::app()->user->getFlash('error');?>
	</div>
	<?php endif; ?>
	
	<?php if(Yii::app()->user->hasFlash('berhasil')): ?>
	<div class="row flash-success">
		<?php echo Yii::app()->user->getFlash('berhasil');?>
	</div>
	<?php endif; ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'no'); ?>
		<?php if($model->isNewRecord): ?>
			<?php echo $form->textField($model,'no',array('size'=>50,'maxlength'=>50)); ?>
		<?php else:?>
			<?php echo $form->textField($model,'no',array('size'=>50,'maxlength'=>50)); ?>
		<?php endif; ?>
		<?php echo $form->error($model,'no'); ?>
	</div>
	
	<p>Gunakan (Ctrl+Y) Untuk Menambah Produk</p>
	
	<div class="produk">
		<?php $index = 0; ?>
		<?php if(!$model->isNewRecord): ?>
			<?php if(isset($_POST[get_class($model)])): ?>
				<?php foreach($model->produk_id as $pesanan): ?>
				<div class="row">
					<?php echo $form->labelEx($model,"produk_id"); ?>
					<?php $data = CHtml::listData(Produk::model()->findAll(), 'id', 'nama'); ?>
					<?php echo $form->dropDownList($model, "produk_id[$index]", $data,array('prompt'=>'Pilih Produk')) ?>
					<?php echo $form->error($model,"produk_id[$index]"); ?>
					<?php $index++; ?>
				</div>
				<?php endforeach; ?>
			<?php else: ?>
				<?php foreach($model->detailTransaksis as $pesanan): ?>
					<?php $model->produk_id[$index] = $pesanan->produk_id; ?>
					<?php echo $form->labelEx($model,"produk_id"); ?>
					<?php $data = CHtml::listData(Produk::model()->findAll(), 'id', 'nama'); ?>
					<?php echo $form->dropDownList($model, "produk_id[$index]", $data,array('prompt'=>'Pilih Produk')) ?>
					<?php echo $form->error($model,"produk_id[$index]"); ?>
					<?php $index++; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php else: ?>
			<?php $index=0; ?>
			<?php if(isset($_POST[get_class($model)])): ?>
				<?php foreach($model->produk_id as $pesanan): ?>
				<div class="row">
					<?php echo $form->labelEx($model,"produk_id"); ?>
					<?php $data = CHtml::listData(Produk::model()->findAll(), 'id', 'nama'); ?>
					<?php echo $form->dropDownList($model, "produk_id[$index]", $data,array('prompt'=>'Pilih Produk')) ?>
					<?php echo $form->error($model,"produk_id[$index]"); ?>
					<?php $index++; ?>
				</div>
				<?php endforeach; ?>
			<?php else: ?>
				<div class="row">
					<?php echo $form->labelEx($model,"produk_id"); ?>
					<?php $data = CHtml::listData(Produk::model()->findAll(), 'id', 'nama'); ?>
					<?php echo $form->dropDownList($model, "produk_id[$index]", $data,array('prompt'=>'Pilih Produk')) ?>
					<?php echo $form->error($model,"produk_id[$index]"); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
$data =CHtml::listData(Produk::model()->findAll(), 'id', 'nama');
Yii::app()->clientScript->registerScript('tambahBarang',
	"$(document).bind('keydown', 'ctrl+y', function(){
		var val = $('.produk .row').length;
		$('.produk').append('<div class=\"row\">".$form->labelEx($model,'produk_id')."".$form->dropDownList($model, 'produk_id[\'+val+\']', $data,array('prompt'=>'Pilih Produk','encode'=>false))."".$form->error($model,'produk_id')."</div>');
	});
	"
);
?>