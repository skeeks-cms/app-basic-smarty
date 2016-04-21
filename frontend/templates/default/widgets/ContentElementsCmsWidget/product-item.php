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
<li class="col-lg-4 col-sm-6 col-xs-12">

    <div class="shop-item">

        <div class="thumbnail catalog_list">
            <!-- product image(s) -->
            <a class="shop-item-image" href="<?= $model->url; ?>" data-pjax="0">
                <img src="<?= \skeeks\cms\helpers\Image::getSrc($model->image->src); ?>
                <?/*= \Yii::$app->imaging->getImagingUrl($model->image->src,
                    new \skeeks\cms\components\imaging\filters\Thumbnail([
                        'w'    => 409,
                        'h'    => 258,
                    ])
                ) */?>" title="<?= $model->name; ?>" alt="<?= $model->name; ?>" class="img_list_catalog" />

            </a>
            <!-- /product image(s) -->

            <!-- hover buttons -->
            <div class="shop-option-over">
                <? if ($shopProduct->quantity > 0) : ?>
                    <a class="btn btn-default" href="#" onclick="sx.Shop.addProduct(<?= $shopProduct->id; ?>, 1); return false;"><i class="fa fa-cart-plus size-20"></i></a>
                <? else : ?>
                    <a class="btn btn-default" href="#" onclick="new sx.classes.PreOrder('<?= \yii\helpers\Html::encode($model->name); ?>'); return false;"><i class="fa fa-cart-plus size-20"></i></a>
                <? endif; ?>


            </div>
            <!-- /hover buttons -->

            <!-- product more info -->
            <? if ($shopProduct->minProductPrice->id != $shopProduct->baseProductPrice->id) : ?>
                <div class="shop-item-info">
                    <span class="label label-danger">Скидка: <?= \Yii::$app->formatter->asPercent(
                            ( 100 - ( $shopProduct->minProductPrice->money->convertToCurrency("RUB")->getAmount() * 100 / $shopProduct->baseProductPrice->money->convertToCurrency("RUB")->getAmount()) )/100
                        ); ?></span>
                </div>
            <? endif; ?>
            <!--<div class="shop-item-info">
                <span class="label label-success">NEW</span>
                <span class="label label-danger">SALE</span>
            </div>-->
            <!-- /product more info -->
        </div>

        <div class="shop-item-summary text-center">
            <h2 class="non-condensed fz15"><a class="cl-green" href="<?= $model->url; ?>"><?= $model->name; ?></a ></h2>

            <!-- rating -->

            <!-- /rating -->

            <!-- price -->
            <div class="shop-item-price">

                <? if ($shopProduct->baseProductPrice->money->getAmount() == $shopProduct->minProductPrice->money->getAmount()) : ?>

                    <?= \Yii::$app->money->convertAndFormat($shopProduct->baseProductPrice->money); ?>

                <? else : ?>
                    <span class="line-through">
                        <?= \Yii::$app->money->convertAndFormat($shopProduct->baseProductPrice->money); ?>
                    </span>
                        <?= \Yii::$app->money->convertAndFormat($minMoney); ?>
                <? endif; ?>


            </div>
            <!-- /price -->


        </div>

        <div class="shop-item-buttons text-center">

            <? if ($shopProduct->quantity > 0) : ?>
                <a class="btn btn-bordered cl-orange" href="#" onclick="sx.Shop.addProduct(<?= $shopProduct->id; ?>, 1); return false;"><i class="fa fa-cart-plus"></i> В корзину</a>
            <? else : ?>
                <a class="btn btn-bordered cl-orange cl-black" href="#" onclick="new sx.classes.PreOrder('<?= \yii\helpers\Html::encode($model->name); ?>'); return false;"><i class="fa fa-cart-plus"></i> Предзаказ</a>
            <? endif; ?>

        </div>

    </div>

</li>
