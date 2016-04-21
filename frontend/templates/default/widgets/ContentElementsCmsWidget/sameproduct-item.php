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
<!-- item -->
    <div class="shop-item nomargin">

        <div class="thumbnail catalog_list">
            <!-- product image(s) -->
            <a class="shop-item-image" href="<?= $model->url; ?>">
                <img class="img-responsive" src="<?= \skeeks\cms\helpers\Image::getSrc($model->image->src); ?>" alt="<?= $model->name; ?>" title="<?= $model->name; ?>" />
                <!--img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" /-->
            </a>
            <!-- /product image(s) -->

        </div>

        <div class="shop-item-summary text-center">
            <a href="<?= $model->url; ?>" class=" shop-product-name"><?= $model->name; ?></a >

            <!-- price -->
            <div class="shop-item-price">
                <!--span class="line-through">$98.00</span-->
                <?= \Yii::$app->money->convertAndFormat($shopProduct->baseProductPrice->money); ?>
            </div>
            <!-- /price -->
        </div>

        <!-- buttons -->
        <div class="shop-item-buttons text-center">
            <? if ($shopProduct->quantity > 0) : ?>
                <a class="btn btn-bordered btn-md cl-orange" href="#" onclick="sx.Shop.addProduct(<?= $shopProduct->id; ?>, 1); return false;"><i class="fa fa-cart-plus"></i> В корзину</a>
            <? else : ?>
                <a class="btn btn-bordered btn-md cl-orange cl-black" href="#" onclick="new sx.classes.PreOrder('<?= \yii\helpers\Html::encode($model->name); ?>'); return false;"><i class="fa fa-cart-plus"></i> Предзаказ</a>
            <? endif; ?>
        </div>
        <!-- /buttons -->
    </div>
    <!-- /item -->
