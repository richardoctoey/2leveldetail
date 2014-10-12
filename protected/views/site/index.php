<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>


<?php 
$dataTree = array(
	array(
		'text'=>'Library',
		'children'=>array(
			array(
				'text'=>'Book',
				'children'=>array(
					array(
						'text'=>'Book List',
						'id'=>1,
					),
				),
			),
			array(
				'text'=>'History',
				'id'=>2,
			),
			array(
				'text'=>'Event',
				'id'=>3,
			),
		),
	),
);

$this->widget('CTreeView',array(
	'data'=>$dataTree,
	'animated'=>'fast',
	'persist'=>'cookie',
	'collapsed'=>true,
	'url'=>$this->createUrl('index',array('id'=>1)),
	//'saveState'=>true,
	'htmlOptions'=>array(
		'class'=>'treeview-red',
	),
));


//fopen("http://localhost/");
?>