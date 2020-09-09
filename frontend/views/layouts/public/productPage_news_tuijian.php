<?php
$Hottest=\common\models\Article::find()->where(['in','category_id',[75,76]])->andWhere(['status'=>1])->orderBy('click desc')->limit('6')->all();
$Latest=\common\models\Article::find()->where(['in','category_id',[75,76]])->andWhere(['status'=>1])->orderBy('create_time desc')->limit('6')->all();
$Recommended=\common\models\Article::find()->where(['in','category_id',[75,76]])->andWhere(['status'=>1])->andWhere(['like','np','c'])->orderBy('create_time desc')->limit('6')->all();
?>
<div class="news_tuijian size4">
<div class="common_nav left">
    <ul>
        <li>
            <div class="item checked" data="list0">
                <div class="text"><b class="size3">Hottest Articles</b></div>
                <div class="ico">
                    <i></i>
                </div>
            </div>
        </li>
        <li>
            <div class="item" data="list1">
                <div class="text"><b class="size3">Latest Articles</b></div>
                <div class="ico">
                    <i></i>
                </div>
            </div>
        </li>
        <li>
            <div class="item" data="list2">
                <div class="text"><b class="size3">Recommended For You</b></div>
                <div class="ico">
                    <i></i>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="common_nav_list section20">
    <li class="list0">
        <div class="list">
            <ul>
                <?php foreach ($Hottest as $key=>$value) :?>
                    <li><div class="item">
                            <div class="text"><span></span><a class="hover_a" href="<?=$value->url?>"><?=$value->title?></a></div>
                        </div></li>
                <?php  endforeach; ?>
            </ul>
        </div>
    </li>
    <li class="list1 none">
        <div class="list">
            <ul>
                <?php foreach ($Latest as $key=>$value) :?>
                    <li><div class="item">
                            <div class="text"><span></span><a class="hover_a" href="<?=$value->url?>"><?=$value->title?></a></div>
                        </div></li>
                <?php  endforeach; ?>
            </ul>
        </div>
    </li>
    <li class="list2 none">
        <div class="list">
            <ul>
                <?php foreach ($Recommended as $key=>$value) :?>
                    <li><div class="item">
                            <div class="text"><span></span><a class="hover_a" href="<?=$value->url?>"><?=$value->title?></a></div>
                        </div></li>
                <?php  endforeach; ?>
            </ul>
        </div>
    </li>
</div>
</div>
