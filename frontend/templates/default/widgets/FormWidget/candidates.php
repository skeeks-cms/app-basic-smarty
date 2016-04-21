<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 17.03.2015
 *
 * @var $widget \skeeks\modules\cms\form2\cmsWidgets\form2\FormWidget
 *
 */
/* @var $this yii\web\View */


use skeeks\modules\cms\form2\widgets\ActiveFormConstructForm as ActiveForm;

$modelHasRelatedProperties = $widget->modelForm->createModelFormSend();
$additionalsJson = '';

?>

    <?php $form = ActiveForm::begin([
        'id'                                        => $widget->id . "-active-form",
        'modelForm'                                 => $widget->modelForm,
        'afterValidateCallback'                     => new \yii\web\JsExpression(<<<JS
            function(jForm, ajax)
            {
                var handler = new sx.classes.AjaxHandlerStandartRespose(ajax, {
                    'blockerSelector' : '#' + jForm.attr('id'),
                    'enableBlocker' : true,
                });

                handler.bind('error', function(e, data)
                {
                    $('.sx-success-message', jForm).hide();
                    $('.sx-error-message', jForm).show();
                    $('.sx-error-message .sx-body', jForm).empty().append(data.message);
                });

                handler.bind('success', function(e, data)
                {
                    $('.sx-error-message', jForm).hide();
                    $('.sx-success-message', jForm).show();
                    $('.sx-success-message .sx-body', jForm).empty().append(data.message);

                    $('input, textarea', jForm).each(function(value, key)
                    {
                        var name = $(this).attr('name');
                        if (name != '_csrf' && name != 'sx-model-value' && name != 'sx-model')
                        {
                            $(this).val('');
                        }
                    });

                    /*$('input:checked', jForm).each(function(value, key)
                    {
                        $(this).click();
                    });*/


                    /*_.delay(function()
                    {
                        $.fancybox.close();
                        window.location.reload();
                    }, 2000);*/
                });
            }
JS
),
    ]);
?>

    <div class="row">
        <div class="col-lg-12">
            <?= \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-success sx-success-message',
                    'style' => 'display: none;',
                ],
                'closeButton' => false,
                'body' => '<div class="sx-body">Ok</div>',
            ])?>

            <?= \yii\bootstrap\Alert::widget([
                'options' => [
                    'class' => 'alert-danger sx-error-message',
                    'style' => 'display: none;',
                ],
                'closeButton' => false,
                'body' => '<div class="sx-body">Ok</div>',
            ])?>
        </div>


            <div class="col-xs-12 col-sm-6">

                <?
                    $property = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('job');

                    $find = \skeeks\cms\models\CmsContentElement::find()->active();

                    $propertyType = $property->createPropertyType($form, $modelHasRelatedProperties);
                    if ($propertyType->content_id)
                    {
                        $find->andWhere(['content_id' => $propertyType->content_id]);
                    }

                    $models = $find->orderBy(['priority' => SORT_ASC])->active()->all();


                    $modelsJson = [];
                    foreach ($models as $additional)
                    {
                        /**
                         * @var \skeeks\cms\models\CmsContentElement $additional
                         */
                        $row['description_short'] = $additional->description_short;

                        $modelsJson[$additional->id] = $row;
                    }

                    $modelsJson = \yii\helpers\Json::encode($modelsJson);
                ?>

                <?= $form->field($propertyType->model->relatedPropertiesModel, $propertyType->property->code)
                    ->listBox(\yii\helpers\ArrayHelper::map($models, 'id', 'name'), ['size' => 1]);
                ?>
                <?/*
                    $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('job');
                    $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
                    echo $propertyType->renderForActiveForm();
                */?>

                <div class="job-descr">

                    <div class="job-descr-item">
                        <h4 class="job-descr-title">Обязанности:</h4>
                        <p class="job-descr-text mb-25">доставка продукции</p>
                    </div>

                    <div class="job-descr-item">
                        <h4 class="job-descr-title"> Требования:</h4>
                        <p class="job-descr-text mb-25">активность, коммуникабельность</p>
                    </div>


                    <div class="job-descr-item">
                        <h4 class="job-descr-title">Условия:</h4>
                        <p class="job-descr-text mb-25">на собеседовании</p>
                    </div>

                    <div class="job-descr-item">
                        <h4 class="job-descr-title">Тип занятости:</h4>
                        <p class="job-descr-text mb-25">совбодный график</p>
                    </div>


                </div >
            </div>
            <div class="col-xs-12 col-sm-6">
                <?
                    $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('name');
                    $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
                    echo $propertyType->renderForActiveForm();
                ?>


                <?
                    $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('phone');
                    $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
                    echo $propertyType->renderForActiveForm();
                ?>

                <?
                    $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('email');
                    $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
                    echo $propertyType->renderForActiveForm();
                ?>

                <!--<div class="form-group">
                    <label for="file">Прикрепить резюме</label>
                    <input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Выберите файл" />
                    <small class="text-muted block">максимальный размер файла: 10Mb (zip/pdf/jpg/png)</small>
                </div >-->
                <div class="margin-top-30">
                    <button type="submit" class="btn btn-warning bg-orange mt-20 btn-lg"><i class="fa fa-check"></i> Отправить заявку </button>
                </div>
            </div>


    </div>

<?
$this->registerJs(<<<JS
(function(sx, $, _)
{
    sx.classes.Candidat = sx.classes.Component.extend({

        _init: function()
        {

        },

        _onDomReady: function()
        {
            var data = this.get('data');

            $("#relatedpropertiesmodel-job").on("change", function()
            {
                $(".job-descr").empty().append(
                    data[$(this).val()]['description_short']
                );
            });

            $(".job-descr").empty().append(
                data[$("#relatedpropertiesmodel-job").val()]['description_short']
            );
        },
    });

    new sx.classes.Candidat({
        'data' : {$modelsJson}
    });

})(sx, sx.$, sx._);
JS
);
?>

<?php ActiveForm::end(); ?>


