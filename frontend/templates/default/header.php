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
<div id="header" class="sticky clearfix">
	
	<!-- Top Bar -->
	<div id="topBar" class="bg-dark-green">
		<div class="container">
			
			<div class="search header-search visible-md visible-lg  pull-left margin-right-40" >
				<div class="search-box">
					<form action="/search" method="get">
						<div class="input-group">
							<input type="text" name="<?= \Yii::$app->cmsSearch->searchQueryParamName; ?>"  placeholder="Поиск..."  value="<?= \Yii::$app->cmsSearch->searchQuery; ?>" class="form-control">
							
							<button class="header-search-btn" type="submit"><i class="fa fa-search"></i></button>
							
						</div>
					</form>
				</div> 
			</div> 
			<?= $this->render('@app/views/include/header-auth'); ?>
			
			<div class="text-left margin-right-15">
				<span class="header-phone pr-10 nowrap"><a href="tel:+74957222873">+7 (495) 722-28-73</a></span>
				<span class="header-mail nowrap"><a href="mailto:info@ferma-manihino.ru">info@ferma-manihino.ru</a></span>
			</div>
			<!-- left -->
			
			
		</div>
	</div>
	<!-- /Top Bar -->
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
              <li class="search visible-sm visible-xs">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box">
                        <form action="/search" method="get">
                            <div class="input-group">
                                <input type="text" name="src" class="form-control" name="<?/*= \Yii::$app->cmsSearch->searchQueryParamName; */?>"  placeholder="Поиск..."  value="<?/*= \Yii::$app->cmsSearch->searchQuery; */?>" />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Найти</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li> 
                <!-- /SEARCH -->

               <!-- --><?/*= \skeeks\cms\shop\widgets\cart\ShopCartWidget::widget([
                    'namespace' => 'ShopCartWidget-small-top',
                    'viewFile' => '@app/views/widgets/ShopCartWidget/small-top'
                ])*/?>


            </ul>
            <!-- /BUTTONS -->


            <!-- Logo -->
            <a class="logo pull-left" href="/">
                <img src="<?= \frontend\assets\AppAsset::getAssetUrl('img/logo/logo.png'); ?>" alt="" style=""/>
            </a>
			
			<div class="header-phone_in-fixed pull-right margin-right-10 margin-top-20 margin-left-10 nowrap"><a href="tel:+74957222873">+7 (495) 722-28-73</a></div>
			
            <div class="navbar-collapse  nav-main-collapse collapse submenu-light">
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