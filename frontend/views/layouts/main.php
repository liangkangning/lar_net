<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
\frontend\assets\IeAsset::register($this);
$this->registerCssFile('@web/assets/css/style.css',['depends'=>['frontend\assets\LayoutAsset']]);
$url= Yii::$app->request->hostInfo.Yii::$app->request->getUrl();
$url=str_replace("http","https",$url);
$canonical = 'https://www.large.net'.Yii::$app->request->getUrl();
//echo $url;
$adaptation=\common\models\LanguageAdaptation::find()->where(['en'=>$url])->one();
//var_dump($adaptation);
$de_url = 'https://de.large.net'.Yii::$app->request->getUrl();
?>
    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="en-us" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="en-us" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en-us">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-M2TCXV4');</script>
        <!-- End Google Tag Manager -->
        
        <meta charset="utf-8" />
        <title><?=$this->params['meta_title']?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="<?=$this->params['keywords']?>">
        <meta  name="description"  content="<?=$this->params['description']?>"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <link rel="stylesheet" href="/assets/css/swiper.min.css">
        <script src="/assets/js/swiper.min.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <?php $this->head() ?>
        <!-- END THEME LAYOUT STYLES -->
<!--        <link rel="canonical" href="--><?//=$canonical?><!--">-->
        <link rel="shortcut icon" href="/favicon.ico" />

        <link rel="alternate" hreflang="de" href="<?=$de_url?>"/>
        <link rel="alternate" hreflang="en" href="<?=$canonical?>"/>

        <?php  if (isset($adaptation)): ?>
        <link rel="alternate" hreflang="zh" href="<?=$adaptation->cn?>">
        <?php endif;?>
        <?php  if (isset(Yii::$app->params['previous_page'])): ?>
            <link rel="prev" href="<?=Yii::$app->params['previous_page']?>">
        <?php endif;?>
        <?php  if (isset(Yii::$app->params['next_page'])): ?>
            <link rel="next" href="<?=Yii::$app->params['next_page']?>">
        <?php endif;?>

        <?php  if (Yii::$app->request->get('id')=='8ku43mn'): ?>
            <link rel="canonical" href="https://www.large.net/best-18650-lithium-battery-pack/" />
        <?php endif;?>
        <?php  if (Yii::$app->request->get('id')=='8ju43n2'): ?>
            <link rel="canonical" href="https://www.large.net/cylindrical-lithium-ion-battery/" />
        <?php endif;?>


    </head>
    <!-- END HEAD -->
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2TCXV4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<!-- <div id="google_translate_element" class="hidden-xs"></div>-->
<!-- <script type="text/javascript">-->
<!--  function googleTranslateElementInit() {-->
<!--      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');-->
<!--     }-->
<!--  </script>-->

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <?php $this->beginContent('@app/views/layouts/public/header_old.php') ?>
     <?php $this->endContent() ?>
    <div class="zhuti">
    <?=$content?>
    <!-- BEGIN FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/footer.php') ?>
    <?php $this->endContent() ?>
    </div>
    <!-- END FOOTER -->
    <?php \frontend\assets\LayoutAsset::register($this); ?>
    <?php $this->endBody() ?>
    <div id="fix-r">
        <!--<span id="tel_span2"><i class="fa fa-skype" aria-hidden="true"></i>
      </span>-->
        <a class="left_message" href="/form/message.html"><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
        <a id="scrolltop" class="hidden-xs" href="#top" style="width: 45px; height: 45px; border-radius: 8px; color: white; line-height: 45px; text-align: center; background: gray;"><span><i class="fa fa-angle-up" aria-hidden="true"></i></span></a>
    </div>
  <?php
   $js=<<<JS
$("#search_form").submit(function(e){
  if ($("#keywordInput").val().length==0){
        alert("Keyword is required");
        return false;
  } 
});
JS;
$this->registerJs($js);
  ?>
    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            speed:300,
            autoplay : {
                delay:3000
            },


            // 如果需要分页器
            pagination: {
                el: '.swiper-pagination',
            },

            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // 如果需要滚动条
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>
    <script>
        $(".right_send .p1").click(function (e) {
            $(".right_send .p2").removeClass('none');
            $(".right_send .p1").addClass('none');
        })
        $("#cancel").click(function(){
            $(".right_send .p1").removeClass('none');
            $(".right_send .p2").addClass('none');
        })
        $(".right_send .p2 .close").click(function(){
            $(".right_send .p1").removeClass('none');
            $(".right_send .p2").addClass('none');
        })
        $(".right_send .p3 .close").click(function(){
            $(".right_send .p1").removeClass('none');
            $(".right_send .p2").addClass('none');
            $(".right_send .p3").addClass('none');
        })
        $(".right_send .p3 .done").click(function(){
            $(".right_send .p1").removeClass('none');
            $(".right_send .p2").addClass('none');
            $(".right_send .p3").addClass('none');
        })
        $("#send").click(function(){
             Name= $('#sendName').val();
             Email=$('#sendEmail').val();
             content=$('#sendContent').val();
            if(Email==""){
                $("#emaildesc").removeClass("none");
            }else {
                var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                if(!myreg.test(Email)){
                    $("#emaildesc").addClass("none");
                    $("#emailError").removeClass("none");
                    return ;
                }
            }
            if(content==""){
                $("#emailError").addClass("none");
                $("#contentdesc").removeClass("none");
            }

            if (Email=="" || content==""){
                return;
            }

        $.ajax({
            url:'/form/post-email.html',
            type:"POST",
            data:{
                "name":Name,
                "email":Email,
                "message":content,
                "url":window.location.href
            },
            success:function (data) {
                $(".right_send .p1").addClass('none');
                $(".right_send .p2").addClass('none');
                $(".right_send .p3").removeClass('none');
            }
        })
        })


        $("#attach").change(function(r){
            var file = $("#attach").val();
             console.log(file);
        })
    </script>

    </body>
    </html>
<?php $this->endPage() ?>