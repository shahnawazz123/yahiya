<?php  
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php foreach ($dataProvider->getModels() as $product): ?>
    <div class="col-md-4 mb-4">
        <div class="card">
        	<?php $img = Html::img($product->image_url, ['class' => 'card-img-top', 'alt' => $product->name, 'style'=> 'object-fit: contain;']); 
        		echo Html::a($img, ['products/detail', 'id' => $product->id], ['option' => 'value']);
        	?>
		    <div class="card-body">
		        <h5 class="card-title"><?= Html::encode($product->name) ?></h5>
		        <p class="card-text"><?= Html::encode($product->description) ?></p>
		         <!-- Additional product information or buttons can be added here -->
		    </div>
		</div>
    </div>
<?php endforeach; ?>




