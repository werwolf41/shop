<?php
/**
 * Created by PhpStorm.
 * User: krasn
 * Date: 07.06.2017
 * Time: 23:07
 */

namespace app\assets;

use yii\web\AssetBundle;

class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js',
    ];

    public $jsOptions=[
        'condition' => 'lte IE9',
        'position'  => \yii\web\View::POS_HEAD,
    ];
}