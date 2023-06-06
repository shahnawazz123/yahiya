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
        ThemeAsset::VENDOR.'vendor/font-awesome/css/font-awesome.min.css',
        ThemeAsset::VENDOR.'vendor/animate-css/vivify.min.css',
        ThemeAsset::VENDOR.'vendor/c3/c3.min.css',
        ThemeAsset::VENDOR.'vendor/chartist/css/chartist.css',
        ThemeAsset::VENDOR.'vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css',
        ThemeAsset::VENDOR.'vendor/toastr/toastr.min.css',
        ThemeAsset::VENDOR.'vendor/jvectormap/jquery-jvectormap-2.0.3.css',
        ThemeAsset::VENDOR.'assets/css/site.min.css',
    ];
    public $js = [
        ThemeAsset::VENDOR.'assets/bundles/vendorscripts.bundle.js',
        ThemeAsset::VENDOR.'assets/bundles/vendorscripts.bundle.js',
        ThemeAsset::VENDOR.'assets/bundles/c3.bundle.js',
        ThemeAsset::VENDOR.'assets/bundles/chartist.bundle.js',
        ThemeAsset::VENDOR.'assets/bundles/jvectormap.bundle.js',
        ThemeAsset::VENDOR.'vendor/toastr/toastr.js',
        ThemeAsset::VENDOR.'assets/bundles/mainscripts.bundle.js',
        ThemeAsset::VENDOR.'assets/js/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}