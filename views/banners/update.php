<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Banners $model */

$this->title = 'Update Banners: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?= Html::encode($this->title) ?></h2>
        </div>
	</div>
</div>	
<div class="banners-update">
    <?= $this->render('_form', ['model' => $model]) ?>
</div>