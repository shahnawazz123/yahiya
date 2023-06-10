<?php

use app\models\Banners;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;use yii\bootstrap4\Modal;

/** @var yii\web\View $this */
/** @var app\models\BannersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?=  Html::encode($this->title) ?></h2>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <?=  Html::button('Create Banners', [
                'class' => 'btn btn-sm btn-primary btn-round mt-3 showModalButton',
                'value' => Url::to(['create']),
            ]); ?>
        </div>   
    </div>
</div>
<div class="banners-index container-fluid">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php echo $this->render('_index', ['dataProvider' => $dataProvider]); ?>
</div>
<?php Modal::begin([
        'title' => '',
        'centerVertical' => false,
        'size' => 'modal-lg',
        'id' => 'modal',
    ]);
    echo "<div id='modelBootsrap4Content'></div>";
Modal::end(); ?>