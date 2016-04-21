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
<div class="side-nav-head">
    <button class="fa fa-bars"></button>
    <h4 class="fz20 visible-xs"><?= $widget->label; ?></h4>
</div>

<? if ($models = $widget->activeQuery->all()) : ?>
    <ul class="list-group list-group-bordered list-group-noicon ">
    <? foreach ($models as $model) : ?>
        <?= $this->render("_one-left", [
            "widget"        => $widget,
            "model"         => $model,
        ]); ?>
    <? endforeach; ?>
    </ul>
<? endif; ?>

<div class="shop-item shop-item padding-bottom-10">
	<a data-pjax="0" href="#" class="cl-orange" target="_blank"><img src="http://images.ua.prom.st/239367516_w640_h2048_garantiya.png?PIMAGE_ID=239367516" class="pull-left" style="width: 82px;margin-top: -20px;">Гарантия качества<br /><br /></a>
</div>