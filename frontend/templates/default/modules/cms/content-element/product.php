<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 24.05.2015
 */
/* @var $this \yii\web\View */
/* @var $model \skeeks\cms\models\CmsContentElement */
/*$models = \skeeks\cms\models\CmsContentElement::find()->where([
    'content_id' => 2
])->all();

foreach ($models as $model)
{
    $shopProduct = \skeeks\cms\shop\models\ShopProduct::getInstanceByContentElement($model);
    $shopProduct->quantity = 1;
    $shopProduct->save();
}*/

\frontend\assets\OwnCarouselAsset::register($this);
\frontend\assets\ZoomAsset::register($this);
\frontend\assets\LightBoxAsset::register($this);

$this->registerJs(<<<JS
new sx.classes.OwnCarousel({
	'jsquerySelector' : '.owl-carousel'
});
new sx.classes.Zoom({
	'jsquerySelector' : '.zoom'
});
new sx.classes.LightBox({
	'jsquerySelector' : '.lightbox'
});


JS
);

$shopProduct = \skeeks\cms\shop\models\ShopProduct::getInstanceByContentElement($model);
$product = \common\models\Product::instance($model);


$shopProduct->createNewView();

//css версии для печати
if (\Yii::$app->request->get('print'))
{
    $this->registerCss(<<<CSS
#header, #topBar, #footer
{
    display: none;
}
CSS
);
}
?>
<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>

<!-- Product page -->
<section class="padding-top-20 sx-catalog">
    <div class="container">
        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">

                <div class="row">
					<!--<div class="col-xs-12 ">
						<h1 class="cl-green mt-0 mb-20 fz35 "><?/*= $model->name; */?></h1>
					</div>-->
					
                    <!-- IMAGE -->
                    <div class="col-lg-5 col-sm-5">

                        <div class="thumbnail one-product-img relative margin-bottom-3">

                            <figure id="zoom-primary" class="zoom" data-mode="mouseover" style="position: relative; overflow: hidden;">
                                <!--
                                    zoom buttton

                                    positions available:
                                        .bottom-right
                                        .bottom-left
                                        .top-right
                                        .top-left
                                -->
                                <a class="lightbox bottom-right" href="<?= $model->image->src; ?>" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

                                <!--
                                    image

                                    Extra: add .image-bw class to force black and white!
                                -->
                                <img class="img-responsive" src="<?= $model->image->src; ?>" title="<?= $model->name; ?>" alt="<?= $model->name; ?>" width="1200" height="1500" alt="This is the product title">
                                <img src="<?= $model->image->src; ?>" class="zoomImg" title="<?= $model->name; ?>" alt="<?= $model->name; ?>" style="position: absolute; top: -268.488px; left: -84.3509px; opacity: 0; width: 1000px; height: 1500px; border: none; max-width: none; max-height: none;">
                            </figure>

                        </div>
                        <? if( $gallery = $model->images ) : ?>
                        <!-- Thumbnails (required height:100px) -->

                        <div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured"  data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}' style="opacity: 1; display: block;">
                                <a class="thumbnail active" href="<?= $model->image->src; ?>">
                                    <img src="<?= $model->image->src; ?>" height="100" alt="<?=$image->name; ?>" title="<?=$image->name; ?>" style="min-height: 100px">
                                </a>
                                <? foreach ($gallery as $image) : ?>
                                    <a class="thumbnail" href="<?=$image->src; ?>">
                                            <img src="<?=$image->src; ?>" height="100" alt="<?=$image->name; ?>" title="<?=$image->name; ?>" style="min-height: 100px">
                                    </a>
                                    <? endforeach; ?>

                        </div>
                        <!-- /Thumbnails -->
                        <? endif; ?>
						<div class="mt-20">
							<ul class="list-inline">
                                <? if ($dec = $model->relatedPropertiesModel->getAttribute('dec')) : ?>
                                    <li><a href="<?= $dec; ?>" target="_blank"><i class="fa fa-file-text-o fz14"></i> Декларация</a></li>
                                <? endif; ?>

                                <? if ($cer = $model->relatedPropertiesModel->getAttribute('cer')) : ?>
                                    <li><a href="<?= $cer; ?>" target="_blank"><i class="fa fa-certificate  fz14"></i> Сертификат</li>
                                <? endif; ?>

								<li><a href="<?= $model->url ?>?print=true" target="_blank"><i class="fa fa-print"></i> Версия для печати</a></li>
							</ul>
						</div>
                    </div>
                    <!-- /IMAGE -->

                    <!-- ITEM DESC -->
                    <div class="col-lg-7 col-sm-7">
						<div class="clearfix price-and-button margin-bottom-30">
							<div class=" margin-bottom-10 margin-right-20 pull-left">
								<!-- price -->
								<div class="shop-item-price cl-orange condensed text-nowrap">
									<!--<span class="line-through nopadding-left"></span>-->
									<? if ($shopProduct->minProductPrice->money->getAmount() == $shopProduct->baseProductPrice->money->getAmount()) : ?>

									    <?= \Yii::$app->money->convertAndFormat($shopProduct->baseProductPrice->money); ?>

									<? else : ?>
                                        <span class="line-through nopadding-left">
                                            <?= \Yii::$app->money->convertAndFormat($shopProduct->baseProductPrice->money); ?>
                                        </span>
                                            <?= \Yii::$app->money->convertAndFormat($minMoney); ?>
									<? endif; ?>
									/ <?= $shopProduct->measure->symbol_rus; ?>.
									
								</div>
                                <? if ($shopProduct->measure_ratio != 1) : ?>
                                    <div class="text-muted non-condensed">Товар продается по <?= $shopProduct->measure_ratio; ?> <?= $shopProduct->measure->symbol_rus; ?>.</div>
                                <? endif; ?>

								<!-- /price -->
							</div>
							<div class=" product-add-cart-wrap">
								 <!-- form -->
									
								<?
$this->registerJs(<<<JS
jQuery("#product-qty-dd li a").bind("click", function(e) {
e.preventDefault();

var data_val = jQuery(this).attr('data-val').trim();

/* change visual value and hidden input */
jQuery("#product-selected-qty>span").empty().append(data_val);
jQuery("#qty").val(data_val); // UPDATE HIDDEN FIELD

/* change visual selected */
jQuery("#product-qty-dd li").removeClass('active');
jQuery(this).parent().addClass('active');
});
JS
);
?>
									<div class="btn-group pull-left product-opt-qty" style="display:none;">
										<button type="button" class="btn btn-default dropdown-toggle noradius" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
										Количество <small id="product-selected-qty">(<span>1</span>)</small>
										</button>
										
										<ul id="product-qty-dd" class="dropdown-menu clearfix" role="menu">
										<li class="active"><a data-val="1" href="#">1</a></li>
										<li><a data-val="2" href="#">2</a></li>
										<li><a data-val="3" href="#">3</a></li>
										<li><a data-val="4" href="#">4</a></li>
										<li><a data-val="5" href="#">5</a></li>
										<li><a data-val="6" href="#">6</a></li>
										<li><a data-val="7" href="#">7</a></li>
										<li><a data-val="8" href="#">8</a></li>
										<li><a data-val="9" href="#">9</a></li>
										<li><a data-val="10" href="#">10</a></li>
										</ul>
									</div>
									
								    <? if ($shopProduct->quantity > 0) : ?>
                                        <a class="fz20  btn btn-warning product-add-cart" href="#" onclick="sx.Shop.addProduct(<?= $model->id; ?>, $('#product-qty-dd li.active a').attr('data-val').trim()); return false;"><i class="fa fa-cart-plus"></i> В корзину</a>
                                    <? else : ?>
                                        <a class="fz20 btn btn-warning product-add-cart sx-fancybox" href="#" onclick="new sx.classes.PreOrder('<?= \yii\helpers\Html::encode($model->name); ?>'); return false;"><i class="fa fa-cart-plus"></i> Предзаказ</a>
                                    <? endif; ?>

								 <!-- /form -->
                                <!-- /form -->
							</div>
						</div>
						
						<div class="product-textUnderBasket ">
							<p><?= $product->textUnderBasket; ?></p>
						</div>
                      
                        <div class="product-tabs ">
							
							<ul id="myTab" class="nav nav-tabs nav-bottom-border  nav-justified" role="tablist">
								<? if ($model->description_full) : ?>
								<li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab" class="non-condensed fz20">Описание</a></li>
								<? endif; ?>
							
								<li role="presentation"><a href="#specs" role="tab" data-toggle="tab" class="non-condensed fz20">Состав</a></li>

								<li role=""><a href="#comments" role="tab" data-toggle="tab" class="non-condensed fz20">Отзывы <? if ($product->AmountComments>0) : ?>(<?= $product->AmountComments;?>)<? endif; ?></a></li>
								
							</ul>
							
							<div class="tab-content padding-top-20">
								<!-- DESCRIPTION -->
								<div role="tabpanel" class="tab-pane active" id="description">
									<!-- /full description -->
									<p><?= $model->description_full; ?></p>
									
								</div>
								
								<!-- SPECIFICATIONS -->
								<div role="tabpanel" class="tab-pane" id="specs">
									<!-- short description -->
									<p><?= $model->relatedPropertiesModel->getAttribute('sostav'); ?></p>
								</div>
							
								<div role="tabpanel" class="tab-pane" id="comments">
									<!-- Widget Comments -->
									<?= \skeeks\cms\reviews2\widgets\reviews2\Reviews2Widget::widget([
                                        'namespace'                 => 'Reviews2Widget',
                                        'viewFile'                 => '@app/views/widgets/Reviews2Widget/package',
                                        'cmsContentElement'         => $model
                                    ]); ?>
									<!-- /Widget Comments -->
								</div>
							</div>
						</div>
					
                        <div class="products-brand clearfix">
                            <? if ($shopProduct->quantity > 0) : ?>
                                <span class="pull-right text-success"><i class="fa fa-check"></i> В наличии</span>
                            <? endif; ?>

                            <!--
                            <span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
                            -->

                            <? if ($product->article) : ?><strong>Артикул:</strong> <?= $product->article; ?><br><? endif; ?>
                            <? if ($product->brand->name) : ?><strong>Брэнд:</strong> <?= $product->brand->name; ?><br><? endif; ?>
                            
                        </div>


                    </div>
                </div>



                <?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
                        'namespace' => 'ContentElementsCmsWidget-sameProducts',
                        'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/sameProducts',
                        'label' 	=> 'Подобные товары',
                        'tree_ids' 	=> [$model->tree_id],
                        'limit' 	=> 10,
                        'activeQueryCallback' 	=> function(\yii\db\ActiveQuery $query) use ($model)
                        {
                            $query->andWhere(['!=', \skeeks\cms\models\CmsContentElement::tableName() . ".id", $model->id]);
                        }
                    ]); ?>
            </div>


            <!-- LEFT -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

                <!-- CATEGORIES -->
                <div class="side-nav margin-bottom-60">


                    <?= trim(\skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                        'namespace'         => 'TreeMenuCmsWidget-leftmenu',
                        'viewFile'          => '@template/widgets/TreeMenuCmsWidget/left-menu',
                        'treePid'           => $model->id,
                        'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
                        'label'             => 'Каталог',
                    ])); ?>

                </div>
                <!-- /CATEGORIES -->
            </div>

        </div>
    </div>
</section>



