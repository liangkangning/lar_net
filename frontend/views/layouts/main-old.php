<?php







/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
\frontend\assets\IeAsset::register($this);
$this->registerCssFile('@web/assets/css/style.css',['depends'=>['frontend\assets\LayoutAsset']]);
?>

    <!DOCTYPE html>

    <!--[if IE 8]> <html lang="zh" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="zh" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="CN">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?=$this->params['meta_title']?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="<?=$this->params['keywords']?>">
        <meta  name="description"  content="<?=$this->params['description']?>"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <?php $this->head() ?>
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="/favicon.ico" />
    </head>

    <!-- END HEAD -->
    <body>
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->

    <?php $this->beginContent('@app/views/layouts/public/header_new.php') ?>
     <?php $this->endContent() ?>


    <!-- BEGIN FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/footer.php') ?>
    <?php $this->endContent() ?>
    <!-- END FOOTER -->
    <?php \frontend\assets\LayoutAsset::register($this); ?>
    <?php $this->endBody() ?>
    </body>
    </html>

<?php $this->endPage() ?>