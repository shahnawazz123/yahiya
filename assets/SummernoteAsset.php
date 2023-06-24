<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author shahnawaz  <shahnawazz123@gmail.com>
 * @since 2.0
*/

class SummernoteAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['plugins/summernote/dist/summernote.css'];
    public $js = ['plugins/summernote/dist/summernote.js'];
    
    public $depends = ['yii\web\JqueryAsset'];
}
