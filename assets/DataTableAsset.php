<?php
namespace app\assets;

use yii\web\AssetBundle;
/**
 * @author shahnawaz
 * @since 2.0.46
 */
class DataTableAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web/plugins/jquery-datatable/';
    public $css = [
        'dataTables.bootstrap4.min.css',
        'fixedeader/dataTables.fixedcolumns.bootstrap4.min.css',
        'fixedeader/dataTables.fixedheader.bootstrap4.min.css',
    ];
    public $js = [
        'buttons/dataTables.buttons.min.js',
        'buttons/buttons.bootstrap4.min.js',
        'buttons/buttons.colVis.min.js',
        'buttons/buttons.html5.min.js',
        'buttons/buttons.print.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
