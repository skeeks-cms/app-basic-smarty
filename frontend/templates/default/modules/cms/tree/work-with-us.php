<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (?????)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */
?>

<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>

<section class="padding-top-30 padding-bottom-30">
	<div class="container content">
		<div class="row magazine-page">
			<div class="col-xs-12">
				<div class="desc-full cl-green text-bold">
					<?= $model->description_short; ?>
				
				</div>
				
			</div>
			
			
			<div class="col-xs-12">
				<h2 class="">Выберите вакансию:</h2>

				<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
					'form_code' => 'candidates',
					'namespace' => 'FormWidget-candidates',
					'viewFile' 	=> '@app/views/widgets/FormWidget/candidates'
				]); ?>

			</div>
			 
			
			
			<div class="col-xs-12 sx-content">
				

				<?= trim(\skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
					'namespace'         => 'TreeMenuCmsWidget-sub-catalog',
					'viewFile'          => '@app/views/widgets/TreeMenuCmsWidget/sub-catalog',
					'treePid'           => $model->id,
					'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
				])); ?>

				<?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
					'namespace'         => 'ContentElementsCmsWidget-sub-catalog',
					'viewFile'          => '@app/views/widgets/ContentElementsCmsWidget/articles',
					//'treePid'           => $model->id,
					//'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
				]); ?>

				<hr />

					<?= $model->description_full; ?>
			</div>
		</div>
	</div>
</section >