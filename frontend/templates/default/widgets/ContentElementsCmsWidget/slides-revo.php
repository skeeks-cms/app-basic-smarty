<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget */

\frontend\assets\SmartyThemeRevolutionAsset::register($this);
?>

<!-- OWL SLIDER -->

<? if ($widget->dataProvider->query->count()) : ?>
    <!-- REVOLUTION SLIDER -->
    <div id="slider" class="slider fullwidthbanner-container roundedcorners">
        <div class="fullwidthbanner" data-height="550" data-navigationStyle="">
        <? echo \yii\widgets\ListView::widget([
            'dataProvider'      => $widget->dataProvider,
            'itemView'          => 'slide-revo-item',
            'emptyText'          => '',
            'options'           =>
            [
                'tag'       => 'ul',
            ],
            'itemOptions' => [
                'tag' => false
            ],
            'layout'            => "{items}"
        ])?>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!-- /REVOLUTION SLIDER -->
<? endif; ?>

