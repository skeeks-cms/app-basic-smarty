<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 24.05.2015
 */
/* @var $this \yii\web\View */
/* @var $model \skeeks\cms\models\Tree */

?>



<!-- SLIDER -->
<section class="padding-top-0 padding-bottom-0 category-slider hidden-xs">

	<?/*= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
		'namespace'      => 'home-slider-top',
		'viewFile'       => '@template/widgets/TreeMenuCmsWidget/slider',
		'enabledRunCache'=> \skeeks\cms\components\Cms::BOOL_N,
	]); */?>

	<?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
		'namespace' => 'ContentElementsCmsWidget-slides',
		'viewFile' 	=> '@app/views/widgets/ContentElementsCmsWidget/slides-revo',
	]); ?>

</section>

<section class="callout-dark heading-title heading-arrow-bottom padding-20">
        <div class="container">
            <div class="text-center">
                <?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
				'namespace'         => 'home-text-center',
				'text'              => <<<HTML
				<h3 class="size-30">Тестовый сайт 2016</h3>
                <p>Добро пожаловать уважаемые пользователи, это тестовый сайт построенный на базе SkeekS CMS</p>
HTML
,
			]); ?>

		</div>
	</div>
</section>



<section class="padding-top-0 category-slider">
	<div class="container">
		<div class="row">
			<h2 class="heading-title text-center margin-bottom-20">
				Наша продукция
			</h2>
			<div class="col-md-12">
<?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
	'namespace'         => 'TreeMenuCmsWidget-sub-catalog-home',
	'viewFile'          => '@template/widgets/TreeMenuCmsWidget/sub-catalog',
	'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_Y,
]); ?>

			</div>
		</div>
	</div>
</section>


<section class="promo-4 noborder p-y-0">
	<div class="container">
		<h2 class="heading-title text-center margin-bottom-20">
			У вас есть вопросы?
		</h2>
		<p style="text-align: center;">Не стесняйтесь, задавайте, мы с радостью вам ответим.</p>
		<div class="row padding-top-0">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
				'form_code' => 'feedback',
				'namespace' => 'FormWidget-feedback-all-2',
				'viewFile' => 'fancybox'
			]); ?>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</section>
<section class="promo-4 noborder p-y-0">
	<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=GtBaBZbntp43iayaE1NApD16wtarhS-8&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
</section>
