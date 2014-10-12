<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */

$this->breadcrumbs=array(
	'Detail Transaksis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DetailTransaksi', 'url'=>array('index')),
	array('label'=>'Create DetailTransaksi', 'url'=>array('create')),
	array('label'=>'Update DetailTransaksi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DetailTransaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetailTransaksi', 'url'=>array('admin')),
);
?>

<h1>View DetailTransaksi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transaksi_id',
		'produk_id',
	),
)); ?>
