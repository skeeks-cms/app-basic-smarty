<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 06.03.2015
 */
/* @var $this \yii\web\View */
?>
<!-- FOOTER -->
<footer id="footer">
	<div class="container">

		<div class="row">

			<div class="col-md-4">
				

				<?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
				'namespace'         => 'text-footer-left',
				'text'              => <<<HTML


				<h4 class="letter-spacing-1">Контакты</h4>

				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						<li class="footer-sprite address">
							117105<br/>
							Россия, Москва<br/>
							Большая Садовая 5,<br/>
							офис21<br/>
						</li>
						<li class="footer-sprite phone">
							Телефон: <a href="tel:+74955437737">+7 (495) 543 77 37</a ><br/>
								  <a href="tel:+74957242179">+7(495) 724 21 79</a >
						</li>
						<li class="footer-sprite email">
							<a href="mailto:info@stevita.ru">info@stevita.ru</a>
						</li>
					</ul>
				</address>
				<!-- /Contact Address -->
HTML
,
			]); ?>



			</div>

			

			<div class="col-md-4">

				<?= \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget::widget([
					'namespace'      => 'menu-footer-2',
					'viewFile'       => '@template/widgets/TreeMenuCmsWidget/menu-footer.php',
					'label'          => 'Меню',
					'level'          => '1',
				]); ?>

			</div>
			<div class="col-md-4">

				<?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
				'namespace'         => 'text-footer-social-2',
				'text'              => <<<HTML
				<!-- Footer Logo -->
				<h4 class="letter-spacing-1">Мы в соцсетях</h4>



				<!-- Social Icons -->
				<div class="margin-top-20">
					<a href="https://vk.com/stevita" class="social-icon social-icon-border social-vk pull-left" data-toggle="tooltip" data-placement="top" title="Vkontakte">

						<i class="icon-vk"></i>
						<i class="icon-vk"></i>
					</a>

					<a href="https://www.facebook.com/stevita.ru" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="http://ok.ru/stevita" class="social-icon social-icon-border social-ok pull-left" data-toggle="tooltip" data-placement="top" title="Odnoklassniki">
						<i class="icon-ok"></i>
						<i class="icon-ok"></i>
					</a>




				</div>
				<!-- /Social Icons -->
HTML
,
			]); ?>
			</div>
			<div class="col-xs-12 margin-top-40">

				<?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
				'namespace'         => 'text-footer-social',
				'text'              => <<<HTML
				<!-- Footer Logo -->
				<h4 class="letter-spacing-1">Мы в соцсетях</h4>

				

				<!-- Social Icons -->
				<div class="margin-top-20">
					<a href="https://vk.com/stevita" class="social-icon social-icon-border social-vk pull-left" data-toggle="tooltip" data-placement="top" title="Vkontakte">

						<i class="icon-vk"></i>
						<i class="icon-vk"></i>
					</a>

					<a href="https://www.facebook.com/stevita.ru" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="http://ok.ru/stevita" class="social-icon social-icon-border social-ok pull-left" data-toggle="tooltip" data-placement="top" title="Odnoklassniki">
						<i class="icon-ok"></i>
						<i class="icon-ok"></i>
					</a>




				</div>
				<!-- /Social Icons -->
HTML
,
			]); ?>

			</div>

		</div>

	</div>

	<div class="copyright">
		<div class="container">
			
			<?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
				'namespace'         => 'text-footer-rights',
				'text'              => <<<HTML
				&copy; Все права защищены, Digest Shop 2015
HTML
,
			]); ?>

		</div>
	</div>
</footer>
<!-- /FOOTER -->

<div style="display: none;">
	<div id="sx-feedback" style="min-width: 600px;">
		<h2 style="margin-bottom: 15px;">Обратная связь</h2>
		<p></p>
			<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
				'form_code' => 'feedback',
				'namespace' => 'FormWidget-feedback-all',
				'viewFile' => 'fancybox'
			]); ?>
	</div>


	<div id="sx-pre-order" style="min-width: 600px;">
		<? $this->registerJs(<<<JS
(function(sx, $, _)
{
    sx.classes.PreOrder = sx.classes.Component.extend({

        construct: function (name, opts)
        {
            opts = opts || {};
            this.applyParentMethod(sx.classes.Component, 'construct', [opts]);
			this.set('name', name);
        },

        _onDomReady: function()
        {
			var self = this;
        	_.delay(function()
        	{
				$.fancybox($("#sx-pre-order"));
				$(".field-relatedpropertiesmodel-product input").val(self.get('name'));
        	}, 200);

        }
    });

})(sx, sx.$, sx._);
JS
); ?><? $this->registerCss(<<<CSS
#sx-pre-order .field-relatedpropertiesmodel-product
{
	display: none;
}
CSS
); ?>
		<h2 style="margin-bottom: 15px;">Предзаказ</h2>
		<p>Этого товара нет в наличии, но вы можете сделать предзаказ.</p>
			<?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
				'form_code' => 'preOrder',
				'namespace' => 'FormWidget-preOrder',
				'viewFile' => 'fancybox'
			]); ?>
	</div>
</div>
