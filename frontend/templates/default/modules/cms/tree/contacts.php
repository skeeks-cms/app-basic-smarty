<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>

<!--=== Content Part ===-->
<section style="padding: 0px;">


    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=9Hjh5JL00DPjUGMPbkmlOUj4vBHFOJ1X&width=100%&height=400px&lang=ru_RU&sourceType=constructor"></script>

    <div class="container">

        <p></p>
        <p></p>
        <div class="row">

            <!-- INFO -->
            <div class="col-md-6 col-sm-6">

                <h2>Контакты</h2>

                <hr />

                <p>
                    <span class="block"><strong><i class="fa fa-map-marker"></i> Адрес:</strong> МКАД, 50-й километр, Россия, Москва, МКАД, ТК "АНГАР АВТО" (2 этаж, левое крыло мотосалон SELECT MOTO)</span>
                    <span class="block"><strong><i class="fa fa-phone"></i> Телефон:</strong> <a href="tel:74993908958">+7 (499) 390-89-58</a><br /></span>
                    <span class="block"><strong><i class="fa fa-phone"></i> Телефон:</strong> <a href="tel:79264064166">+7 (926) 406-41-66</a></span>
                    <span class="block"><strong><i class="fa fa-skype"></i> Skype:</strong> <a href="skype:select-moto">select-moto</a></span>
                    <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:selectmoto@yandex.ru">selectmoto@yandex.ru</a></span>
                </p>

                <div class="margin-top-20">
					<a href="https://vk.com/motoselect" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Vkontakte">

						<i class="icon-vk"></i>
						<i class="icon-vk"></i>
					</a>

					<a href="https://twitter.com/select_moto" target="_blank" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>


					<a href="https://instagram.com/SELECTMOTO/" target="_blank" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>
				</div>


            </div>
            <!-- /INFO -->

            <div class="col-md-6 col-sm-6">
                <?= $model->description_full; ?>
                <h2>Обратная связь</h2>

                <hr />

                <?= \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget::widget([
                    'viewFile' => 'whith-messages',
                    'form_code' => 'feedback',
                    'namespace' => 'FormWidget-contacts',
                ])?>
                <p>


                </p>


            </div>




        </div>
    </div>
</section>