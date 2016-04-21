<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */

$catalogHelper = \common\helpers\CatalogTreeHelper::instance($model);
?>

<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>

<? if ($model->children) : ?>
    <!-- Product page -->
    <section class="padding-top-20 sx-catalog">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-lg-push-3 col-md-push-3 col-sm-push-4">
                    <div class="clearfix">
                            <div class="cat-descr clearfix"><?= $model->description_full; ?></div >

                            <?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                                'namespace'         => 'TreeMenuCmsWidget-sub-catalog-1',
                                'viewFile'          => '@template/widgets/TreeMenuCmsWidget/sub-catalog',
                                'treePid'           => $model->id,
                                'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
                            ]); ?>
                    </div>
                </div>

                <!-- LEFT -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-lg-pull-9 col-md-pull-9 col-sm-pull-8">

                    <!-- CATEGORIES -->
                    <div class="side-nav margin-bottom-60">
                        <?= trim(\skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                            'namespace'         => 'TreeMenuCmsWidget-leftmenu',
                            'viewFile'          => '@template/widgets/TreeMenuCmsWidget/left-menu',
                            'treePid'           => $model->id,
                            'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
                            'label'             => 'Каталог',
                        ])); ?>

                    </div>
                    <!-- /CATEGORIES -->
                </div>

            </div>
        </div>
    </section>

<? else : ?>

    <? \skeeks\cms\modules\admin\widgets\Pjax::begin(); ?>

    <?
    $this->registerCss(<<<CSS
.checkbox input[type=checkbox]
{
    left:auto;
}
CSS
);
    ?>



        <!-- Product page -->
        <section  class="padding-top-20 sx-catalog">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-9 col-sm-8 col-lg-push-3 col-md-push-3 col-sm-push-4">

                        <div class="clearfix">
                          

                            <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
                                'namespace' => 'ContentElementsCmsWidget-second',
                                'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/products',
                            ]); ?>
							<div class="cat-descr clearfix">  <?= $model->description_full; ?></div >

                        </div>

                    </div>

                    <!-- LEFT -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-lg-pull-9 col-md-pull-9 col-sm-pull-8">

                        <!-- CATEGORIES -->
                        <div class="side-nav margin-bottom-60">


                            <?= trim(\skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                                'namespace'         => 'TreeMenuCmsWidget-leftmenu',
                                'viewFile'          => '@template/widgets/TreeMenuCmsWidget/left-menu',
                                'treePid'           => $model->id,
                                'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
                                'label'             => 'Каталог',
                            ])); ?>



                        </div>
                        <!-- /CATEGORIES -->
                    </div>

                </div>
            </div>
        </section>

    <? \skeeks\cms\modules\admin\widgets\Pjax::end(); ?>
<? endif; ?>



