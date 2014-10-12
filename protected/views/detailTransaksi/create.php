<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */

$this->breadcrumbs=array(
	'Detail Transaksis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetailTransaksi', 'url'=>array('index')),
	array('label'=>'Manage DetailTransaksi', 'url'=>array('admin')),
);
?>

<h1>Create DetailTransaksi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>