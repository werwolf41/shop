<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
     //   'css/bootstrap.min.css',
        'css/bootstrap-datetimepicker.min.css',
        'css/font-awesome.min.css',
        'css/nivo-slider.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/stylesheet.css',
    ];
    public $js = [
       // 'js/jquery-2.1.1.min.js',
       // 'js/bootstrap.min.js',

        'js/jquery.countdown.min.js',
        'js/jquery.dotdotdot.min.js',
        'js/jquery.nivo.slider.pack.js',
        'js/moment.js',
        'js/owl.carousel.min.js',
        'js/common.js',
        'js/bootstrap-datetimepicker.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
