<?php

use app\models\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\Modal;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\CategoriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?=  Html::encode($this->title) ?></h2>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <?= Html::button('Create Categories', [
                'class' => 'btn btn-sm btn-primary btn-round mt-3 showModalButton',
                'value' => Url::to(['create']),
            ]); ?>
        </div>   
    </div>
</div>
<div class="categories-index container-fluid">
    <?php 
        echo $this->render('_search', ['model' => $searchModel]);
        echo $this->render('_index', ['dataProvider' => $dataProvider]);
    ?>
</div>

<?php
Modal::begin([
    'id' => 'modal',
    'size' => 'modal-lg',
    'title' => '',
]);

echo "<div id='modelBootsrap4Content'></div>";
Modal::end();
?>