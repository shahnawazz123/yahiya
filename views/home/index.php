<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Carousel;
use yii\bootstrap4\CarouselItem;

$this->title = 'Yahiya | Home';
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h1>Yahiya Footwear</h1>
        </div>            
        <div class="col-md-6 col-sm-12 text-right">
            <div class="inlineblock vivify swoopInTop delay-900 mr-4">Visitors <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
            <div class="inlineblock vivify swoopInTop delay-950 mr-4">Visits <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
            <div class="inlineblock vivify swoopInTop delay-1000">Chats <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
        </div>
        <div class="container-fluid col-lg-6 col-md-6 col-sm-12">
            <?php 
                echo Carousel::widget([
                    'id' => 'yahiyaFootwearBanner',
                    'options' => [
                        'class' => 'carousel slide',
                        'data-ride' => 'carousel',
                    ],
                    'items' => [
                        [
                            'content' => Html::img('/theme-assets/images/image-gallery/7.jpg', ['class' => 'd-block w-100', 'alt' => 'First slide']),
                            'options' => ['class' => 'carousel-item active'],
                        ],
                        [
                            'content' => Html::img('/theme-assets/images/image-gallery/8.jpg', ['class' => 'd-block w-100', 'alt' => 'Second slide']),
                            'options' => ['class' => 'carousel-item'],
                        ],
                        [
                            'content' => Html::img('/theme-assets/images/image-gallery/9.jpg', ['class' => 'd-block w-100', 'alt' => 'Third slide']),
                            'options' => ['class' => 'carousel-item'],
                        ],
                    ],
                    'controls' => [
                        '<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>',
                        '<span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span>',
                    ],
                ]);
            ?>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-12">
            <div class="card-group m-b-30">
                <div class="card n_category">
                    <span class="sub_n_category bg-orange">Music</span>
                    <img class="card-img-top" src="/theme-assets/images/news/news1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">The Madonna 80s Mastermix</a></h5>
                        <p class="card-text">This is a wider card with supporting This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-red">Tops</span>
                    <img class="card-img-top" src="/theme-assets/images/news/news2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">The story behind a giant ship</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 7 mins ago</small>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category p_right bg-purple">Food</span>
                    <img class="card-img-top" src="/theme-assets/images/news/news4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Ten films to watch in Sept...    </a></h5>
                        <p class="card-text">This is a wider card with supportin content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 8 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card-columns">
                <div class="card">
                    <div id="slider1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/theme-assets/images/image-gallery/8.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/theme-assets/images/image-gallery/9.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/theme-assets/images/image-gallery/1.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Card title that wraps to a new line</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                    </div>
                </div>                        
                <div class="card n_category">
                    <span class="sub_n_category bg-green">Photograph</span>
                    <img class="card-img-top" src="/theme-assets/images/image-gallery/15.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">'I cried when asked to be cover model'</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card n_category text-center">
                    <span class="sub_n_category bg-cyan">Travel</span>
                    <img class="card-img" src="/theme-assets/images/news/news6.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Wimbledon champion Kerber out of US Open</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
                    </div>
                </div>
                <div class="card text-white bg-purple">
                    <div class="card-body">
                        <h5 class="card-title">Where does it come from?</h5>
                        <p class="card-text">Lana Del Rey postpones Israel performance Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                        <p class="card-text"><small class="text-light">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top mb-3 rounded" src="/theme-assets/images/news/news10.jpg" alt="Card image cap">
                        <h5 class="card-title"><a href="#">Where can I get some?</a></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 1 week ago</small></p>
                    </div>
                </div>                        
                <div class="card">
                    <div class="card-body">
                        <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Readmore</a>
                                </div>
                                <div class="carousel-item">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-pink">Fashion</span>
                    <img class="card-img-top" src="/theme-assets/images/news/news9.jpg" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="#">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="/theme-assets/images/image-gallery/1.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Amazon Fashion</h5>
                        <p class="card-text">Your new look for the new season | Top brands | 30 days return</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-red">Tech</span>
                    <img class="card-img-top" src="/theme-assets/images/image-gallery/10.jpg" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="#">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Where does it come from?</h5>
                        <p class="card-text">Lana Del Rey postpones Israel performance Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                        <p class="card-text"><small class="text-light">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/theme-assets/images/news/news5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">'I cried when asked to be cover model'</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-pink">Fashion</span>
                    <img class="card-img-top" src="/theme-assets/images/news/news8.jpg" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="#">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card n_category text-center">
                    <span class="sub_n_category bg-indigo">Style</span>
                    <img class="card-img" src="/theme-assets/images/news/news7.jpg" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Wimbledon champion Kerber out of US Open</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card text-white bg-orange">
                    <div class="card-body">
                        <h5 class="card-title">Where does it come from?</h5>
                        <p class="card-text">Lana Del Rey postpones Israel performance Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                        <p class="card-text"><small class="text-light">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="/theme-assets/images/news/news3.jpg" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><a href="#">Amazon Fashion</a></h5>
                        <p class="card-text">Your new look for the new season | Top brands | 30 days return</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>