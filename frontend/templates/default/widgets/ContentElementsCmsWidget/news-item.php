<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 *
 * @var \skeeks\cms\models\CmsContentElement $model
 *
 */
$shopProduct = \skeeks\cms\shop\models\ShopProduct::getInstanceByContentElement($model)
?>
<div class="img-hover owl-item news-slider-item">
	<a href="<?= $model->url; ?>" class="news-slider-img-wrap">
		<img class="img-responsive" src="<?= \skeeks\cms\helpers\Image::getSrc($model->image->src); ?>" alt="">	
	</a>
	<div class="text-left fz12 margin-top-20">
		<i class="fa fa-calendar"></i>
		<span class=""><?= \Yii::$app->formatter->asDate($model->published_at, 'full')?></span>
	</div>
	<h4 class="text-left margin-top-10"><a href="<?= $model->url; ?>"><?= $model->name; ?></a></h4>
	
</div>
