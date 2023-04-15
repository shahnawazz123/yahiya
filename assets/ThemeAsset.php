<?php

namespace app\assets;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/main.css',
        'theme/vendor/aos/aos.css',
        'theme/vendor/glightbox/css/glightbox.min.css',
        'theme/vendor/swiper/swiper-bundle.min.css',
        'theme/vendor/boxicons/css/boxicons.min.css',
        'theme/vendor/bootstrap-icons/bootstrap-icons.css'
    ];
    public $js = [
        'theme/js/main.js',
        'theme/vendor/purecounter/purecounter_vanilla.js',
        'theme/vendor/aos/aos.js',
        'theme/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'theme/vendor/glightbox/js/glightbox.min.js',
        'theme/vendor/isotope-layout/isotope.pkgd.min.js',
        'theme/vendor/swiper/swiper-bundle.min.js',
        'theme/vendor/typed.js/typed.min.js',
        'theme/vendor/waypoints/noframework.waypoints.js',
        'theme/vendor/php-email-form/validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\web\JqueryAsset'
    ];
}