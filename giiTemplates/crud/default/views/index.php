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
<?= "    <?php echo" ?> $this->render('_search', ['model' => $searchModel]); ?>
<?= "    <?php echo" ?> $this->render('_index', ['dataProvider' => $dataProvider]); ?>
</div>
<?= "<?php " ?>Modal::begin([
        'title' => '',
        'centerVertical' => false,
        'size' => 'modal-lg',
        'id' => 'modal',
    ]);
    <?= "echo" ?> "<div id='modelBootsrap4Content'></div>"; ?>
Modal::end(); ?>