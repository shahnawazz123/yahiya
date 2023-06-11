<?php
use yii\web\View;
use app\assets\ThemeAsset;
use app\widgets\Notification;
use yii\helpers\Html;
use yii\helpers\Url;
ThemeAsset::register($this);

$this->title = 'Yahiya | Home';
$this->registerMetaTag(['charset' => 'utf-8']);
$this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge, chrome=1']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Yahiya']);
$this->registerMetaTag(['name' => 'author', 'content' => 'Yahiya, design by: shahnawazz123@gmail.com']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '/theme-assets/images/icon.svg']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="application/javascript">
        var baseUrl = '<?php echo Url::base() . '/index.php?r='; ?>';
        var _csrf = '<?php echo Yii::$app->request->getCsrfToken() ?>';
    </script>
</head>
<body class="theme-blush">
<?php $this->beginBody() ?>
  <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><?= Html::img('/theme-assets/images/icon.svg', ['width' => 40, 'height' => 40, 'alt' => 'Yahiya']) ?></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Theme Setting -->
    <div class="themesetting">
        <?= Html::a('<i class="icon-magic-wand"></i>', '#', ['class' => 'theme_btn']) ?>
        <ul class="choose-skin list-unstyled mb-0">
            <li data-theme="green"><div class="green"></div></li>
            <li data-theme="orange"><div class="orange"></div></li>
            <li data-theme="blush" class="active"><div class="blush"></div></li>
            <li data-theme="cyan"><div class="cyan"></div></li>
        </ul>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <div id="wrapper">
      <?= $this->render('navbar'); ?>
      <?= $this->render('megamenu'); ?>
      <?= $this->render('right-sidebar'); ?>
      <?= $this->render('left-sidebar'); ?>
    </div>

<main id="main-content">
        <?= Notification::widget() ?>
        <?= $content ?>
</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
