<?php

namespace app\widgets;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;
use app\assets\SummernoteAsset;

class SummernoteWidget extends InputWidget{
    public $options = [];
    public $clientOptions = [];
    private $_assetBundle;

    public function init(){
        parent::init();
        $this->defaultOptions(); // Set the default options if not provided
        $this->registerAssetBundle(); // Register Summernote assets
        $this->registerClientScript(); // Set the ClientScript
    }

    public function run(){
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
    }

    protected function defaultOptions(){
        if (empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    protected function registerAssetBundle(){
        $this->_assetBundle = SummernoteAsset::register($this->getView());
    }

    protected function registerClientScript(){
        $id = $this->options['id'];
        $clientOptions = $this->getClientOptions();
        $clientScript  = "jQuery('#$id').summernote($clientOptions);";
        $this->getView()->registerJs($clientScript,View::POS_READY);
    }

    protected function getClientOptions(){
        $defaultOptions = [
            'height' => 200, // Set the height of the editor in pixels
            'toolbar' => [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                //['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
            'fontNames' => ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Times New Roman'], // Define custom font names
            'fontSizes' => ['8', '10', '12', '14', '18', '24', '36'], // Define custom font sizes
            'popover' => [
                'image' => [
                    ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']],
                ],
                'link' => [
                    ['link', ['linkDialogShow', 'unlink']],
                    ['custom', ['specialLink']],
                    ['text', ['linkText']],
                ],
                'air' => [
                    ['color', ['color']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                ],
            ],
        ];
        if (!empty($this->clientOptions)) {
            $defaultOptions = array_merge($defaultOptions, $this->clientOptions);
        }
        return \yii\helpers\Json::encode($defaultOptions);
    }
}
