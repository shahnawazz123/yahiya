<?php
use yii\helpers\Html;

?>

<div id="rightbar" class="rightbar">
    <div class="slim_scroll">
        <div class="chat_detail vivify fadeIn delay-100">
            <?= Html::a('<i class="icon-control-rewind mr-1"></i> Back', '#', ['class' => 'btn btn-sm btn-block btn-primary btn-round mb-4 back_btn', 'title' => '']) ?>
            <ul class="chat-widget clearfix">
                <li class="left float-left">
                    <?= Html::img('../assets/images/xs/avatar2.jpg', ['class' => 'rounded', 'alt' => '']) ?>
                    <div class="chat-info">       
                        <span class="message">Hello, John<br>What is the update on Project X?</span>
                    </div>
                </li>
                <li class="right">
                    <?= Html::img('../assets/images/xs/avatar1.jpg', ['class' => 'rounded', 'alt' => '']) ?>
                    <div class="chat-info">
                        <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                    </div>
                </li>
                <li class="left float-left">
                    <?= Html::img('../assets/images/xs/avatar2.jpg', ['class' => 'rounded', 'alt' => '']) ?>
                    <div class="chat-info">
                        <span class="message">That's great. Will catch you in evening.</span>
                    </div>
                </li>
                <li class="right">
                    <?= Html::img('../assets/images/xs/avatar1.jpg', ['class' => 'rounded', 'alt' => '']) ?>
                    <div class="chat-info">
                        <span class="message">Sure we'll have a blast today.</span>
                    </div>
                </li>
            </ul>
            <div class="input-group p-t-15">
                <?= Html::textarea('text', null, ['rows' => '3', 'class' => 'form-control', 'placeholder' => 'Enter text here...']) ?>
            </div>
        </div>
        <div class="chat_list">
            <form>
                <div class="input-group m-b-20">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                    </div>
                    <?= Html::input('text', null, null, ['class' => 'form-control', 'placeholder' => 'Search...']) ?>
                </div>
            </form>
            <ul class="right_chat list-unstyled mb-0">
                <li class="online">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar4.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Louis Henry</span>
                                <span class="message">Just now</span>
                                <span class="badge badge-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
                <li class="online">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar5.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Debra Stewart</span>
                                <span class="message">38min ago</span>
                                <span class="badge badge

-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
                <li class="offline">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar2.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Lisa Garett</span>
                                <span class="message">2hr ago</span>
                                <span class="badge badge-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
                <li class="offline">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar1.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Folisise Chosielie</span>
                                <span class="message">2hr ago</span>
                                <span class="badge badge-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
                <li class="online">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar3.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Marshall Nichols</span>
                                <span class="message">1day ago</span>
                                <span class="badge badge-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
                <li class="online">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar5.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Debra Stewart</span>
                                <span class="message">38min ago</span>
                                <span class="badge badge-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
                <li class="offline">
                    <a href="javascript:void(0);">
                        <div class="media">
                            <?= Html::img('../assets/images/xs/avatar2.jpg', ['class' => 'media-object', 'alt' => '']) ?>
                            <div class="media-body">
                                <span class="name">Lisa Garett</span>
                                <span class="message">2hr ago</span>
                                <span class="badge badge-outline status"></span>
                            </div>
                        </div>
                    </a>                            
                </li>
            </ul>
        </div>
    </div>
</div>