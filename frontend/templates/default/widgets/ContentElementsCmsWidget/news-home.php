<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget */
?>

<? if ($widget->label) : ?>
    <div class="heading-title heading-line-single margin-bottom-20 margin-top-40">
        <h3 class="text-center fz20"><a href="/article" class=""><?= $widget->label; ?></a></h3>
    </div>
<? endif; ?>

<? if ($widget->enabledPjaxPagination = \skeeks\cms\components\Cms::BOOL_Y) : ?>
    <? \skeeks\cms\modules\admin\widgets\Pjax::begin(); ?>
<? endif; ?>

<? echo \yii\widgets\ListView::widget([
    'dataProvider'      => $widget->dataProvider,
    'itemView'          => 'news-item',
    'emptyText'          => '',
    'options'           =>
    [
        'class'   => 'news-slider owl-carousel owl-padding-10 controlls-over',
        'tag'   => 'div',
		 'data-plugin-options'   => '{"singleItem": false, "items":"4", "autoPlay": false, "navigation": true, "pagination": false}',
    ],
    'itemOptions' => [
        'tag' => false
    ],
    'layout'            => "{items}"
])?>

<? if ($widget->enabledPjaxPagination = \skeeks\cms\components\Cms::BOOL_Y) : ?>
    <? \skeeks\cms\modules\admin\widgets\Pjax::end(); ?>
<? endif; ?>