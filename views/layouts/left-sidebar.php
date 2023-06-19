<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="<?= Url::home();?>">
            <?= Html::img('/theme-assets/images/icon.svg', ['class' => 'img-fluid logo', 'alt' => 'Yahiya Footwear Logo']) ?>
            <span>Yahiya Footwear</span>
        </a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right">
            <i class="lnr lnr-menu fa fa-chevron-circle-left"></i>
        </button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <?= Html::img('/theme-assets/images/user.png', ['class' => 'user-photo rollInTop', 'alt' => 'User Profile Picture']) ?>
            </div>
            <div class="dropdown">
                <!-- <span>Welcome,</span> -->
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong>Shahnawaz Khan</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <?php //Html::a('<i class="icon-plus mr-1"></i> Create New', '#', ['class' => 'btn btn-sm btn-block btn-primary btn-round mt-3', 'title' => '']) ?>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>
                <li>
                    <a href="#Dashboard" class="has-arrow">
                        <i class="icon-speedometer"></i>
                        <span>Menu</span>
                    </a>
                    <ul>
                        <li><a href="<?= Url::to(['products/list'])?>">Men</a></li>
                        <li><a href="<?= Url::to(['products/list'])?>">Women</a></li>
                        <li><a href="<?= Url::to(['products/list'])?>">Kids</a></li>
                    </ul>
                </li>
                <li class="header">App</li>
                <li>
                    <a href="<?= Url::to(['banners/index'])?>">
                        <i class="icon-envelope"></i>
                        <span>Banners</span>
                        <span class="badge badge-default float-right mr-0">12</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['brands/index'])?>">
                        <i class="icon-envelope"></i>
                        <span>Brands</span>
                        <span class="badge badge-default float-right mr-0">12</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['categories/index'])?>">
                        <i class="icon-bubbles"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Url::to(['products/index'])?>">
                        <i class="icon-calendar"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="header">Admin Pannel</li>
                <li>
                    <a href="#uiElements" class="has-arrow">
                        <i class="icon-diamond"></i>
                        <span>Components</span>
                    </a>
                    <ul>
                        <li><a href="ui-helper-class.html">Helper Classes</a></li>
                        <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-icons.html">Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" class="has-arrow">
                        <i class="icon-pencil"></i>
                        <span>Forms</span>
                    </a>
                    <ul>
                        <li><a href="forms-basic.html">Basic Elements</a></li>
                        <li><a href="forms-advanced.html">Advanced Elements</a></li>
                        <li><a href="forms-validation.html">Form Validation</a></li>
                        <li><a href="forms-wizard.html">Form Wizard</a></li>
                        <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Tables" class="has-arrow">
                        <i class="icon-layers"></i>
                        <span>Tables</span>
                    </a>
                    <ul>
                        <li><a href="table-normal.html">Normal Tables</a></li>
                        <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                      
                    </ul>
                </li>
                <li>
                    <a href="#charts" class="has-arrow">
                        <i class="icon-pie-chart"></i>
                        <span>Charts</span>
                    </a>
                    <ul>
                        <li><a href="chart-c3.html">C3 Charts</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                    </ul>
                </li>
                <li class="header">Extra</li>
                <li><a href="widgets.html"><i class="icon-puzzle"></i><span>Widgets</span></a></li>
                <li>
                    <a href="#Pages" class="has-arrow">
                        <i class="icon-docs"></i>
                        <span>Pages</span>
                    </a>
                    <ul>
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Maps" class="has-arrow">
                        <i class="icon-map"></i>
                        <span>Maps</span>
                    </a>
                    <ul>
                        <li><a href="map-jvectormap.html">jVector Map</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>