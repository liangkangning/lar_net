<?php \frontend\assets\ProductAsset::register($this); ?>
<div class="product_item container section">
    <div class="right_part ">
        <section class="top commom_left_right_padding">
            <?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>
            <?php $this->endContent()?>
        </section>
        <section class="p_detail_top">
            <div class="text_list col-sm-6 col-xs-12">
                <div class="title col-xs-12 commom_left_right_padding section_m"><h1 class="size2"><?=$item->title?></h1></div>
                <div class="shuxing hidden-xs">
                    <ul>
                        <li><p class="size4">Model number:<?=$item->bianhao?></p></li>
                        <li><p class="size4">Nominal voltage:<?=$item->dianya?>V</p></li>
                        <li><p class="size4">Nominal capacity:<?=$item->rongliang?>mAh</p></li>
                        <?php if (!empty($item->xinghao)):?>
                        <li><p class="size4">Battery cell:<?=$item->xinghao?></p></li>
                        <?php endif; ?>
                        <li><p class="size4">Dimension:<?=$item->chicun?></p></li>
                        <li><p class="size4">Application:<?=$item->lingyu?></p></li>
                    </ul>
                </div>
                <div class="inquire hidden-xs" id="more_bg">
                    <a href="/form/message.html" class="size4" target="_blank">Inquire on This Product</a>
                </div>
            </div>
            <div class="right-extra" >
                <!--产品开始-->
                <div class="swiper-container visible-xs">
                    <div class="swiper-wrapper">
                        <?php foreach ($item->imagesUrl as $key=>$value): ?>
                            <div class="swiper-slide"> <img class="rsImg" src="<?=$value ?>" alt="" /></div>
                        <?php endforeach; ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="pc_img hidden-xs">
                    <div id="preview" class="spec-preview"> <span class="jqzoom"><img jqimg="<?=$item->imagesUrl[0]?>" src="<?=$item->imagesUrl[0]?>" /></span> </div>
                    <!--缩图开始-->
                    <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
                        <div class="items">
                            <ul>
                                <?php foreach ($item->imagesUrl as $key=>$value): ?>
                                    <li><img alt="" bimg="<?=$value?>" src="<?=$value?>" onmousemove="preview(this);"></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!--缩图结束-->
                </div>
                <div class="pic col-sm-6 col-xs-6">
                    <div class="img">
                    </div>
                </div>
                <div class="list_img"><img src="" alt=""></div>
            </div>
        </section>
         <section class="p_detail_main section40 " >
             <div class="p_detail commom_left_right_padding">
                 <div class="title"><h2 class="size2">Product Detail</h2></div>
                 <div class="p size4">
                     <?=$item->content?>
                 </div>
             </div>
             <section class="section section_m">
                 <?php $this->beginContent('@app/views/layouts/public/send_email.php') ?>
                 <?php $this->endContent()?>
             </section>
             <section class="section  commom_left_right_padding section_m">
                 <?php $this->beginContent('@app/views/layouts/public/category_list.php') ?>
                 <?php $this->endContent()?>
             </section>
             <section class="section hidden-xs ">
                 <?php $this->beginContent('@app/views/layouts/public/productPage_news_tuijian.php') ?>
                 <?php $this->endContent()?>
             </section>
         </section>
    </div>
    <div class="left_part hidden-xs col-sm-3 ">
      <?php $this->beginContent("@app/views/layouts/public/product_right_part.php") ?>
       <?php $this->endContent() ?>
        <div class="you_like_end"></div>
    </div>

    <div class="you_like section20 visible-xs col-xs-12">

        <div class="title common_left_padding"><h2 class="size2">You May Like</h2></div>

        <div class="list">

            <ul>

                <?php foreach (Yii::$app->params['product_list'] as $key=>$value): ?>

                    <li class="goods_detail margin-bottom-10 col-xs-6 <?php echo $key>=2?'hidden-xs':'';?>">
                        <div class="item">
                            <div class="img"><a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"></a></div>
                            <div class="text"><a href="<?=$value->url?>" title="<?=$value->title?>"><?=$value->title?></a></div>
                        </div>
                    </li>

                <?php endforeach;?>

            </ul>

        </div>

    </div>
</div>
<script type="application/ld+json">
{
"@context": "http://www.schema.org",
"@type": "Product",
"name": "<?=$item->title?>",
"image": "<?= 'https://www.large.net'.$item->imageUrl?>",
"description": "Product:<?=$item->title?>;Battery cell:<?=$item->xinghao?>;Nominal voltage:<?=$item->dianya?>V;Nominal capacity:<?=$item->rongliang?>mAh;Dimension:<?=$item->chicun?>;Application:<?=$item->lingyu?>;"
 }
</script>
<?php $this->beginBlock('test') ?>
    $(function(){
  var emial_top=$(".common_category_list").offset().top -180;

    $(window).scroll(function(){
        
        if(emial_top<$(window).scrollTop())
        {
            $(".common_email_all").addClass('fix_email_top')
            $(".online").addClass('none')
        }
        if($(".common_email_all").offset().top<emial_top)
        {
            $(".common_email_all").removeClass('fix_email_top')
            $(".online").removeClass('none')
        }
    })
    })
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>