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
							Россия, u. Москва, г. Зеленоград<br/>
							2005-29<br/>
						</li>
						<li class="footer-sprite phone">
							Телефон: <a href="tel:+74955437737">+7 (495) 722-28-73</a >
						</li>
						<li class="footer-sprite email">
							<a href="mailto:info@skeeks.com">info@skeeks.com</a>
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
					<a href="https://vk.com/skeeks_com" target="_blank" class="social-icon social-icon-border social-vk pull-left" data-toggle="tooltip" data-placement="top" title="Vkontakte">

						<i class="icon-vk"></i>
						<i class="icon-vk"></i>
					</a>

					<a href="https://www.facebook.com/skeekscom" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="https://www.youtube.com/channel/UC26fcOT8EK0Rr80WSM44mEA" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Youtube">

						<i class="icon-youtube"></i>
						<i class="icon-youtube"></i>
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

			<ul class="pull-right nomargin list-inline mobile-block">
				<li><a href="http://skeeks.com" data-toggle="tooltip" title="Зеленоградская Web-студия SkeekS"><img height="40" src="/img/skeeks/logo.png" /> Разработка сайта — SkeekS.com</a> (<a href="http://cms.skeeks.com" data-toggle="tooltip" title="Система управления сайтом SkeekS CMS (Yii2 cms)">SkeekS CMS Yii2</a>)</li>
			</ul>


			<?= \skeeks\cms\cmsWidgets\text\TextCmsWidget::widget([
				'namespace'         => 'text-footer-rights',
				'text'              => <<<HTML
				&copy; Все права защищены, SkeekS CMS 2016
HTML
,
			]); ?>

		</div>
	</div>
</footer>
<!-- /FOOTER -->

<a id="fca_phone_div" href="#sx-callback" data-toggle="modal" class="fca-phone fca-green fca-show fca-static" style="right: 0; bottom: 0; display: block;">
	<div class="fca-ph-circle"></div>
	<div class="fca-ph-circle-fill"></div>
	<div class="fca-ph-img-circle"></div>
</a>