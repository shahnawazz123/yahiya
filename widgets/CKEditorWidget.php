<?php

namespace app\widgets;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;
use app\assets\CKEditorAsset;

class CKEditorWidget extends InputWidget{
    public $options = [];
    public $clientOptions = [];
    private $_assetBundle;

    public function init(){
        parent::init();
        $this->defaultOptions(); // Set the default options if not provided
        $this->registerAssetBundle(); // Register CKEditor assets
        $this->registerClientScript(); // Set the ClientScript
    }

    public function run(){
        
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
    }

    protected function registerClientScript(){
        $id = Json::encode($this->options['id']);
        $ckEditorCustom = str_replace('-', 'ckEditorCustom', $this->options['id']) ;
        $clientOptions  = $this->getClientOptions();
        
        $js = '
                CKEDITOR.replace('.$id.', '.$clientOptions.');
                var $'.$ckEditorCustom.' = CKEDITOR.instances['.$id.'];
                    $'.$ckEditorCustom.'.on("change", function() {
                        $'.$ckEditorCustom.'.updateElement();
                });
            ';
        $this->getView()->registerJs($js, View::POS_READY);
    }

    protected function registerAssetBundle(){
        $this->_assetBundle = CKEditorAsset::register($this->getView());
    }

    protected function defaultOptions(){
        if (empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    public function getClientOptions(){
        $defaultOptions = [
                'toolbar' => [
                    ['ajaxsave'],
                    ['Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
                    ['Cut', 'Copy', 'Paste', 'PasteText'],
                    ['Undo', 'Redo', '-', 'RemoveFormat'],
                    ['TextColor', 'BGColor'],
                    ['Maximize'],['Styles','Format','Font','FontSize']
                ],
            'height' => '200px', // Modify this according to your requirements
        ];
        if (!empty($this->clientOptions)) {
            $defaultOptions = array_merge($defaultOptions, $this->clientOptions);
        }
        return Json::encode($defaultOptions);
    }
}

/* how to use in view ->
1.new JsExpression("function(json){alert(json.error);}");
2.use app\widgets\CKEditorWidget;
// ...

<?= $form->field($model, 'content')->widget(CKEditorWidget::class, [
    'options' => [
        'rows' => 6,
    ],
    'clientOptions' => [
        'toolbar' => 'full', // Customize the toolbar options
        'height' => '300px', // Set the height of the editor
        // Add any additional options you need
    ],
]) ?>

*/