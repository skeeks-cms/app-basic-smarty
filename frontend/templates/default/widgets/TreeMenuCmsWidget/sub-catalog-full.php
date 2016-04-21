<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $models  \skeeks\cms\models\Tree[] */
?>
<? if ($models = $widget->activeQuery->all()) : ?>
<ul class="shop-item-list row list-inline nomargin">
    <? foreach ($models as $model) : ?>

        <h2><?= $model->name; ?></h2>
        <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
            'namespace' => 'ContentElementsCmsWidget-second-' . $model->id,
            'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/products',
            'tree_ids'  => [$model->id],
            'enabledSearchParams'  => "N",
            'enabledCurrentTree'  => "N",
            'pageSize'  => 50,
        ]); ?>

    <? endforeach; ?>
</ul>
<? endif; ?>
