<?php

use app\models\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\Modal;

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

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-hover table-custom spacing8'],
        //'filterModel' => $searchModel, 
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'description:ntext',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model, $key) {
                            
                            return Html::button('<i class="icon-eye"></i>', [
                                'class' => 'btn btn-sm btn-default showModalButton',
                                'title' => 'View',
                                'value' => $url,
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                            ]);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::button('<i class="icon-pencil"></i>', [
                                'class' => 'btn btn-sm btn-default showModalButton',
                                'title' => 'Update',
                                'value' => $url,
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                            ]);
                        },
                        'delete' => function ($url, $model, $key) {
                            return Html::a('<i class="icon-trash"></i>', $url, [
                                'class' => 'btn btn-sm btn-default',
                                'title' => 'Delete',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]);
                        },
                    ],
                ],

            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, Categories $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
        ],
    ]); ?>


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