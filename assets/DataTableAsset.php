<?php

namespace app\widgets;

use yii\web\AssetBundle;
/**
 * @author shahnawaz
 * @since 2.0.46
 */
class DataTableAsset extends AssetBundle{
    public $sourcePath = '@bower/datatables.net';
    public $css = [
        'css/jquery.dataTables.min.css',
    ];
    public $js = [
        'js/jquery.dataTables.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
