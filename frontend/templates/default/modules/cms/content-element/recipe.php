<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 24.05.2015
 */
/* @var $this \yii\web\View */
/* @var $model \skeeks\cms\models\CmsContentElement */
?>
<?= $this->render('@template/include/breadcrumbs-no-h1', [
    'model' => $model,
    'title' => '<a href="'.$model->cmsTree->url.'">'.$model->cmsTree->name.'</a>',
])?>

<!-- recipe page -->
<section class="padding-top-30 padding-bottom-30">
    <div class="container">

        <article class="article-page">
			
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<? if ($model->image) : ?>
					<div class="thumbnail">
						<img src="<?= $model->image->src; ?>" alt="<?=$model->name; ?>" title="<?=$model->name; ?>" class="article-page_img">
						
					</div >
					<? endif; ?>
				</div>
				<div class="col-xs-12 col-sm-6">
					<h1 class="margin-top-0 margin-bottom-10 recipe-page_title" ><?= $model->name; ?></h1>
					<div class="article-page_text">
						<? if ($model->description_full) : ?>
						<?=$model->description_full;?>
						<? else : ?>
						<?=$model->description_short;?>
						<? endif; ?>
					</div >
				</div>
			</div>
			
        </article>
    </div>
</section>



