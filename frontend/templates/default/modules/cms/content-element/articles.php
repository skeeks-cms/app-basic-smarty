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
<?= $this->render('@template/include/breadcrumbs', [
    'model' => $model
])?>
<section class="padding-top-20 padding-bottom-20">
<!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-12 sx-content">
                <?= $model->description_full; ?>
            </div>
        </div>
    </div>
</section>
