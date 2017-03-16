<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class Login extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/reset.css',
        'public/css/style.css',
        'public/css/supersized.css',
    ];
    public $js = [
        'public/js/html5.js',
        'public/js/jquery-1.8.2.min.js',
        'public/js/scripts.js',
        'public/js/supersized.3.2.7.min.js',
        'public/js/supersized-init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
