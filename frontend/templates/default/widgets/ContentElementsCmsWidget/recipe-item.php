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
?>


<div class="col-xs-12 col-sm-6">
	<div class="recipes-item row p-rel">
		
        <!-- IMAGE -->
		<div class="col-xs-12 p-rel"><img src="<?= \skeeks\cms\helpers\Image::getSrc($model->image->src); ?><? /*= \Yii::$app->imaging->getImagingUrl($model->getMainImageSrc(),
			new \skeeks\cms\components\imaging\filters\Thumbnail([
			'w'    => 409,
			'h'    => 258,
			])
			) */ ?>" alt="<?= $model->name; ?>" title="<?= $model->name; ?>" class="img-responsive thumbnail"/>
		</div>
		
		<div class="col-xs-12  recipe-item-title">				
			<h2 class="fz30 text-center"><a class="cl-white" href="<?= $model->url; ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a></h2>
			

			
			<div class="text-center"><a href="<?= $model->url; ?>" data-pjax="0" class="btn btn-lg btn-success pr-30 pl-30 fz20">
				
				<span>Подробнее</span> <i class="fa fa-arrow-right"></i>
			</a></div >
		</div >    
	</div>
</div>
    
