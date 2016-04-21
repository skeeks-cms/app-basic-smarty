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
                $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('name');
                $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
            ?>
            <?= $form->field($propertyType->model->relatedPropertiesModel, 'name'); ?>

            <?
                $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('phone');
                $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
            ?>
            <?= $form->field($propertyType->model->relatedPropertiesModel, 'phone'); ?>

            <?
                $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('email');
                $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
            ?>
            <?= $form->field($propertyType->model->relatedPropertiesModel, 'email'); ?>
        </div>
        <div class="col-xs-12 col-sm-6">

            <?
                $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('tarif');
                $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
            ?>
            <?= $propertyType->renderForActiveForm(); ?>



            <?
                $property       = $modelHasRelatedProperties->relatedPropertiesModel->getRelatedProperty('allow');
                $propertyType   = $property->createPropertyType($form, $modelHasRelatedProperties);
            ?>
            <?= $propertyType->renderForActiveForm()->label(false); ?>

            <!--<div class="form-group margin-top-20">
                <label class="checkbox weight-300">
                    <input type="checkbox" name="checkbox-inline">
                    <i></i> с условиями сотрудничества ознакомлен
                </label>
            </div >-->
            <div class="form-group margin-top-20">
                <a href="#"><i class="fa-lg fa fa-file-pdf-o"></i> Условия сотрудничества </a>
            </div >
            <div class=" margin-top-10">
                <button type="submit" class="btn btn-warning bg-orange mt-24 btn-lg"><i class="fa fa-check"></i> Отправить заявку </button>
            </div>
        </div>

    </div>



<?php ActiveForm::end(); ?>


