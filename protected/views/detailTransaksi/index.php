<?php
/* @var $this DetailTransaksiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Transaksis',
);

$this->menu=array(
	array('label'=>'Create DetailTransaksi', 'url'=>array('create')),
	array('label'=>'Manage DetailTransaksi', 'url'=>array('admin')),
);
?>

<h1>Detail Transaksis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
