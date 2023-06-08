<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Categories $model */

$this->title = 'Create Categories';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?= Html::encode($this->title) ?></h2>
        </div>
	</div>
</div>
<div class="categories-create container-fluid">
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
