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

<!-- Product page -->
<section class="padding-top-30 padding-bottom-30">
    <div class="container">

        <article class="article-page">
            
			<h1 class="margin-top-0 margin-bottom-10 article-page_title"><?= $model->name; ?></h1>
			<ul class="blog-post-info list-inline margin-bottom-20">
				<li>
					<a href="#">
						<i class="fa fa-calendar"></i>
						<span class=""><?= \Yii::$app->formatter->asDate($model->published_at, 'full')?></span>
					</a>
				</li>
			</ul>
			<? if ($model->image) : ?>
				<img src="<?= $model->image->src; ?>" alt="<?=$model->name; ?>" title="<?=$model->name; ?>" class="thumbnail col-xs-12 col-sm-4 pull-left">
			<? endif; ?>
           
          
                
			<div class="article-page_text">
				<? if ($model->description_full) : ?>
					<?=$model->description_full;?>
				<? else : ?>
					<?=$model->description_short;?>
				<? endif; ?>
			</div >
          
        </article>
    </div>
</section>



