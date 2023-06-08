<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Brands $model */

$this->title = 'Update Brands: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?= Html::encode($this->title) ?></h2>
        </div>
	</div>
</div>
<div class="brands-create container-fluid">
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
