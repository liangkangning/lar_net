<?php
use yii\bootstrap\ActiveForm;
use common\helpers\Html;
?>
<?php \frontend\assets\ProductAsset::register($this); ?>
<div class="callUs commom_left_right_padding">
    <section class="hidden-xs">
    <?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>
    <?php $this->endContent() ?>
    </section>
    <div class="container">
        <div class="col-xs-12 col-sm-6 left">
            <div class="title"><h1 class="size1">Contact Us</h1></div>
            <div class="sub_title size3">Dongguan Large Electronics Co., Ltd</div>
            <div class="text">
             <?=Yii::$app->params['lanmu']['content']?>
                <div class="img"><img src="<?=Yii::getAlias('@web/static/images/callUs.jpg')?>"/></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 right section_m">
            <div class="title size1">Message</div>
            <div class="text"><p>If you are interested in our products or want to join us, please contact us.</p></div>
            <?php $this->beginContent('@app/views/layouts/public/send_email_contactus.php') ?>
            <?php $this->endContent() ?>
        </div>
    </div>
</div>
<div class="padding_foot"></div>