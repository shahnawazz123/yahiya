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
    const VENDOR  = 'theme/assets/vendor/';
    public $baseUrl = '@web/';

    public $css = [
        ThemeAsset::VENDOR.'font-awesome/css/font-awesome.min.css',
        ThemeAsset::VENDOR.'../assets/vendor/bootstrap/css/bootstrap.min.css',
        ThemeAsset::VENDOR.'../assets/vendor/font-awesome/css/font-awesome.min.css',
        ThemeAsset::VENDOR.'../assets/vendor/animate-css/vivify.min.css',
        ThemeAsset::VENDOR.'../assets/vendor/c3/c3.min.css',
        ThemeAsset::VENDOR.'../assets/vendor/chartist/css/chartist.css',
        ThemeAsset::VENDOR.'../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css',
        ThemeAsset::VENDOR.'../assets/vendor/toastr/toastr.min.css',
        ThemeAsset::VENDOR.'../assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css',
        ThemeAsset::VENDOR.'assets/css/site.min.css',
    ];
    public $js = [
        // ThemeAsset::VENDOR.'../../html/assets/bundles/vendorscripts.bundle.js',
        // ThemeAsset::VENDOR.'assets/bundles/libscripts.bundle.js', ['position' => View::POS_HEAD],
        // ThemeAsset::VENDOR.'assets/bundles/vendorscripts.bundle.js', ['position' => View::POS_HEAD],
        // ThemeAsset::VENDOR.'assets/bundles/c3.bundle.js', ['position' => View::POS_END],
        // ThemeAsset::VENDOR.'assets/bundles/chartist.bundle.js', ['position' => View::POS_END],
        // ThemeAsset::VENDOR.'assets/bundles/jvectormap.bundle.js', ['position' => View::POS_END],
        // ThemeAsset::VENDOR.'../assets/vendor/toastr/toastr.js', ['position' => View::POS_END],
        // ThemeAsset::VENDOR.'assets/bundles/mainscripts.bundle.js', ['position' => View::POS_END],
        // ThemeAsset::VENDOR.'assets/js/index.js', ['position' => View::POS_END],
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}