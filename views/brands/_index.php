<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @author Shahnawaz Khan */
/** @var app\models\BrandsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

Pjax::begin(['id' => "brands-pjax-container"]);
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-hover table-custom spacing8'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'description:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::button('<i class="icon-eye"></i>',[
                            'class' => 'btn btn-sm btn-default showModalButton',
                            'title' => 'View',
                            'value' => $url,
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                        ]);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::button('<i class="icon-pencil"></i>',[
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
                                'params' => [
                                    Yii::$app->request->csrfParam => Yii::$app->request->csrfToken,
                                ],
                            ],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

<?php Pjax::end(); ?>