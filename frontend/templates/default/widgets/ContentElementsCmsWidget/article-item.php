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



    <div class="blog-post-item row">

        <!-- IMAGE -->
			<div class="col-xs-12 col-sm-4"><img src="<?= \skeeks\cms\helpers\Image::getSrc($model->image->src); ?><? /*= \Yii::$app->imaging->getImagingUrl($model->getMainImageSrc(),
	new \skeeks\cms\components\imaging\filters\Thumbnail([
	'w'    => 409,
	'h'    => 258,
	])
	) */ ?>" alt="<?= $model->name; ?>" title="<?= $model->name; ?>" class="img-responsive thumbnail"/>
			</div>

			<div class="col-xs-12 col-sm-8">				
				<h2 ><a class="cl-green" href="<?= $model->url; ?>" title="<?= $model->name; ?>"><?= $model->name; ?></a></h2>
				<ul class="blog-post-info list-inline margin-bottom-20">
					<li>
						<a href="#">
							<i class="fa fa-calendar"></i>
							<span class=""><?= \Yii::$app->formatter->asDate($model->published_at, 'full')?></span>
						</a>
					</li>
				</ul>

				<p class=" margin-bottom-20"><?= $model->description_short; ?></p>

				<a href="<?= $model->url; ?>" data-pjax="0" class="btn btn-bordered cl-orange">
					<i class="fa fa-arrow-right"></i>
					<span>Подробнее</span>
				</a>
			</div >    
	</div>
