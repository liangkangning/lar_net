<?php
use yii\helpers\Html;
use yii\helpers\Url;
$pid=\common\models\Category::find()->where(['name'=>'case'])->one();
$id=\common\models\Category::find()->where(['pid'=>$pid->id])->asArray()->all();
$ids=\common\helpers\ArrayHelper::getColumn($id,'id');
$list= \common\models\Article::find()->select(['id','category_id','title','cover','description','create_time'])
    ->where(['category_id'=>$ids])->andWhere(['like','np','h'])
    ->andWhere(['status'=>1])->orderBy('sort desc')->limit(6)->all();
?>
<section>
    <div class="solutions_common">
        <div class="container">
            <div class="title"><h2 class="size1">Custom Solutions</h2><span class="more hidden-xs"><a class="size5" href="/case/">More</a></span></div>
            <div class="list">
                <ul class="row">
                    <?php foreach ($list as $key=>$value):?>
                    <li class="col-xs-12 col-sm-4 <?=$key>=2?'hidden-xs':''?> ">
                        <div class="item">
                            <div class="img"><a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" title="<?=$value->title?>"></a></div>
                            <div class="text <?=$key==2?'end':''?>"><a href="<?=$value->url?>" class="size4"><?=$value->title?></a></div>
                        </div>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>

        </div>
    </div>
    <a href="/case/" class="bottom_more visible-xs ">
        <span><img src="/static/images/more.png" alt=""></span>
        <div class="text border_top_line">More</div>
    </a>
</section>