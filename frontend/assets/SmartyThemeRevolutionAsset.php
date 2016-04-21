<?php
/**
 * AppAsset
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 20.10.2014
 * @since 1.0.0
 */

namespace frontend\assets;

use skeeks\template\smarty\SmartyAsset;

/**
 * Class SmartyThemeRevolutionAsset
 * @package frontend\assets
 */
class SmartyThemeRevolutionAsset extends SmartyAsset
{
    public $css = [
        'plugins/slider.revolution/css/extralayers.css',
        'plugins/slider.revolution/css/settings.css',
    ];

    public $js = [
        'plugins/slider.revolution/js/jquery.themepunch.tools.min.js',
        'plugins/slider.revolution/js/jquery.themepunch.revolution.min.js',
        'js/view/demo.revolution_slider.js',
    ];

    public $depends = [
        '\skeeks\sx\assets\Custom',
    ];
}