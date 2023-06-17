<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Yahiya | Home';
?>

<div class="block-header">
    <div class="row clearfix">
        <div class="col-sm-12">
            <?php echo \app\widgets\CarouselWidget::widget();?>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-12">
            <div class="card-group m-b-30">
                <div class="card n_category">
                    <span class="sub_n_category bg-orange">Music</span>
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/Homepage_Category_Motomania.jpg?v=1681452401" alt="Motomania">
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
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/Homepage_Category_CampusOGs.jpg?v=1681452551" alt="Card image cap">
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
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/Homepage_Category_TIE-N-DYE.jpg?v=1681452799" alt="Card image cap">
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
                                <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/Sub_Category_AirCapsule_b6075e37-c49b-4372-900f-5a36481b1e0e_900x.jpg?v=1683090419" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/Sub_Category_NITROFLY_71f1f65c-4ca2-496a-8084-e207ab298f6c_900x.jpg?v=1683090441" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/KeyCategory_Sandal-1_460x.jpg?v=1681453190" alt="Third slide">
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
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/CAMP-ROSS_22G-996_WHT-F.GRN_2_360x.jpg?v=1683616097" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">'I cried when asked to be cover model'</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                    </div>
                </div>
                <div class="card n_category text-center">
                    <span class="sub_n_category bg-cyan">Travel</span>
                    <img class="card-img" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/LUCAS_22G-981_L.GREY-T.BLUE_2_360x.jpg?v=1683616132" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Wimbledon champion Kerber out of US Open</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top mb-3 rounded" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/KeyCategory_Sandal-2_460x.jpg?v=1681453216" alt="Card image cap">
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
                                    <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/CAMP-INTENSE_22G-925_L.GRY-T.BLU_2_360x.jpg?v=1683616176" alt="First slide">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/FINCH_22G-997_BLK-MSTD_2_7b383aac-59bf-41ef-9856-31b7a3eecf2d_360x.jpg?v=1683616077" alt="First slide">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-pink">Fashion</span>
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/products/GC-220L_GC-2220L_NLK-OF.WHT_2.jpg?v=1670325941" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="#">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/products/GCK-3004_GCK-3004_BLK_1.jpg?v=1670325517" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Amazon Fashion</h5>
                        <p class="card-text">Your new look for the new season | Top brands | 30 days return</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-red">Tech</span>
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/products/GCK-3001_GCK-3001_RED_1.jpg?v=1670325532" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="#">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/KREATION_22G-238_NAVY-T.BLU_2_360x.jpg?v=1683616187" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">'I cried when asked to be cover model'</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card n_category">
                    <span class="sub_n_category bg-pink">Fashion</span>
                    <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/files/Homepage_Category-CLogs.jpg?v=1681452896" alt="Card image cap">
                    <div class="body">                            
                        <h5 class="mb-0 card-title"><a href="#">Some quick example text to build on the card title.</a></h5>
                        <small>Feb 22, 10:47 am</small>
                    </div>
                </div>
                <div class="card n_category text-center">
                    <span class="sub_n_category bg-indigo">Style</span>
                    <img class="card-img" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/products/3K-SD-062-L-SEAGRN-WHT-1.jpg?v=1670326007" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Wimbledon champion Kerber out of US Open</a></h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img" src="https://cdn.shopify.com/s/files/1/0607/6678/1671/products/T_J-07V_T_J-07_S.GRN-ORG_2.jpg?v=1670325365" alt="Card image">
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