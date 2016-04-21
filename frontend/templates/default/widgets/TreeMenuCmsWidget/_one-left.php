<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $model   \skeeks\cms\models\Tree */
$hasChildrens = $model->children;

$activeClass = '';
if (strpos(\Yii::$app->request->pathInfo, $model->dir) !== false)
{
    $activeClass = ' active';
}
?>

<li class="list-group-item <?= $activeClass; ?>">
    <? if ($hasChildrens) : ?>
        <a href="<?= $model->url; ?>" title="<?= $model->name; ?>" class="dropdown-toggle" data-pjax="0">
            <?= $model->name; ?> <i class="fa fa-angle-double-right"></i>
        </a>

        <ul>
        <? foreach($model->getChildren()
                       ->andWhere(['active' => $widget->active])
                       ->orderBy([$widget->orderBy => $widget->order])
                       ->all() as $childTree) : ?>
                <li class="<?= strpos(\Yii::$app->request->pathInfo, $childTree->dir) !== false ? "active" : ""?>">
                    <a href="<?= $childTree->url; ?>" title="<?= $childTree->name; ?>" data-pjax="0"><?= $childTree->name; ?> <i class="fa fa-angle-double-right"></i></a>
                </li>
        <? endforeach; ?>
            </ul>
    <? else: ?>
        <a href="<?= $model->url; ?>" title="<?= $model->name; ?>" data-pjax="0"><?= $model->name; ?> <i class="fa fa-angle-double-right"></i></a>
    <? endif; ?>
</li>