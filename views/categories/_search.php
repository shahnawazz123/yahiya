<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @author Shahnawaz Khan */
/** @var app\models\CategoriesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="categories-search">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <?php $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',
                    'options' => ['data-pjax' => true],
                ]); 
            ?>
            <div class="card">
                    <div class="header">
                        <h2 class="text-capitalize">Search</h2>
                    </div>
                    <div class="body d-flex flex-wrap">
                        <?= $form->field($model, 'name')->textInput(['placeholder' => $model->getAttributeLabel('name')])->label(false) ?>
                        <?= $form->field($model, 'description',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('description')])->label(false) ?>
                    </div>    
            <div class="form-group ml-4">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary','id' => 'categories-search']) ?>
                <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>        
</div>