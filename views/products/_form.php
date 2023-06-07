<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Products $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-form container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <?php
                $form = ActiveForm::begin();
                $options = ['options'=>['class' => 'col-lg-6 col-md-6 col-sm-12']];
                echo Html::beginTag('div', ['class' => 'card']);
                    echo Html::tag('div', '<h2>Product Form</h2>', ['class' => 'header']);
                    echo Html::beginTag('div', ['class' => 'body']);
                        echo $form->field($model, 'name',$options)->textInput(['maxlength' => true]);
                        echo $form->field($model, 'description',$options)->textarea(['rows' => 6]);
                        echo $form->field($model, 'price',$options)->textInput(['maxlength' => true]);
                        echo $form->field($model, 'image_url',$options)->textInput(['maxlength' => true]);
                        echo $form->field($model, 'category_id',$options)->textInput();
                        echo $form->field($model, 'brand_id',$options)->textInput();
                        echo $form->field($model, 'quantity',$options)->textInput();   
                    echo Html::endTag('div');
                echo Html::endTag('div');
                
                echo Html::beginTag('div', ['class' => 'form-group']);
                    echo Html::submitButton('Save', ['class' => 'btn btn-success']);
                echo Html::endTag('div');
            
                ActiveForm::end();
            ?>
        </div>
    </div>
</div>