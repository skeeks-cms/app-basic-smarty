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
\Yii::$app->templateSmarty->initTheme();

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
</head>
<body class="smoothscroll enable-animation <?= \Yii::$app->templateSmarty->getBodyCssClasses(); ?>">
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

        <? if (\Yii::$app->templateSmarty->isPreloader) : ?>
            <!-- PRELOADER -->
            <div id="preloader">
                <div class="inner">
                    <span class="loader"></span>
                </div>
            </div><!-- /PRELOADER -->
        <? endif; ?>

        <?= $this->render('@app/views/modals'); ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>