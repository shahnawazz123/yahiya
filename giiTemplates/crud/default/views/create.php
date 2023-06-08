<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/** @var yii\web\View $this */
/** @var yii\gii\generators\crud\Generator $generator */

echo "<?php\n";
?>

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var <?= ltrim($generator->modelClass, '\\') ?> $model */

$this->title = <?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?= "<?= " ?>Html::encode($this->title) ?></h2>
        </div>
	</div>
</div>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create container-fluid">
    <?= "<?= " ?>$this->render('_form', ['model' => $model]) ?>
</div>
