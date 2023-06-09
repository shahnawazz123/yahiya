<?php
use yii\helpers\Html;

?>

<div id="megamenu" class="megamenu particles_js">
    <?= Html::a('<i class="icon-close"></i>', 'javascript:void(0);', ['class' => 'megamenu_toggle btn btn-danger']) ?>
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">General Settings</h6>
                    <ul class="setting-list list-unstyled mb-0">
                        <li>
                            <?= Html::label(Html::checkbox('', false), '', ['class' => 'switch']) ?>
                            <span>Anyone follow me</span>
                        </li>
                        <li>
                            <?= Html::label(Html::checkbox('', true), '', ['class' => 'switch']) ?>
                            <span>Email Redirect</span>
                        </li>
                        <li>
                            <?= Html::label(Html::checkbox('', true), '', ['class' => 'switch']) ?>
                            <span>Notifications</span>
                        </li>
                        <li>
                            <?= Html::label(Html::checkbox('', false), '', ['class' => 'switch']) ?>
                            <span>Auto Updates</span>
                        </li>
                        <li>
                            <?= Html::label(Html::checkbox('', true), '', ['class' => 'switch']) ?>
                            <span>Offline</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">Quick Link</h6>
                    <ul class="guick_link">
                        <li><?= Html::a('Home', '#', ['title' => '']) ?></li>
                        <li><?= Html::a('About Us', '#', ['title' => '']) ?></li>
                        <li><?= Html::a('FAQs', '#', ['title' => '']) ?></li>
                        <li><?= Html::a('Privacy Policy', '#', ['title' => '']) ?></li>
                        <li><?= Html::a('Sitemap', '#', ['title' => '']) ?></li>
                        <li><?= Html::a('Contact Us', '#', ['title' => '']) ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">Contact Us</h6>
                    <?= Html::beginForm('', 'post') ?>
                        <div class="input-group mb-2">
                            <?= Html::input('text', 'name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name']) ?>
                        </div>
                        <div class="input-group mb-2">
                            <?= Html::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email']) ?>
                        </div>
                        <div class="input-group mb-2">
                            <?= Html::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => '2']) ?>
                        </div>
                        <?= Html::button('Submit', ['class' => 'btn btn-primary btn-round', 'type' => 'button']) ?>
                    <?= Html::endForm() ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="mega-card">
                    <h6 class="title">Image Gallery</h6>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?= Html::img('/theme-assets/images/image-gallery/7.jpg', ['class' => 'd-block w-100', 'alt' => 'First slide']) ?>
                            </div>
                            <div class="carousel-item">
                                <?= Html::img('/theme-assets/images/image-gallery/8.jpg', ['class' => 'd-block w-100', 'alt' => 'Second slide']) ?>
                            </div>
                            <div class="carousel-item">
                                <?= Html::img('/theme-assets/images/image-gallery/9.jpg', ['class' => 'd-block w-100', 'alt' => 'Third slide']) ?>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="card mt-4">
                <div class="header">
                    <h2>FAQs</h2>
                    <ul class="header-dropdown dropdown">
                        <li><?= Html::a('<i class="icon-frame"></i>', 'javascript:void(0);', ['class' => 'full-screen']) ?></li>
                        <li class="dropdown">
                            <?= Html::a('', 'javascript:void(0);', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']) ?>
                            <ul class="dropdown-menu">
                                <li><?= Html::a('Action', 'javascript:void(0);') ?></li>
                                <li><?= Html::a('Another Action', 'javascript:void(0);') ?></li>
                                <li><?= Html::a('Something else', 'javascript:void(0);') ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="accordion" id="accordion-faqs">
                        <div>
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-faqs" aria-expanded="true" aria-controls="collapseOne">
                                        Q: How to use SCSS variables to build custom color <span class="float-right badge badge-primary">23</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne-faqs" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faqs">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-faqs" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Four questions to ask about your DevOps strategy <span class="float-right badge badge-success">8</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo-faqs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faqs">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree-faqs" aria-expanded="false" aria-controls="collapseThree">
                                        Q: A comparison of microservices and functional programming concepts <span class="float-right badge badge-danger">13</span>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree-faqs" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faqs">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
