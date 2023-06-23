<?php
use yii\helpers\Html;

?>

<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <?= Html::a(Html::img('/theme-assets/images/icon.svg', ['alt' => 'Osam Logo', 'class' => 'img-fluid logo']), ['index.html']) ?>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <?= Html::beginForm([''], 'get', ['id' => 'navbar-search', 'class' => 'navbar-form search-form']) ?>
                <?= Html::input('text', 'search', '', ['class' => 'form-control', 'placeholder' => 'Search here...']) ?>
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            <?= Html::endForm() ?>
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><?= Html::a('Social', ['page-social.html'], ['class' => 'social icon-menu', 'title' => 'News']) ?></li>
                    <li><?= Html::a('News', ['page-news.html'], ['class' => 'news icon-menu', 'title' => 'News']) ?></li>
                    <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="Mega Menu">Mega</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-handbag"></i>
                            <span class="notification-dot bg-green">4</span>
                        </a>
                        <ul class="dropdown-menu right_chat email vivify fadeIn">
                            <li class="header">You have 4 New cart</li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <?= Html::img('/images/products/item-1.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                                        <div class="media-body">
                                            <span class="name">James Wert <small class="float-right">Rs.999</small></span>
                                            <span class="message">Update GitHub</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <?= Html::img('/images/products/item-2.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie <small class="float-right">Rs.499</small></span>
                                            <span class="message">New Messages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <?= Html::img('/images/products/item-3.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                                        <div class="media-body">
                                            <span class="name">Louis Henry <small class="float-right">Rs.1499</small></span>
                                            <span class="message">Design bug fix</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media mb-0">
                                        <?= Html::img('/images/products/item-4.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                                        <div class="media-body">
                                            <span class="name">Debra Stewart <small class="float-right">Rs.1499</small></span>
                                            <span class="message">Fix Bug</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot bg-azura">4</span>
                        </a>
                        <ul class="dropdown-menu feeds_widget vivify fadeIn">
                            <li class="header">You have 4 New Notifications</li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-info">New User <small class="float-right text-muted">9:15 AM</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small class="float-right text-muted">9:17 AM</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><?= Html::a('', ['javascript:void(0);'], ['class' => 'right_toggle icon-menu', 'title' => 'Right Menu']) ?></li>
                    <li><?= Html::a('', ['page-login.html'], ['class' => 'icon-menu']) ?></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
