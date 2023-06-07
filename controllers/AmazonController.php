<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use app\models\Products;
class AmazonController extends Controller {

	public function actionDisplayProducts(){
	    $searchKeywords = 'compus footwear';
		$searchKeywords = str_replace(' ', '+', $searchKeywords);

		$params = [
		    'k' => $searchKeywords,
		    'crid' => 'I7UTGG7FOIZ',
		    'sprefix' => $searchKeywords,
		    'ref' => 'nb_sb_noss'
		];

		$url = 'https://www.amazon.com/s?' . http_build_query($params);
	    $html = $this->curlRequest($url);
	    
	    $regex = '/<h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-2">(.+?)<\/h2>.*?' . 
	             '<span class="a-price-whole">(.+?)<\/span>.*?' .
	             '<span class="a-price-symbol">(.+?)<\/span>/s';
	    preg_match_all($regex, $html, $matches, PREG_SET_ORDER);
	    
	    $products = [];echo "<pre>";
	    
	    foreach ($matches as $match) {
	        $title = $match[1];
	        $price = $match[2];
	        $currency = $match[3];
	        
	        $product = new Product();
	        $product->title = $title;
	        $product->price = $price;
	        $product->currency = $currency;
	        $product->save(); // Save the product details in the database
	        
	        $products[] = $product;
	    }
	    
	    // Render the view with the products data
	    return $this->render('products', [
	        'products' => $products,
	    ]);
	}

	private function saveProductImage($product, $html){
	    $regex = '/<img alt="' . preg_quote($product->title, '/') . '".*?src="(.*?)"/i';
	    if (preg_match($regex, $html, $matches)) {
	        $imageUrl = $matches[1];
	        return $imageUrl;
	    }
	    return null;
	}

	private function curlRequest($url) {
	    $ch = curl_init($url);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
		    $response = curl_exec($ch);
	    curl_close($ch);
	    return $response;
	}

}
