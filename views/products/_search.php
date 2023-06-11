<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @author Shahnawaz Khan */
/** @var app\models\ProductsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-search">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
                'options' => ['data-pjax' => "products-pjax-container"],
            ]); ?>
            <div class="card">
                <div class="header">
                    <h2 class="text-capitalize">Search</h2>
                </div>
                <div class="body d-flex flex-wrap">
                    <?= $form->field($model, 'name')->textInput(['placeholder' => $model->getAttributeLabel('name')])->label(false) ?>

                    <?= $form->field($model, 'description',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('description')])->label(false) ?>

                    <?= $form->field($model, 'price',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('price')])->label(false) ?>

                    <?= $form->field($model, 'image_url',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('image_url')])->label(false) ?>

                    <?= $form->field($model, 'category_id',['options' => ['class' => 'ml-4']])->dropDownList($model->allCategories, ['class' => 'form-control'])->label(false); ?>

                    <?= $form->field($model, 'brand_id',['options' => ['class' => 'ml-4']])->dropDownList($model->allBrands, ['class' => 'form-control'])->label(false); ?>

                </div>
                <div class="form-group ml-4">
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
        </div>
   </div>         
</div>
<script type="text/javascript">
    $(document).on("change", ".products-search .form-control", function(e) {
        $(".page-loader-wrapper").css("background-color", "transparent").show();
        const form = $(this).parents('form').eq(0);
        const url  = form.attr("action");
        const data = form.serializeArray();
        const pjax = '#'+form.data('pjax');
        $.ajax({
            url: url,
            data: data,
            success: function(result) {
                $(".page-loader-wrapper").hide();
                $(pjax).html(result);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $(".page-loader-wrapper").hide();
                console.log({
                    'title': textStatus,
                    'message': errorThrown
                });
            }
        });
    });
</script>