<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget */

\frontend\assets\OwnCarouselAsset::register($this);

$this->registerJs(<<<JS
new sx.classes.OwnCarousel({
	'jsquerySelector' : '.owl-carousel'
});
JS
);

?>

<!-- OWL SLIDER -->

<? echo \yii\widgets\ListView::widget([
    'dataProvider'      => $widget->dataProvider,
    'itemView'          => 'slide-item',
    'emptyText'          => '',
    'options'           =>
    [
        'tag'       => 'div',
        'class'       => 'owl-carousel buttons-autohide controlls-over nomargin',
        'data-plugin-options'       => '{"items": 1, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"fade", "progressBar":"true"}',
    ],
    'itemOptions' => [
        'tag' => "div"
    ],
    'layout'            => "{items}"
])?>

<!-- /OWL SLIDER -->

