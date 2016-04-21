<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.03.2015
 */
/* @var $this \yii\web\View */
?>

<ul class="list-inline pull-right mb-0 user-menu">
<? if (\Yii::$app->user->isGuest) : ?>
    <li><a href="<?= \skeeks\cms\helpers\UrlHelper::construct('cms/auth/login')->setCurrentRef(); ?>"><img src="/images/head-auth.gif"style="margin-top: -10px;"/> <span class="hidden-xs">Вход</span ></a></li>
<? else : ?>
   
    <li>
        <a class="dropdown-toggle no-text-underline " data-toggle="dropdown" href="#">
			<i class="fa fa-user"></i> <span class="hidden-xs"><?= \Yii::$app->user->identity->displayName; ?></span >
		</a>
        <ul class="dropdown-menu pull-right">

            <li><a tabindex="-1" href="<?= \Yii::$app->user->identity->getPageUrl('view'); ?>"><i class="fa fa-cog"></i> Профиль</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="<?=\yii\helpers\Url::to(['/shop/order/list']); ?>"><i class="fa fa-tasks"></i> История заказов</a></li>
            <li class="divider"></li>

            <li><a href="<?= \skeeks\cms\helpers\UrlHelper::construct('cms/auth/logout')->setCurrentRef(); ?>" data-method="post"><i class="glyphicon glyphicon-off"></i> Выход</a></li>
        </ul>
    </li>
<? endif; ?>
</ul>
