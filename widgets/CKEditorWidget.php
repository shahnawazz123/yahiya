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
        

        // Render the textarea
        //echo Html::textarea($this->options['id'], $this->options['value'], $this->options);
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
    }

    protected function registerClientScript(){
        $js = '
                CKEDITOR.replace('.Json::encode($this->options['id']).', '.Json::encode($this->clientOptions).');
                var $ckEditorCustom = CKEDITOR.instances[' . Json::encode($this->options['id']) . '];
                    $ckEditorCustom.on("change", function() {
                        $ckEditorCustom.updateElement();
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
        // CKEditor client options
        'language' => 'en',
    ],
]) ?>

*/