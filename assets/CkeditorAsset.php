<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author shahnawaz  <shahnawaz.khan@synradar.com>
 * @since 2.0
 */
/*
	Note->
	var $description = CKEDITOR.replace( 'description' ,{toolbar: [
        ['ajaxsave'],
        ['Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
        ['Cut', 'Copy', 'Paste', 'PasteText'],
        ['Undo', 'Redo', '-', 'RemoveFormat'],
        ['TextColor', 'BGColor'],
        ['Maximize'],['Styles','Format','Font','FontSize']
    ],});

    $description.on('change', function() {
      $description.updateElement();         
    });*/

class CkeditorAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    //public $css = ['plugins/ckeditor.css'];

    public $js = ['plugins/ckeditor/ckeditor.js'];
    public $depends = [];
    public $publishOptions = [];
}