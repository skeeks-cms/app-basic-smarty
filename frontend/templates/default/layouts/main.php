<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 27.08.2016
 */
use yii\helpers\Html;
use frontend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
\frontend\assets\FastAsset::register($this);
\frontend\assets\OwnCarouselAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="/favicon.ico?v=<?= @filemtime(\Yii::getAlias('@app/web/favicon.ico'));?>"  type="image/x-icon" />
    <?php $this->head() ?>
<meta name='yandex-verification' content='75b7e94b94f45134' />

</head>
<body class="smoothscroll enable-animation">
    <?php $this->beginBody() ?>

		<!-- wrapper -->
		<div id="wrapper">


        <?= $this->render('@app/views/header'); ?>
            <?= $content; ?>
        <?= $this->render('@app/views/footer'); ?>

        </div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->



    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>