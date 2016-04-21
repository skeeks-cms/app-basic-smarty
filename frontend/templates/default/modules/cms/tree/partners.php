<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (Ҫ髑)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
/* @var \skeeks\cms\models\Tree $model */
?>

<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>

<!--=== Content Part ===-->
<section class="padding-top-30 padding-bottom-30">
	<div class="container content">
		<div class="row magazine-page">
			<div class="col-xs-12">
				<div class="desc-full cl-green text-bold"><?= $model->description_full; ?></div>
				
				<h2 class="text-center col-md-9 col-md-offset-3 col-xs-12 margin-bottom-0">Тарифные планы</h2>
				<div class="row mega-price-table margin-top-20">
					
					<div class="col-md-3 col-sm-12 hidden-sm hidden-xs pricing-desc">
						<ul class="list-unstyled" style="font-size:12px; margin-top: 114px;line-height: 22px;">
							<li>Порядок оплаты</li>
							<li class="alternate">Скидка на продукцию</li>
							<li>Тариф</li>
							<li class="alternate">Срок действия договора</li>
							<li>Минимальная партия</li>
							<li class="alternate">Эксклюзивность на город</li>
							<li>Рекламная продукция</li>
							<li class="alternate">Минимальные обороты за год</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-12 block">
						<div class="pricing">
							
							<div class="pricing-head">
								<h3>Эконом</h3>
							</div>
							
							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Предоплата
									<span class="hidden-md hidden-lg">Порядок оплаты</span>
								</li>
								<li class="alternate">
									10% <span class="hidden-md hidden-lg">Скидка на продукцию</span>
								</li>
								<li>
									Бесплатно <span class="hidden-md hidden-lg">Тариф</span>
								</li>
								<li class="alternate">
									6 месяцев
									<span class="hidden-md hidden-lg">Срок действия договора</span>
								</li>
								<li>
									1 коробока
									<span class="hidden-md hidden-lg">Минимальная партия</span>
								</li>
								<li class="alternate">
									<i class="fa fa-times"></i>
									<span class="hidden-md hidden-lg">Эксклюзивность на город</span>
								</li>
								<li class="">
									<i class="fa fa-times"></i>
									<span class="hidden-md hidden-lg">Рекламная продукция</span>
								</li>
								<li class="alternate">
									1 000 000 рублей
									<span class="hidden-md hidden-lg">Минимальные обороты за год</span>
								</li>
							</ul>
							<!-- /option list -->
							
						</div>
					</div>
					
					<div class="col-md-3 col-sm-12 block">
						<div class="pricing">
							
							<div class="pricing-head">
								<h3>Дилер</h3>
							</div>
							
							
							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Оплата по факту
									<span class="hidden-md hidden-lg">Порядок оплаты</span>
								</li>
								<li class="alternate">
									15% <span class="hidden-md hidden-lg">Скидка на продукцию</span>
								</li>
								<li>
									50 тысяч рублей <span class="hidden-md hidden-lg">Тариф</span>
								</li>
								<li class="alternate">
									12 месяцев
									<span class="hidden-md hidden-lg">Срок действия договора</span>
								</li>
								<li>
									10 коробок
									<span class="hidden-md hidden-lg">Минимальная партия</span>
								</li>
								<li class="alternate">
									<i class="fa fa-times"></i>
									<span class="hidden-md hidden-lg">Эксклюзивность на город</span>
								</li>
								<li class=" ">
									<i class="fa fa-check"></i>
									<span class="hidden-md hidden-lg">Рекламная продукция</span>
								</li>
								<li class="alternate">
									1 000 000 рублей
									<span class="hidden-md hidden-lg">Минимальные обороты за год</span>
								</li>
							</ul>
							<!-- /option list -->
							
						</div>
					</div>
					
					<div class="col-md-3 col-sm-12 block">
						<div class="pricing">
							
							<div class="pricing-head">
								<h3>VIP</h3>
							</div>
							
						
							
							<!-- option list -->
							<ul class="pricing-table list-unstyled">
								<li>
									Постоплата
									<span class="hidden-md hidden-lg">Порядок оплаты</span>
								</li>
								<li class="alternate">
									20% <span class="hidden-md hidden-lg">Скидка на продукцию</span>
								</li>
								<li>
									200 тысяч рублей <span class="hidden-md hidden-lg">Тариф</span>
								</li>
								<li class="alternate">
									12 месяцев
									<span class="hidden-md hidden-lg">Срок действия договора</span>
								</li>
								<li>
									на 100 тысяч рублей
									<span class="hidden-md hidden-lg">Минимальная партия</span>
								</li>
								<li class="alternate">
									<i class="fa fa-check"></i>
									<span class="hidden-md hidden-lg">Эксклюзивность на город</span>
								</li>
								<li class=" ">
									<i class="fa fa-check"></i>
									<span class="hidden-md hidden-lg">Рекламная продукция</span>
								</li>
								<li class="alternate">
									1 000 000 рублей
									<span class="hidden-md hidden-lg">Минимальные обороты за год</span>
								</li>
							</ul>
							<!-- /option list -->
							
							
							
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="col-xs-12">
				<div class="margin-top-20">
					Если вы заинтересованы в нашем предложении, просим оставить заявку на
					прохождение экзамена для назначения дальнейшей деловой встречи. На вашу
					электронную почту придёт письмо с индивидуальной ссылкой на экзамен. В
					экзамене будут представленны различные вопросы, на общие знания ведения
					бизнеса, а так же ряд других вопров, в том числе и тестирование на знание словий сотрудничества, которые прописаны в файле ниже.<br/><br/>
					<a href="#"><i class="fa-lg fa fa-file-pdf-o"></i> Условия сотрудничества </a>
				</div>
				
				<div class="exam-form">
					<h2 class="text-center margin-bottom-20">Заявка на экзамен</h2>


					<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
						'form_code' => 'examination',
						'namespace' => 'FormWidget-examination',
						'viewFile' 	=> '@app/views/widgets/FormWidget/examination'
					]); ?>


				</div>
				
			</div>
			<div class="col-md-12 sx-content">
				

				<?= trim(\skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
					'namespace'         => 'TreeMenuCmsWidget-sub-catalog',
					'viewFile'          => '@app/views/widgets/TreeMenuCmsWidget/sub-catalog',
					'treePid'           => $model->id,
					'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
				])); ?>

				<?= \skeeks\cms\cmsWidgets\contentElements\ContentElementsCmsWidget::widget([
					'namespace'         => 'ContentElementsCmsWidget-sub-catalog',
					'viewFile'          => '@app/views/widgets/ContentElementsCmsWidget/articles',
					//'treePid'           => $model->id,
					//'enabledRunCache'   => \skeeks\cms\components\Cms::BOOL_N,
				]); ?>

			</div>
		</div>
	</div>
</section >