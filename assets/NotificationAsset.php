<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author shahnawaz  <shahnawaz.khan@synradar.com>
 * @since 2.0.46
 */

class NotificationAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['plugins/notification/toastr.min.css'];

    public $js = [
        'plugins/notification/toastr.js',
        'plugins/notification/notification-config.js',
    ];
    public $depends = [];
    public $publishOptions = [
        'forceCopy'=>false,
    ];
}