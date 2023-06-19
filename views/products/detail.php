<?php
use yii\bootstrap4\Carousel;
use yii\bootstrap4\CarouselItem;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Product Detail";
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h2><?=  Html::encode($this->title) ?></h2>
        </div>  
    </div>
</div>
<div class="container-fluid">
    <div class="row row-pb-lg product-detail-wrap">
        <div class="col-sm-8">
            <?php
                    $items = [
                        [
                            'content' => Html::a(Html::img($model->image_url, ['class' => 'img-thumbnail', 'alt' => 'Free html5 bootstrap 4 template']), '#', ['class' => '']),
                            'options' => ['class' => 'item']
                        ],
                        [
                            'content' => Html::a(Html::img('/images/products/item-2.jpg', ['class' => 'img-thumbnail', 'alt' => 'Free html5 bootstrap 4 template']), '#', ['class' => '']),
                            'options' => ['class' => 'item']
                        ],
                        [
                            'content' => Html::a(Html::img('/images/products/item-3.jpg', ['class' => 'img-thumbnail', 'alt' => 'Free html5 bootstrap 4 template']), '#', ['class' => '']),
                            'options' => ['class' => 'item']
                        ],
                        [
                            'content' => Html::a(Html::img('/images/products/item-4.jpg', ['class' => 'img-thumbnail', 'alt' => 'Free html5 bootstrap 4 template']), '#', ['class' => '']),
                            'options' => ['class' => 'item']
                        ],
                    ];

                echo Carousel::widget([
                    'items' => $items,
                ]);
            ?>
        </div>
        <div class="col-sm-4">
            <div class="product-desc">
                <h3><?= Html::encode($model->name); ?></h3>
                <p class="price">
                    <span><?= Html::encode($model->price); ?></span>
                    <span class="rate">
                        <i class="icon-star-full"></i>
                        <i class="icon-star-full"></i>
                        <i class="icon-star-full"></i>
                        <i class="icon-star-full"></i>
                        <i class="icon-star-half"></i>
                        (74 Rating)
                    </span>
                </p>
                <p><?= Html::encode($model->description); ?></p>
                <div class="size-wrap">
                    <div class="block-26 mb-2">
                        <h4>Size</h4>
                        <?php
                            $sizeOptions = ['6', '7', '8', '9','10', '11', '12'];

                            echo Html::tag('div', Html::ul($sizeOptions, [
                                'item' => function ($item, $index) {
                                    return Html::tag('li', Html::a($item, '#'));
                                },
                                'class' => 'list-unstyled',
                                'itemOptions' => [
                                    'class' => 'd-inline-block',
                                    'style' => 'margin-right: 10px;'
                                ]
                            ]), ['class' => 'd-flex flex-wrap']);
                        ?>
                    </div>
                    <div class="block-26 mb-4">
                        <h4>Width</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">M</a></li>
                            <li><a href="#">W</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-btn">
                            <?= Html::button('<i class="fa fa-minus"></i>', ['type' => 'button', 'class' => 'quantity-left-minus btn', 'data' => ['type' => 'minus', 'field' => '']]) ?>
                        </span>
                        <?= Html::input('text', 'quantity', '1', ['id' => 'quantity', 'class' => 'form-control input-number', 'min' => '1', 'max' => '100']) ?>
                        <span class="input-group-btn ml-1">
                            <?= Html::button('<i class="icon-plus"></i>', ['type' => 'button', 'class' => 'quantity-right-plus btn', 'data' => ['type' => 'plus', 'field' => '']]) ?>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="addtocart">
                                <?= Html::a('<i class="icon-shopping-cart"></i> Add to Cart', ['cart.html'], ['class' => 'btn btn-primary btn-addtocart']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <?= Html::a('Description', '#pills-description', ['class' => 'nav-link active', 'id' => 'pills-description-tab', 'data-toggle' => 'pill', 'role' => 'tab', 'aria-controls' => 'pills-description', 'aria-expanded' => 'true']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Manufacturer', '#pills-manufacturer', ['class' => 'nav-link', 'id' => 'pills-manufacturer-tab', 'data-toggle' => 'pill', 'role' => 'tab', 'aria-controls' => 'pills-manufacturer', 'aria-expanded' => 'true']) ?>
                            </li>
                            <li class="nav-item">
                                <?= Html::a('Review', '#pills-review', ['class' => 'nav-link', 'id' => 'pills-review-tab', 'data-toggle' => 'pill', 'role' => 'tab', 'aria-controls' => 'pills-review', 'aria-expanded' => 'true']) ?>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                <ul>
                                    <li>The Big Oxmox advised her not to do so</li>
                                    <li>Because there were thousands of bad Commas</li>
                                    <li>Wild Question Marks and devious Semikoli</li>
                                    <li>She packed her seven versalia</li>
                                    <li>tial into the belt and made herself on the way.</li>
                                </ul>
                            </div>
                            <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                            </div>
                            <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review">
                                            <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </span>
                                                    <span class="text-right"><?= Html::a('<i class="icon-reply"></i>', '#') ?></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="user-img" style="background-image: url(images/person2.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </span>
                                                    <span class="text-right"><?= Html::a('<i class="icon-reply"></i>', '#') ?></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="user-img" style="background-image: url(images/person3.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-half"></i>
                                                        <i class="icon-star-empty"></i>
                                                    </span>
                                                    <span class="text-right"><?= Html::a('<i class="icon-reply"></i>', '#') ?></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        (98%)
                                                    </span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (85%)
                                                    </span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (70%)
                                                    </span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (10%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="icon-star-full"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        <i class="icon-star-empty"></i>
                                                        (0%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
.img-thumbnail {
height: 500px !important;
width: 100%;
object-fit: content;
}

.block-26 ul li {
margin-bottom: 5px;
margin-right: 5px;
width: 40px;
height: 40px;
float: left;
display: table;
text-align: center;
background: #cccccc;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
-ms-border-radius: 2px;
border-radius: 2px;
}    
.block-26 ul li a {
display: table-cell;
vertical-align: middle;
color: #fff;
padding: 0;
}
.product-detail-wrap .product-img {
height: 400px;
margin-bottom: 8px; }

.product-detail-wrap .product-desc {
display: block;
padding-left: 2em; }
.product-detail-wrap .product-desc h3 {
text-transform: uppercase;
font-size: 20px;
display: block; }
.product-detail-wrap .product-desc .price {
width: 100%; }
.product-detail-wrap .product-desc .price span {
width: 100%;
display: inline-block;
font-weight: 400;
font-size: 18px;
color: #000; }
.product-detail-wrap .product-desc .price .rate {
font-size: 13px;
color: #b3b3b3; }
.product-detail-wrap .product-desc .price .rate i {
color: #616161; }
.product-detail-wrap .product-desc .btn-addtocart i {
color: #fff;
font-size: 20px;
padding-right: 10px; }

.product-detail-wrap .quantity-left-minus {
border: 1px solid #e6e6e6;
padding: 12px; }

.product-detail-wrap .quantity-right-plus {
border: 1px solid #e6e6e6;
padding: 12px; }

.product-detail-wrap .btn {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
border-radius: 4px;
display: table; }
.product-detail-wrap .btn i {
display: table-cell;
vertical-align: middle;
color: #000;
font-size: 10px; }

.product-detail-wrap .form-control {
border: 1px solid #e6e6e6 !important;
text-align: center;
font-weight: 400; }

.nav-pills {
font-size: 12px;
font-weight: 400;
text-transform: uppercase; }
.nav-pills li a {
margin-right: 2px;
background: #f2f2f2; }
.nav-pills li a.active {
background: #616161 !important; }

.pills .tab-pane {
padding: 2em; }

.pills .head {
font-size: 18px;
text-transform: uppercase;
margin-bottom: 30px; }

.pills .review {
width: 100%;
float: left;
margin-bottom: 30px; }
.pills .review .user-img {
width: 80px;
height: 80px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
-ms-border-radius: 50%;
border-radius: 50%;
float: left; }
.pills .review .desc {
width: calc(100% - 100px);
float: right; }
.pills .review .desc h4 {
width: 100%;
margin-bottom: 10px;
text-transform: uppercase; }
.pills .review .desc h4 span {
width: 49%;
display: inline-block; }
.pills .review .desc h4 span:first-child {
  font-size: 16px; }
.pills .review .desc h4 span:last-child {
  font-size: 13px;
  color: #b3b3b3; }
.pills .review .desc .star {
width: 100%; }
.pills .review .desc .star span {
width: 49%;
display: inline-block; }
.pills .review .desc .star i {
color: #616161; }
.pills .review .desc .star .reply {
padding: 2px 10px;
background: #f0f0f0;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
-ms-border-radius: 2px;
border-radius: 2px; }
.pills .review .desc .star .reply i {
  color: gray;
  font-size: 12px; }

.pills .wrap {
padding: 2em;
background: #fafafa; }

.pills .rating-wrap {
width: 100%;
display: block; }
.pills .rating-wrap .star {
display: block;
width: 100%; }
.pills .rating-wrap .star:last-child {
margin-bottom: 0; }
.pills .rating-wrap .star span {
display: inline-block;
color: #b3b3b3; }
.pills .rating-wrap .star span i {
color: #616161; }
.pills .rating-wrap .star span:first-child {
width: 62%; }
.pills .rating-wrap .star span:last-child {
width: 32%; }

</style>
<script>
var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        e.preventDefault();
        const quantity = parseInt($('#quantity').val());
        $('#quantity').val(quantity + 1);
    });

    $('.quantity-left-minus').click(function(e){
        e.preventDefault();
        const quantity = parseInt($('#quantity').val());
        if(quantity>0){
            $('#quantity').val(quantity - 1);
        }
    });
</script>