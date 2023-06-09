<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/** @var yii\web\View $this */
/** @var yii\gii\generators\crud\Generator $generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @author Shahnawaz Khan */
/** @var <?= ltrim($generator->searchModelClass, '\\') ?> $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <?= "<?php " ?>$form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
                'options' => ['data-pjax' => "<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-pjax-container"],
            ]); ?>
            <div class="card">
                <div class="header">
                    <h2 class="text-capitalize">Search</h2>
                </div>
                <div class="body d-flex flex-wrap">
            <?php
            $count = 0;
            foreach ($generator->getColumnNames() as $attribute) {
                if (++$count < 6) {
                    echo "    <?= " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
                } else {
                    echo "    <?php // echo " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
                }
            }
            ?>
                </div>
                <div class="form-group ml-4">
                    <?= "<?= " ?>Html::resetButton(<?= $generator->generateString('Reset') ?>, ['class' => 'btn btn-outline-secondary']) ?>
                </div>
                <?= "<?php " ?>ActiveForm::end(); ?>
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