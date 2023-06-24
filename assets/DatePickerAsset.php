<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author shahnawaz  <shahnawaz.khan@synradar.com>
 * Notes:Use these required data attributes in input field of text
 * app\assets\DatePickerAsset::register($this);
 * data-provide="datepicker" ,data-date-format="dd/mm/yyyy"
 */

class DatePickerAsset extends AssetBundle {
    
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css'];
    public $js = ['plugins/bootstrap-datepicker/bootstrap-datepicker.min.js'];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}