<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (ÑêèêÑ)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */
?>

<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>

<? if ($model->children) : ?>

<? endif ; ?>
<!--=== Content Part ===-->
<div class="padding-top-30 padding-bottom-30"><div class="container content">
    <div class="row magazine-page">
        <div class="col-md-12 sx-content">
            <?= $model->description_full; ?>

            <?= trim(\skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                'namespace'         => 'TreeMenuCmsWidget-sub-catalog',
                'viewFile'          => '@app/views/widgets/TreeMenuCmsWidget/sub-catalog',
                'treePid'           => $model->id,
                'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
            ])); ?>

            <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
                'namespace'         => 'ContentElementsCmsWidget-sub-articles',
                'viewFile'          => '@app/views/widgets/ContentElementsCmsWidget/articles',
                //'treePid'           => $model->id,
                //'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
            ]); ?>

            <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
                'namespace'         => 'ContentElementsCmsWidget-sub-recipes',
                'viewFile'          => '@app/views/widgets/ContentElementsCmsWidget/recipes',
                //'treePid'           => $model->id,
                //'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
            ]); ?>

        </div>
    </div>
</div></div >