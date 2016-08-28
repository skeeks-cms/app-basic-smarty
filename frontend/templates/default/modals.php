<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
?>

<?
\yii\bootstrap\Modal::begin([
	  'header' => 'Заказ звонка',
	  'id' => 'sx-callback',
	  'toggleButton' => false,
		'size' => \yii\bootstrap\Modal::SIZE_DEFAULT
  ]);
?>

	<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
		'form_code' => 'callback',
		'namespace' => 'FormWidget-callback',
		'viewFile' => 'with-messages'
		//'viewFile' => '@app/views/widgets/FormWidget/fiz-connect'
	]); ?>

<?
	\yii\bootstrap\Modal::end();
?>