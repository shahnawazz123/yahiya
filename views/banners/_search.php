<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @author Shahnawaz Khan */
/** @var app\models\BannersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banners-search">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
                'options' => ['data-pjax' => "banners-pjax-container"],
            ]); ?>
            <div class="card">
                <div class="header">
                    <h2 class="text-capitalize">Search</h2>
                </div>
                <div class="body d-flex flex-wrap">
                    <?= $form->field($model, 'title')->textInput(['placeholder' => $model->getAttributeLabel('title')])->label(false) ?>

                    <?= $form->field($model, 'image_url',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('image_url')])->label(false) ?>

                    <?= $form->field($model, 'link',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('link')])->label(false) ?>

                    <?= $form->field($model, 'sequence_number',['options' => ['class' => 'ml-4']])->textInput(['placeholder' => $model->getAttributeLabel('sequence_number')])->label(false) ?>

                </div>
                <div class="form-group ml-4">
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
        </div>
   </div>         
</div>
<script type="text/javascript">
    $(document).on("change", ".form-control", function(e) {
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