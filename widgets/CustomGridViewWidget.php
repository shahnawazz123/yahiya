<?php

namespace app\widgets;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\grid\GridView;
use app\assets\DataTableAsset;

/*
**************************************************************
************************************************************** 
2.Using without model->
    <?= CustomGridViewWidget::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'email',
        ],
    ]) ?>

3.Additional clientOptions
    'paging' => true,
    'lengthMenu' => [10, 25, 50],
    'ordering' => true,
    'searching' => true,
    'info' => true,
    'buttons' => [
        'dom' => 'Bfrtip',
        'buttons' => [
            'copy',
            'excel',
            'pdf',
            'print',
        ],
    ],
    'language' => [
        'url' => 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/en.json',
    ],
      
**************************************************************
**************************************************************
*/

class CustomGridViewWidget extends GridView{
    public $options = [];
    public $clientOptions = [];
    private $_assetBundle;

    public function init(){
        parent::init();
        $this->defaultOptions(); // Set the default options if not provided
        $this->registerAssetBundle(); // Register DatePicker assets
        $this->registerClientScript(); // Set the ClientScript
    }

    public function run(){
        //echo Html::tag('table','', $this->options);
        parent::run();
    }

    protected function defaultOptions(){
        if (empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    protected function registerAssetBundle(){
        $this->_assetBundle = DataTableAsset::register($this->getView());
    }

    protected function registerClientScript(){
        $id = $this->options['id'];
        $clientOptions = Json::encode($this->getClientOptions());
        $clientScript  = "jQuery('.js-exportable').DataTable($clientOptions);";//print_r($clientScript);die;
        $this->getView()->registerJs($clientScript,View::POS_READY);
    }


    protected function getClientOptions(){
        $defaultOptions = [
            'paging' => true,
            'ordering' => true,
            'info' => true,
            'dom' => 'Bfrtip',
            'buttons' => ['copy','excel','pdf','print'],
        ];
        if (!empty($this->clientOptions)) {
            $defaultOptions = array_merge($defaultOptions, $this->clientOptions);
        }
        return $defaultOptions;
    }

    // protected function registerClientScript(){
    //     $id = $this->options['id'];
    //     $view = $this->getView();

    //     $options = Json::encode([
    //         // Configure DataTables options here (e.g., sorting, paging, etc.)
    //         'paging' => true,
    //         'ordering' => true,
    //         // Add more options as needed
    //         'buttons' => [
    //             [
    //                 'extend' => 'excel',
    //                 'text' => 'Export Excel',
    //                 'className' => 'btn btn-success',
    //                 'exportOptions' => [
    //                     'columns' => ':visible',
    //                 ],
    //             ],
    //             [
    //                 'extend' => 'pdf',
    //                 'text' => 'Export PDF',
    //                 'className' => 'btn btn-danger',
    //                 'exportOptions' => [
    //                     'columns' => ':visible',
    //                 ],
    //             ],
    //             [
    //                 'extend' => 'print',
    //                 'text' => 'Print',
    //                 'className' => 'btn btn-primary',
    //                 'exportOptions' => [
    //                     'columns' => ':visible',
    //                 ],
    //             ],
    //             // View button
    //             [
    //                 'text' => 'View',
    //                 'className' => 'btn btn-info',
    //                 'action' => new JsExpression('
    //                     function (e, dt, node, config) {
    //                         var data = dt.row({selected: true}).data();
    //                         if (data) {
    //                             // Replace "view-url" with the actual URL to view the record
    //                             window.location.href = "view-url?id=" + data.id;
    //                         }
    //                     }
    //                 '),
    //             ],
    //             // Update button
    //             [
    //                 'text' => 'Update',
    //                 'className' => 'btn btn-warning',
    //                 'action' => new JsExpression('
    //                     function (e, dt, node, config) {
    //                         var data = dt.row({selected: true}).data();
    //                         if (data) {
    //                             // Replace "update-url" with the actual URL to update the record
    //                             window.location.href = "update-url?id=" + data.id;
    //                         }
    //                     }
    //                 '),
    //             ],
    //             // Delete button
    //             [
    //                 'text' => 'Delete',
    //                 'className' => 'btn btn-danger',
    //                 'action' => new JsExpression('
    //                     function (e, dt, node, config) {
    //                         var data = dt.row({selected: true}).data();
    //                         if (data && confirm("Are you sure you want to delete this record?")) {
    //                             // Replace "delete-url" with the actual URL to delete the record
    //                             $.post("delete-url", {id: data.id}, function(response) {
    //                                 if (response.success) {
    //                                     // Reload the DataTable after successful deletion
    //                                     dt.ajax.reload();
    //                                 } else {
    //                                     alert("Failed to delete the record.");
    //                                 }
    //                             });
    //                         }
    //                     }
    //                 '),
    //             ],
    //         ],
    //     ]);

    //     $js = <<<JS
    //         $('#$id').DataTable($options);
    //     JS;

    //     $view->registerJs($js);
    // }
}
