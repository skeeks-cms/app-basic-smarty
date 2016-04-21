<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */
?>

<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>
<?


$query = \skeeks\cms\models\CmsContentElement::find()
            ->joinWith('cmsContent content')
            ->joinWith('cmsContentElementProperties map')
            ->joinWith('cmsContentProperties contentProp')
            ->with('images')
            ->with('image')
            ->with('createdBy')
            ->with('createdBy.image')
            ->with('parentContentElement')
            ->with('parentContentElement.image')
            ->andWhere(["content.code" => "dealer"])
        ;

$result = [];
$models = $query->all();
foreach ($models as $model)
{
    $coordinatesString = $model->relatedPropertiesModel->getAttribute('coordinates');
    if ($coordinatesString)
    {
        $coordinates = explode(",", $coordinatesString);
        $coordinates[0] = (float) $coordinates[0];
        $coordinates[1] = (float) $coordinates[1];

        /**
         * @var $model \skeeks\cms\models\CmsContentElement
         */
        $result[] = \yii\helpers\ArrayHelper::merge( $model->toArray($model->fields(), $model->extraFields()), [
            'coordinates' => $coordinates,
            'url'           => $model->url,

            'phone'         => $model->relatedPropertiesModel->getAttribute('phone'),
            'email'         => $model->relatedPropertiesModel->getAttribute('email'),
            'address'       => $model->relatedPropertiesModel->getAttribute('address'),
        ]);
    }
}

$js = \yii\helpers\Json::encode([
    'models' => $result
]);

?>


<section class="padding-top-30 padding-bottom-30">
    <div class="container">

        <article class="article-page">
            <ul class="row list-unstyled">
            <? foreach($models as $model) : ?>
				<?
					$counter++;
				?>
               <li class="col-xs-12 col-sm-4 ">
					<div class=" border-b margin-bottom-10 fz16">
						<a href="<?= $model->url; ?>"><?= $model->name; ?></a> 
					</div >


					<div class=" margin-bottom-10" >
						<i class="fa fa-map-marker fa-lg"></i>
						<i><?= $model->relatedPropertiesModel->getAttribute('address'); ?></i>
					</div>
                    
                   <? if ($model->relatedPropertiesModel->getAttribute('phone')) : ?>
                       <div class=" margin-bottom-10">
                            <i class="fa fa-phone  fa-lg"></i>
                            <?= $model->relatedPropertiesModel->getAttribute('phone'); ?>
                        </div>
                    <? endif; ?>
                </li>
				<?
					if ($counter==3){$counter=0; echo '</ul><ul class="row  list-unstyled">';}
				?>
            <? endforeach; ?>
            </ul>

        </article>
    </div>
</section>





<? $yaMap = \skeeks\cms\ya\map\widgets\YaMapWidget::begin([
    'options' =>
    [
        'class' => 'sx-map',
        'style' => 'height: 600px;'
    ]
]) ?>
    <? $yaMap->setZoom()->setCenter()->setControlls([
        'fullscreenControl', 'typeSelector', 'rulerControl', 'routeEditor', 'searchControl', 'zoomControl'
    ]); ?>
<? \skeeks\cms\ya\map\widgets\YaMapWidget::end() ?>

<?



$this->registerJs(<<<JS
(function(sx, $, _)
{
    sx.classes.YaPluginDealers = sx.classes.ya.plugins._Base.extend({

        _initOnReady: function () {

            var self = this;
            this._initCluster();
            this.addObjects(self.get('models'));
        },

        _initCluster: function()
        {
            var self = this;

            this.Cluster = new ymaps.Clusterer();
            self.MapObject.YaMap.geoObjects.add(this.Cluster);
            self.MapObject.YaMap.behaviors.disable('scrollZoom');

            return this;
        },


        /**
         * @param object
         * @returns {string}
         */
        getObjectBalloonTemplate: function(object) {
            var result = '' +
                '<div class="balloon-content">' +
                    '<p class="fs14 strong mb-5"><a target="_blank" href="' + object.url + '">' + object.name + '</a></p>';
            if (object.phone)
            {
                result = result + '<p class="fs14 strong mb-5">Тел.:' + object.phone + '</p>';
            }

            if (object.email)
            {
                result = result + '<p class="fs14 strong mb-5">E-mail:' + object.email + '</p>';
            }

            if (object.address)
            {
                result = result + '<p class="fs14 strong mb-5">Адрес:' + object.address + '</p>';
            }
            result = result +
                    '<div class="clearfix"></div>' +
                '</div>' +
                '<a target="_blank" href="' + object.url + '">Подробнее &raquo;</a>';

            return result;
        },

        /**
        * @param models
        */
        addObjects: function (models)
        {
            var self = this;
            var objects = models;

            var balloonContentLayout = ymaps.templateLayoutFactory.createClass(
                '$[properties.balloonContent]'
            );

            _.each(objects, function(object, i)
            {
                if (object.coordinates)
                {
                    var ObjectPlacemark = new ymaps.Placemark(object.coordinates, {
                        objectId: object.id,
                        //balloonContentHeader: object.name,
                        balloonContent: self.getObjectBalloonTemplate(object),
                        hintContent: object.name
						}, { preset: "islands#dotCircleIcon",
						// Задаем цвет метки (в формате RGB).
						iconColor: '#009041'});

                    self.Cluster.add(ObjectPlacemark);
                }
            });
        }
    });

    new sx.classes.YaPluginDealers(sx.yaMaps.get('{$yaMap->id}'), {$js});
})(sx, sx.$, sx._);
JS
)

?>


