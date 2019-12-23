<div class="news_item product_item  container section">
    <div class="right_part col-xs-12 col-sm-9">
        <section class="top commom_left_right_padding">
<?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>
<?php $this->endContent()?>
        </section>
        <section class="zhuti commom_left_right_padding">
            <div class="banner_img hidden-xs">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('news_detail') as $key=>$value):?>
                    <a href="<?=$value->url?>">   <img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"> </a>
                <?php endforeach; ?>
            </div>
            <div class="title"><h1 class="size2"><?=$data['detail']['title']?></h1></div>
            <div class="time"><p class="size4"><?=\common\helpers\Html::time_en($data['detail']['update_time'])?>&nbsp;&nbsp; Pageview：<?=$data['detail']['click']?></p></div>
            <div class="fengxian">
                <div class="sharethis-inline-share-buttons"></div>
            </div>
            <div class="content size4">
            <?= $data['detail']['content']?>
            </div>
        </section>
        <section class="next_one section40 commom_left_right_padding section_m">
            <ul>
                <li class="col-xs-12 col-sm-12 size4">
                    <span class="col-xs-12">Prev Article：</span>
                    <a class="commom_a col-xs-12" href="<?=$data['prev_article']['url']?>"><?=$data['prev_article']['title']?></a>
                </li>
                <li class="col-xs-12 col-sm-12 size4">
                    <span class="col-xs-12">Next Article：</span>
                    <a class="commom_a col-xs-12" href="<?=$data['next_article']['url']?>"><?=$data['next_article']['title']?></a>
                </li>
            </ul>
        </section>
        <section class="section hidden-xs">
         <?php $this->beginContent("@app/views/layouts/public/category_list.php"); ?>
        <?php $this->endContent(); ?>
        </section>
        <section class="section section_m">
            <?php $this->beginContent("@app/views/layouts/public/solutions_news_detail.php"); ?>
            <?php $this->endContent(); ?>
        </section>
        <section class="section hidden-xs">
            <?php $this->beginContent("@app/views/layouts/public/newsPage_news_tuijian.php"); ?>
            <?php $this->endContent(); ?>
        </section>
    </div>
    <div class="left_part hidden-xs col-sm-3">
        <?php $this->beginContent("@app/views/layouts/public/product_right_part.php") ?>
        <?php $this->endContent() ?>
        
        <div class="Knowledge section20">
            <div class="title"><h2>Hottest Battery Knowledge</h2></div>
            <div class="list">
                <ul>
                    <?php foreach (Yii::$app->params['HottestBattery'] as $key=>$value) :?>
                    <li class="col-xs-12 col-sm-12">
                        <div class="item"><span></span><a class="commom_a size5" href="<?=$value->url?>" title="<?=$value->title?>"><?=$value->title?></a></div>
                    </li>
                    <?php  endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="Knowledge section20">
            <div class="title"><h2>Latest Battery Knowledge</h2></div>
            <div class="list">
                <ul>
                    <?php foreach (Yii::$app->params['LatestBattery'] as $key=>$value) :?>
                        <li class="col-xs-12 col-sm-12">
                            <div class="item"><span></span><a class="commom_a size5" href="<?=$value->url?>" title="<?=$value->title?>"><?=$value->title?></a></div>
                        </li>
                    <?php  endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c344a1f093e83001145111b&product=inline-share-buttons' async='async'></script>
