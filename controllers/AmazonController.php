<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use app\models\Products;
class AmazonController extends Controller {

	public function actionDisplayProducts() {
	  
	    foreach ($matches as $match) {
	        $product = new Product();
	        $product->title = $title;
	        $product->price = $price;
	        $product->currency = $currency;

	        // Download the image and save the URL
	        $imageURL = $this->saveProductImage($product, $html);
	        $product->image_url = $imageURL;
	        
	        $product->save();
	        $products[] = $product;
	    }
	}

	private function saveProductImage($product, $html){
	    $regex = '/<img alt="' . preg_quote($product->title, '/') . '".*?src="(.*?)"/i';
	    if (preg_match($regex, $html, $matches)) {
	        $imageUrl = $matches[1];
	        return $imageUrl;
	    }
	    return null;
	}

}
