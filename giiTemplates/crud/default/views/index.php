<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/** @var yii\web\View $this */
/** @var yii\gii\generators\crud\Generator $generator */

$modelClass = StringHelper::basename($generator->modelClass);

echo "<?php\n";
?>

use <?= $generator->modelClass ?>;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>
use yii\bootstrap4\Modal;

/** @var yii\web\View $this */
<?= !empty($generator->searchModelClass) ? "/** @var " . ltrim($generator->searchModelClass, '\\') . " \$searchModel */\n" : '' ?>
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?= "<?= " ?> Html::encode($this->title) ?></h2>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <?= "<?= " ?> Html::button(<?= $generator->generateString(Inflector::pluralize(Inflector::camel2words('Create '.StringHelper::basename($generator->modelClass)))) ?>, [
                'class' => 'btn btn-sm btn-primary btn-round mt-3 showModalButton',
                'value' => Url::to(['create']),
            ]); ?>
        </div>   
    </div>
</div>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index container-fluid">

<?= $generator->enablePjax ? "    <?php Pjax::begin(); ?>\n" : '' ?>
<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

<?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= " ?>GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-hover table-custom spacing8'],
        <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            ['class' => 'yii\grid\SerialColumn'],

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "            '" . $name . "',\n";
        } else {
            echo "            //'" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "            //'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::button('<i class="icon-eye"></i>', $url, [
                            'class' => 'btn btn-sm btn-default showModalButton',
                            'title' => 'View',
                            'value' => $url,
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                        ]);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::button('<i class="icon-pencil"></i>', $url, [
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
        ],
    ]); ?>
<?php else: ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $generator->getNameAttribute() ?>), ['view', <?= $generator->generateUrlParams() ?>]);
        },
    ]) ?>
<?php endif; ?>

<?= $generator->enablePjax ? "    <?php Pjax::end(); ?>\n" : '' ?>

</div>
<?= "<?php " ?>Modal::begin([
        'title' => '',
        'centerVertical' => false,
        'size' => 'modal-lg',
        'id' => 'modal',
    ]);
    <?= "echo" ?> "<div id='modelBootsrap4Content'></div>"; ?>
Modal::end(); ?>