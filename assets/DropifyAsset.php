<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author shahnawaz
 * use this class (.custom-dropify-upload) to apply libary
 * use this attribute data-default-file="url_of_your_file"
 * to load default images
 */

class DropifyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['plugins/dropify/css/dropify.min.css'];

    public $js = [
        'plugins/dropify/js/dropify.js',
        'plugins/dropify/dropify-config.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}