<?php
/* @var $this DetailTransaksiController */
/* @var $data DetailTransaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaksi_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaksi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produk_id')); ?>:</b>
	<?php echo CHtml::encode($data->produk_id); ?>
	<br />


</div>