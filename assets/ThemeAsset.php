<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author shahnawaz
 * @since 2.0.46
 */

class ThemeAsset extends AssetBundle
{
    //public $sourcePath = 'theme/';
    const VENDOR  = 'theme-assets/';
    public $baseUrl = '@web/';

    public $css = [
        ThemeAsset::VENDOR.'vendor/font-awesome/css/font-awesome.min.css',
        ThemeAsset::VENDOR.'vendor/animate-css/vivify.min.css',
        ThemeAsset::VENDOR.'vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css',
        ThemeAsset::VENDOR.'vendor/toastr/toastr.min.css',
        ThemeAsset::VENDOR.'assets/css/site.min.css',
        'css/custom.css',
    ];
    public $js = [
        ThemeAsset::VENDOR.'assets/bundles/vendorscripts.bundle.js',
        ThemeAsset::VENDOR.'assets/bundles/chartist.bundle.js',
        ThemeAsset::VENDOR.'vendor/toastr/toastr.js',
        ThemeAsset::VENDOR.'assets/bundles/mainscripts.bundle.js',
        'js/custom-js.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}