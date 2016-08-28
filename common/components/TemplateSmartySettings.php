<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 27.10.2015
 */
namespace common\components;
use frontend\assets\BoomerangThemeAsset;
use frontend\assets\SmartyThemeAsset;
use skeeks\cms\base\Component;

use skeeks\cms\components\Cms;
use skeeks\cms\modules\admin\widgets\form\ActiveFormUseTab;
use \Yii;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/**
 * @var string $bodyCssClasses
 *
 * Class TemplateBoomerang
 * @package common\components\unify
 */
class TemplateSmartySettings extends Component
{
    /**
     * @return array
     */
    static public function themes()
    {
        return [
            'blue'      => 'Синяя',
            'pink'    => 'Пурпурная',
            'orange'    => 'Оранжевая',
            'red'       => 'Красная',
            'green'     => 'Зеленая',
            'yellow'     => 'Желтая',
            'darkgreen'     => 'Темно зеленая',
            'darkblue'     => 'Темно синяя',
            'brown'     => 'Коричневая',
            'lightgrey'     => 'Светло серая',
        ];
    }


    /**
     * Можно задать название и описание компонента
     * @return array
     */
    static public function descriptorConfig()
    {
        return array_merge(parent::descriptorConfig(), [
            'name'          => 'Настройки шаблона Smarty',
        ]);
    }

    /**
     * @var string Цветовая схема
     */
    public $themeColor                      = "green";

    /**
     * @var string Изображение для фона
     */
    public $boxedBgImage                    = "";
    public $boxedBgCss                      = "repeat";
    public $isBoxedLayout                     = false;
    public $isPreloader                       = false;

    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [['themeColor'], 'string'],
            [['boxedBgImage'], 'string'],
            [['isBoxedLayout'], 'boolean'],
            [['isPreloader'], 'boolean'],
            [['boxedBgCss'], 'string'],
        ]);
    }

    public function attributeLabels()
    {
        return ArrayHelper::merge(parent::attributeLabels(), [
            'themeColor'            => 'Цветовая схема',
            'boxedBgImage'          => 'Фоновое изображение',
            'isBoxedLayout'         => 'Фиксированной ширины?',
            'boxedBgCss'            => 'Css стиль для фона',
            'isPreloader'           => 'Индикатор предзагрузки',
        ]);
    }


    /**
     * @param ActiveFormUseTab $form
     */
    public function renderConfigForm(ActiveForm $form)
    {
        echo $form->fieldSet(\Yii::t('app', 'Main'));

            echo $form->fieldSelect($this, 'themeColor', static::themes(), [
                'allowDeselect' => true
            ]);

            echo $form->field($this, 'isBoxedLayout')->checkbox();

            echo $form->field($this, 'boxedBgImage')->widget(
                \skeeks\cms\modules\admin\widgets\formInputs\OneImage::className()
            );
            echo $form->field($this, 'boxedBgCss')->textInput()->hint('repeat or fixed center center');

            echo $form->field($this, 'isPreloader')->checkbox();


        echo $form->fieldSetEnd();
    }

    /**
     * @return $this
     */
    public function initTheme()
    {
        if ($this->themeColor)
        {
            if (in_array($this->themeColor, array_keys(self::themes())))
            {
                \Yii::$app->view->registerCssFile(SmartyThemeAsset::getAssetUrl('css/color_scheme/' . $this->themeColor . '.css'), [
                    'depends' =>
                    [
                        'frontend\assets\SmartyThemeAsset'
                    ]
                ]);
            }
        }

        if ($this->boxedBgImage)
        {
            \Yii::$app->view->registerCss(<<<CSS
            body
            {
                background: url('{$this->boxedBgImage}') {$this->boxedBgCss};
            }
CSS
);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getBodyCssClasses()
    {
        if ($this->isBoxedLayout)
        {
            return 'boxed';
        }

        return '';
    }
}