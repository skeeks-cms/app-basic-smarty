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
/**
 * Class MasterSliderAsset
 * @package frontend\assets
 */
class MasterSliderAsset extends AppAsset
{
    public $css = [
        'plugins/masterslider/style/masterslider.css',
        'plugins/masterslider/style/additional.css',
    ];

    public $js = [
        'plugins/masterslider/masterslider.min.js',
    ];

    public $depends = [
        'frontend\assets\AppAsset',
    ];
}