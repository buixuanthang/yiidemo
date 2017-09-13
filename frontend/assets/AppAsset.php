<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'frontend/web/common/css/bootstrap.min.css',
        'frontend/web/common/css/nivo-slider.css',
        'frontend/web/common/css/animate.css',
        'frontend/web/common/css/owl.carousel.css',
        'frontend/web/common/css/style.css',
        'frontend/web/common/css/responsive.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800',
        'http://fonts.googleapis.com/css?family=Oswald',
        'http://fonts.googleapis.com/css?family=Raleway:400,700',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',

    ];
    public $js = [
        'http://code.jquery.com/jquery-1.11.0.min.js',
        'frontend/web/common/js/bootstrap.min.js',
        'frontend/web/common/js/jquery.nivo.slider.pack.js',
        'frontend/web/common/js/slider.js',
        'frontend/web/common/js/owl.carousel.min.js',
        'frontend/web/common/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
