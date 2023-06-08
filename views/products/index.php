<?php

use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap4\Modal;
/** @var yii\web\View $this */
/** @var app\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'List of the Products';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?= Html::encode($this->title) ?></h2>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <?php Modal::begin([
                        'title' => 'create Products',
                        'centerVertical'=> false,
                        'id' => 'createProducts',
                        'toggleButton' => [
                            'label' => 'Create Products',
                            'class' => 'btn btn-sm btn-primary btn-round mt-3 showModalButton',
                            'value' => Url::to(['create']),
                        ],
                    ]);
                 echo "<div id='modelBootsrap4Content'></div>";
            Modal::end();?>
        </div>   
    </div>
</div>

<div class="products-index">    
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'price',
            'image_url:url',
            //'category_id',
            //'brand_id',
            //'quantity',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Products $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
