<?php 
use yii\bootstrap4\Card;

?>
<div class="row">
    <?php foreach ($dataProvider->getModels() as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
			    <img class="card-img-top" src="<?= $product->image_url ?>" alt="<?= $product->name ?>" style="object-fit: contain;">
			    <div class="card-body">
			        <h5 class="card-title"><?= $product->name ?></h5>
			        <p class="card-text"><?= $product->description ?></p>
			         <!-- Additional product information or buttons can be added here -->
			    </div>
			</div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row">
    <div class="col-md-12">
        <?= \yii\bootstrap4\LinkPager::widget([
            'pagination' => $dataProvider->pagination,
        ]); ?>
    </div>
</div>
<!-- next load on click -->
<?php
/*$loadNextUrl = Url::to(['record/load-next']);

// Register JavaScript code to handle loading of next records
$js = <<<JS
var offset = 0;
var limit = 20;

function loadNextRecords() {
    $.ajax({
        url: '$loadNextUrl',
        method: 'GET',
        data: { offset: offset },
        success: function(data) {
            $('#records-container').append(data);
            offset += limit;
        }
    });
}

$(document).on('click', '#load-next-btn', function() {
    loadNextRecords();
});

$(document).ready(function() {
    loadNextRecords();
});
JS;

$this->registerJs($js);*/
?>

<!-- <div class="container">
    <h1><?php //$this->title ?></h1>

    <div id="records-container"></div>

    <div class="form-group">
        <?php //Html::button('Load More', ['id' => 'load-next-btn', 'class' => 'btn btn-primary']) ?>
    </div>
</div> -->
