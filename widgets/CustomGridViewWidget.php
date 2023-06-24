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
    <?= DatePickerWidget::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'email',
        ],
    ]) ?>

3.Additional clientOptions
    'startDate' => '2023-01-01',
    'endDate'   => '2023-12-31',
    'daysOfWeekDisabled' => [0, 6],
    'datesDisabled' => ['2023-01-15', '2023-02-20'],
    'minViewMode'   => 'months',
    'startView' => 'months',
    'clearBtn'  => true,
    'todayBtn'  => true,
    'disableTouchKeyboard' => true,
    'orientation'   => 'auto',
    'templates'     => [// Override the default templates if needed]
      
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
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
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
        $clientOptions = $this->getClientOptions();
        $clientScript  = "jQuery('#$id').DataTable($clientOptions);";
        $this->getView()->registerJs($clientScript,View::POS_READY);
    }

    protected function getClientOptions(){
        $defaultOptions = [
            'paging' => true,
            'ordering' => true,
            'info' => true,
        ];
        if (!empty($this->clientOptions)) {
            $defaultOptions = array_merge($defaultOptions, $this->clientOptions);
        }
        return \yii\helpers\Json::encode($defaultOptions);
    }
}
