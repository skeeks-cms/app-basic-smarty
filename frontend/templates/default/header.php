<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */

/*
$model = new \yii\base\DynamicModel([
    'phone' => '+74957222873'
]);
$model->addRule(['phone'], \skeeks\cms\validators\PhoneValidator::className())->validate();

if ($model->hasErrors())
{
    echo 'Некорректный phone: ' . $model->phone;
} else
{
    echo 'phone: ' . $model->phone;
}*/
?>

<!-- Top Bar -->
<div id="topBar" class="dark">
    <div class="container">

        <?/*= $this->render('@app/views/include/header-auth'); */?>


                <ul class="top-links list-inline pull-right">
                    <li class="text-welcome hidden-xs">
                        <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
                    'namespace'         => 'text-header-text-1',
                    'text'              => <<<HTML
                    Для связи с нами
HTML
,
                ]); ?>
                    </li>
                    <li>
                        <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
                    'namespace'         => 'text-header-text-phone',
                    'text'              => <<<HTML
                    <a class="dropdown-toggle no-text-underline" href="tel:+74957222873">
                        <i class="fa fa-phone hidden-xs"></i> +7 (495) 722-28-73
                    </a>
HTML
,
                ]); ?>


                    </li>
                    <li>
                        <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
                    'namespace'         => 'text-header-text-email',
                    'text'              => <<<HTML
                    <a class="dropdown-toggle no-text-underline" href="mailto:info@skeeks.com">
                        <i class="fa fa-envelope hidden-xs"></i> info@skeeks.com
                    </a>
HTML
,
                ]); ?>

                    </li>
                </ul>



        <!-- left -->

<ul class="top-links list-inline">
                <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
                    'namespace'         => 'text-header-phone',
                    'text'              => <<<HTML

                    <li class="hidden-xs">
                        <a href="/dostavka">Доставка и оплата</a>
                    </li>
                    <li class="hidden-xs">
                        <a href="/contacts">Контакты</a>
                    </li>

HTML
,
                ]); ?>
</ul>


    </div>
</div>
<!-- /Top Bar -->



<!--
    AVAILABLE HEADER CLASSES

    Default nav height: 96px
    .header-md 		= 70px nav height
    .header-sm 		= 60px nav height

    .noborder 		= remove bottom border (only with transparent use)
    .transparent	= transparent header
    .translucent	= translucent header
    .sticky			= sticky header
    .static			= static header
    .dark			= dark header
    .bottom			= header on bottom

    shadow-before-1 = shadow 1 header top
    shadow-after-1 	= shadow 1 header bottom
    shadow-before-2 = shadow 2 header top
    shadow-after-2 	= shadow 2 header bottom
    shadow-before-3 = shadow 3 header top
    shadow-after-3 	= shadow 3 header bottom

    .clearfix		= required for mobile menu, do not remove!

    Example Usage:  class="clearfix sticky header-sm transparent noborder"
-->
<div id="header" class="sticky clearfix">

    <!-- TOP NAV -->
    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- BUTTONS -->
            <ul class="pull-right nav nav-pills nav-second-main">

                <!-- SEARCH -->
                <li class="search">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box">
                        <form action="/search" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="<?= \Yii::$app->cmsSearch->searchQueryParamName; ?>"  placeholder="Поиск..."  value="<?= \Yii::$app->cmsSearch->searchQuery; ?>" />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Найти</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- /SEARCH -->




            </ul>
            <!-- /BUTTONS -->


            <!-- Logo -->
            <a class="logo pull-left" href="<?= \yii\helpers\Url::home(); ?>">
                <img src="<?= \frontend\assets\AppAsset::getAssetUrl('img/logo.png'); ?>" alt="" />
                SkeekS CMS
            </a>

            <!--
                Top Nav

                AVAILABLE CLASSES:
                submenu-dark = dark sub menu
            -->
            <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                <nav class="nav-main">

                    <!--
                        NOTE

                        For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                        Direct Link Example:

                        <li>
                            <a href="#">HOME</a>
                        </li>
                    -->
                    <?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
                        'namespace'      => 'menu-top',
                        'viewFile'       => '@template/widgets/TreeMenuCmsWidget/menu-top.php',
                        'label'          => 'Верхнее меню',
                        'level'          => '1',
                        'enabledRunCache'=> \skeeks\cms\components\Cms::BOOL_N,
                    ]); ?>


                </nav>
            </div>

        </div>
    </header>
    <!-- /Top Nav -->

</div>
