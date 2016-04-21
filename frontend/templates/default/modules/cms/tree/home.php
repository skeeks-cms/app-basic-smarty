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
<section class="padding-top-0 category-slider hidden-xs">

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

<!-- /SLIDER -->
<!--<section class="heading-title bg-green  margin-top-50 parallax-2 parallax arrow-parlx" style="background-image:url(../images/bg_2.jpg);">
	<div class="overlay light-1"> </div>
	<div class="container">
		<div class="text-center">
			<h2 class="fz40 margin-top-30 margin-bottom-30"><span class="cl-green">О стевии</span ></h2>
		</div>
	</div>
</section>-->

<!--
<section class=" padding-top-10 padding-bottom-10 noborder section-banner" style="">
 
	<div class="container">
		<div class="row">
			<div class="hidden-xs col-sm-6 text-right">
				<img src="images/kontyrs.png"  style="width:413px;" class=" margin-right-20"/>
			</div>
			<div class="col-xs-12 col-sm-6 text-center-xs">
				<div class="margin-top-10 margin-left-20">
					<span class="fz40 condensed cl-white mt-0 mb-0" style="line-height: 1.1em;">Попробуйте</br> подсластитель </br> нового поколения</span>
					<div class="margin-top-20">
						<div class="margin-top-80 hidden-xs"></div>
						<a class="btn btn-lg btn-success  btn-bordered-white pr-30 pl-30 fz20 sx-fancybox" href="#sx-feedback">Получить образцы <i class="fa fa-gift"></i></a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
-->


<!--<section class="promo-2 bg-light-gray noborder padding-bottom-20 padding-top-20">
	<div class="container">
		<h2 class="heading-title   text-center margin-bottom-40">
			Весовое соотношение на 1 кг тростникового сахара
		</h2>
		
		<div class="row text-center promo-2_item-wrap">
			<div class="col-md-3 col-md-6 col-sm-6 col-xs-12 mb-30">
				<div class="box-static box-border-top border-orange">
					<h3 class="fz20">
						Тростниковый  <br>сахар
					</h3>
					<div class="white-sircle">
						<img class="promo-2_img" src="images/r1.png"/>
						<span  class="fz18  p-4">1000 г</span><br/>
						<span class="cl-orange  p-4 fz25">3790 ккал</span>
					</div>
					<div class="promo-2_descr">
						Негативно воздействует на зубы, повышенный сахар в крови, поджелудочная железа, недостаток инсулина в крови, риск возникновения диабета, лишний вес.
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-6 col-sm-6 col-xs-12 mb-30">
				<div class="box-static box-border-top  border-orange"><h3 class="fz20">
					Свекольный  <br>сахар
				</h3>
				<div class="white-sircle">
					<img class="promo-2_img" src="images/r2.png" style="margin-top: -10px; margin-bottom: 10px;"/>
					<span  class="fz18  p-4">1040 г</span><br/>
					<span class="cl-orange p-4 fz25">4200 ккал</span>
				</div>
				<div class="promo-2_descr">
					Негативно воздействует на зубы, повышенный сахар в крови, поджелудочная железа, недостаток инсулина в крови, риск возникновения диабета, лишний вес.
				</div></div >
			</div>
			<div class="col-md-3 col-md-6 col-sm-6 col-xs-12 mb-30">
				<div class="box-static box-border-top  border-orange"><h3 class="fz20">
					Сахарозаменитель <br>ксилит
				</h3>
				<div class="white-sircle">
					<img class="promo-2_img" src="images/r3.png"/>
					<span class="fz18  p-4">300 г</span><br/>
					<span class="cl-orange p-4 fz25">1100 ккал</span>
				</div>
				<div class="promo-2_descr">
					Ксилит способен содействоать скоплению жидкости в кишечнике и этим провоцировать его расстройство. При длительном применении могут проявляться аллергические реакции.
				</div></div >
			</div>
			<div class="col-md-3 col-md-6 col-sm-6 col-xs-12 mb-30 ">
				<div class="box-static box-border-top p-rel">
					<div class="ribbon"> 
						<div class="ribbon-inner">Безопасно</div>
					</div>
					<h3 class="cl-green fz20">
						Подсластитель <br>стевия
						reba 98%
					</h3>
					<div class="white-sircle">
						<img class="promo-2_img" src="images/r4.png"/>
						<span  class="fz18 p-4 bg-green cl-white">4.8 г</span><br/>
						<span class="fz25 p-4 bg-green cl-white"><b>0 ккал</b></span>
					</div>
					<div class="promo-2_descr">
						Стевия является подсластителем, не имеющим вредных побочных эффектов. <br/>Слаще тростникового сахара в 40 раз. А цена стевии - говорит сама за себя!
					</div>
				</div >
			</div>
		</div>
	</div>
</section>
-->

<section class="noborder promo-3 padding-top-0" style="background-image:url(http://milk-ferma.ru/_mod_files/img/panirama.jpg);">
	<h2 class="heading-bg-white text-center margin-top-0 margin-bottom-20">Зачем покупать нашу продукцию?!</h2>
	<div class="container">
		<div class="row promo-3_item-wrap">
			<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<div class="bg-white-transp border-r-15-0 p-20 promo-3-item-290" >
					
					<h3 class="fz20 ">
						<span class="pull-leftmargin-right-10 cl-orange">
							<i class="fa fa-check-square-o"></i>
						</span>
						<a href="#" class="cl-green">Деревенские продукты</a >
					</h3>
					<hr/>
					<p>
						<b>Деревенские продукты</b> — это не только полезно, но еще и очень вкусно. Вы помните вкус настоящего коровьего молока? А знаете, что в деревенской сметане ложка стоит?
					</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<div class="bg-white-transp border-r-15-0 p-20 promo-3-item-290" >
					<h3 class="fz20 "><span class="pull-leftmargin-right-10 cl-orange">
						<i class="fa fa-check-square-o"></i>
					</span><a href="#" class="cl-green">Экологическая чистота</a ></h3>
					<hr/>
					<p>
						Наша ферма находится в экологически чистом районе, недалеко от города Манихино. Вы можете приехать к нам и посмотреть все лично, наш адрес: г. Манихино, ул. Центральная, д 38
						
						
					</p>
				</div>
			</div>
			
			<div class="col-md-4  col-sm-6 col-xs-12 mb-30">
				<div class="bg-white-transp border-r-15-0 p-20 promo-3-item-290" >
					<h3 class="fz20 ">
						<span class="pull-leftmargin-right-10 cl-orange">
							<i class="fa fa-check-square-o"></i>
						</span>	
						<a href="#" class="cl-green">Пищевые добавки</a >
					</h3>
					<hr/>
					<p>
						Мы используем только натуральный корм, никаких химических добавок. Мы используем только натуральный корм, никаких химических добавок.
					</p>
				</div>
			</div>
		
			<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<div class="bg-white-transp border-r-15-0 p-20 promo-3-item-290" >

					<h3 class="fz20 ">
						<span class="pull-leftmargin-right-10 cl-orange">
							<i class="fa fa-check-square-o"></i>
						</span>
						<a href="#" class="cl-green">Деревенские продукты</a >
					</h3>
					<hr/>
					<p>
						<b>Деревенские продукты</b> — это не только полезно, но еще и очень вкусно. Вы помните вкус настоящего коровьего молока? А знаете, что в деревенской сметане ложка стоит?
					</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
				<div class="bg-white-transp border-r-15-0 p-20 promo-3-item-290" >
					<h3 class="fz20 "><span class="pull-leftmargin-right-10 cl-orange">
						<i class="fa fa-check-square-o"></i>
					</span><a href="#" class="cl-green">Экологическая чистота</a ></h3>
					<hr/>
					<p>
						Наша ферма находится в экологически чистом районе, недалеко от города Манихино. Вы можете приехать к нам и посмотреть все лично, наш адрес: г. Манихино, ул. Центральная, д 38


					</p>
				</div>
			</div>

			<div class="col-md-4  col-sm-6 col-xs-12 mb-30">
				<div class="bg-white-transp border-r-15-0 p-20 promo-3-item-290" >
					<h3 class="fz20 ">
						<span class="pull-leftmargin-right-10 cl-orange">
							<i class="fa fa-check-square-o"></i>
						</span>
						<a href="#" class="cl-green">Пищевые добавки</a >
					</h3>
					<hr/>
					<p>
						Мы используем только натуральный корм, никаких химических добавок. Мы используем только натуральный корм, никаких химических добавок.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--<section class="promo-4 noborder p-y-0">
	<div class="container">
		<div class="row padding-top-20">
			<img src="images/partners.png" class="img-responsive hidden-xs p-abs-bottom"/>
			<div class="hidden-xs p-rel padding-top-40">
				
			</div>
			<div class="col-sm-6 col-md-6  col-sm-offset-6 col-md-offset-6 ">
				<h2 class="cl-green fz40 text-center-xs">Сотрудничество</h2>
				
				<div class="row">
					<div class="col-xs-12 mb-30">
						<div class="row countTo-md text-center counter">

							<div class="col-xs-6 col-sm-4">
								<span class="countTo cl-orange" data-speed="3000"  >1303</span>
								<h4 class="non-condensed fz14">розничных<br> магазина</h4>
							</div>

							<div class="col-xs-6 col-sm-4">
								<span class="countTo cl-orange" data-speed="3000"  >56000</span>
								<h4 class="non-condensed fz14">тон продукции<br> выпущено</h4>
							</div>

							<div class="col-xs-12  col-sm-4">
								<span class="countTo cl-orange" data-speed="3000"  >72</span>
								<h4 class="non-condensed fz14">страны в которой <br>представлена продукция</h4>
							</div>				
						</div>
					</div>
				
					<div class="fz15 col-xs-12 col-sm-12 mb-30 text-center-xs">
						У вас есть уникальная возможность работать в самой перспективной пищевой отрасли в России
					</div>
					<div class="col-xs-12 col-sm-6  col-md-6 col-lg-6 text-center-xs mb-30">
						<a href="/sotrudnichestvo/rabotay-s-nami" class="btn btn-bordered btn-lg cl-orange">Работай с нами</a>
					</div>

				
				</div>
				 
			</div>
		</div>
	</div>
</section>-->

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
