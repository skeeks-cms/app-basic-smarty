<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 24.05.2015
 */
/* @var $this \yii\web\View */
/* @var $model \skeeks\cms\models\CmsContentElement */
?>
<?= $this->render('@template/include/breadcrumbs-no-h1', [
    'model' => $model,
    'title' => '<a href="'.$model->cmsTree->url.'">'.$model->cmsTree->name.'</a>',
])?>

<!-- Product page -->
<section class="padding-top-30 padding-bottom-30">
    <div class="container">

        <article class="article-page">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<h2 class="margin-top-0 margin-bottom-10 article-page_title"><?= $model->name; ?></h2>
					<div class="article-page_text">
						<? if ($model->relatedPropertiesModel->getAttribute('phone')) : ?>
						<p><b>Тел.:</b> <?= $model->relatedPropertiesModel->getAttribute('phone'); ?></p>
						<? endif; ?>

						<? if ($model->relatedPropertiesModel->getAttribute('email')) : ?>
							<p><b>E-mail.:</b> <?= $model->relatedPropertiesModel->getAttribute('email'); ?></p>
						<? endif; ?>
						<? if ($model->relatedPropertiesModel->getAttribute('address')) : ?>
							<p><b>Адрес:</b> <?= $model->relatedPropertiesModel->getAttribute('address'); ?></p>
						<? endif; ?>
					</div>
					<div class="margin-bottom-10 margin-top-10">
						<a class="fz15  " href="/dealers"><i class="fa fa-arrow-left"></i> К списку дилеров</a>
					</div>
					<? if ($model->image) : ?>
						<img src="<?= $model->image->src; ?>" alt="<?=$model->name; ?>" title="<?=$model->name; ?>" class="thumbnail col-xs-12 col-sm-4 pull-left">
					<? endif; ?>

					<div class="article-page_text">
						<? if ($model->description_full) : ?>
						<?=$model->description_full;?>
						<? else : ?>
						<?=$model->description_short;?>
						<? endif; ?>
					</div >
				</div>
				<div class="col-xs-12 col-sm-6">

					<?
						$point = [];
						$coordinatesString = $model->relatedPropertiesModel->getAttribute('coordinates');
						if ($coordinatesString)
						{
							$coordinates = explode(",", $coordinatesString);
							$coordinates[0] = (float) $coordinates[0];
							$coordinates[1] = (float) $coordinates[1];

							/**
							 * @var $model \skeeks\cms\models\CmsContentElement
							 */
							$point = \yii\helpers\ArrayHelper::merge( $model->toArray($model->fields(), $model->extraFields()), [
								'coordinates' => $coordinates,
								'url'           => $model->url,

								'phone'         => $model->relatedPropertiesModel->getAttribute('phone'),
								'email'         => $model->relatedPropertiesModel->getAttribute('email'),
								'address'       => $model->relatedPropertiesModel->getAttribute('address'),
							]);
						}

					$js = \yii\helpers\Json::encode(['point' => $point]);
					?>
			<? $yaMap = \skeeks\cms\ya\map\widgets\YaMapWidget::begin([
				'options' =>
				[
					'class' => 'sx-map',
					'style' => 'height: 40vh;'
				]
			]) ?>
				<? $yaMap->setZoom(13)->setCenter()->setControlls([
					'fullscreenControl', 'zoomControl'
				]); ?>
			<? \skeeks\cms\ya\map\widgets\YaMapWidget::end() ?>

<?
$this->registerJs(<<<JS
(function(sx, $, _)
{
    sx.classes.YaPluginDealer = sx.classes.ya.plugins._Base.extend({

        _initOnReady: function () {

            var self = this;
            this._initPoint();
        },

        _initPoint: function()
        {
			var self = this;

			self.MapObject.YaMap.behaviors.disable('scrollZoom');

			var object = this.get('point');
            var ObjectPlacemark = new ymaps.Placemark(object.coordinates, {
				objectId: object.id,
				//balloonContentHeader: object.name,
				//balloonContent: self.getObjectBalloonTemplate(object),
				hintContent: object.name
				}, {preset: "islands#dotCircleIcon",
				// Задаем цвет метки (в формате RGB).
				iconColor: '#009041'});

			self.MapObject.YaMap.geoObjects.add(ObjectPlacemark);
			self.MapObject.YaMap.setCenter(object.coordinates);
        }
	});

    new sx.classes.YaPluginDealer(sx.yaMaps.get('{$yaMap->id}'), {$js});
})(sx, sx.$, sx._);
JS
)
?>
				</div>
			</div>

        </article>
    </div>
</section>








