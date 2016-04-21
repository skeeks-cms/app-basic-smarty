<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $trees  \skeeks\cms\models\Tree[] */

?>
<ul class="shop-item-list row list-inline nomargin">
    <? if ($trees = $widget->activeQuery->all()) : ?>
        <? $i=0; ?>
        <? foreach ($trees as $model) : ?>

            <? if ($model->image) : ?>
                <li class="col-md-3 col-sm-6 col-xs-6 md-margin-bottom-30">
                    <div class="shop-item">
                        <div class="thumbnail catalog_list">
                            <a href="<?= $model->url; ?>" class="shop-item-image">
                                <img src="<?= $model->image->src; ?>" alt="<?= $model->image->name; ?>">
                            </a>
                            <!--<div class="easy-block-v1-badge rgba-purple"></div>-->
                        </div>
                        <div class="shop-item-summary text-center">
                            <h2><a href="<?= $model->url; ?>" class="shop-item-image"><?= $model->name; ?></a></h2>
                        </div>
                    </div>
                </li>
            <? endif;  ?>


        <? endforeach; ?>
    <? endif; ?>
</ul>
