<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="auth-main particles_js">
        <div class="auth_div vivify popIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="#"><img src="/theme-assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Osam</a>                                                
            </div>
            <div class="card page-400">
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
                <div class="header">
                    <p class="lead">
                    	<span class="number left"><?= $exception->statusCode ?> </span>
                    	<span class="text">Oops! <br/>
                    	<?= nl2br(Html::encode($exception->getMessage())) ?></span>
                    </p>                    
                </div>
                <div class="body">
                    <p>The page you were looking for could not be found, please <a href="javascript:void(0);">contact us</a> to report this issue.</p>
                    <div class="margin-top-30">
                        <a href="javascript:history.go(-1)" class="btn btn-round btn-default btn-block"><i class="fa fa-arrow-left"></i> <span>Go Back</span></a>
                        <a href="index.html" class="btn btn-round btn-primary btn-block"><i class="fa fa-home"></i> <span>Home</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>