<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
* @author shahnawaz  <shahnawazz123@gmail.com>
* @since 2.0
*/

class CkeditorAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    //public $css = ['plugins/ckeditor.css'];

    public $js = ['plugins/ckeditor/ckeditor.js'];
    public $depends = [];
    public $publishOptions = [];
}