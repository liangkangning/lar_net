<?php
use yii\helpers\Html;
use yii\helpers\Url;
$pid=\common\models\Category::find()->where(['name'=>'case'])->one();
$id=\common\models\Category::find()->where(['pid'=>$pid->id])->asArray()->all();
$ids=\common\helpers\ArrayHelper::getColumn($id,'id');
$list= \common\models\Article::find()->select(['id','category_id','title','cover','description','create_time'])
    ->where(['category_id'=>$ids])->andWhere(['like','np','h'])
    ->andWhere(['status'=>1])->orderBy('sort desc')->limit(3)->all();
?>
<section>
    <div class="solutions_common">
            <div class="title"><h2 class="size2">Custom Solutions</h2></div>
            <div class="list">
                <ul class="row">
                    <?php foreach ($list as $key=>$value):?>
                        <li class="col-xs-12 col-sm-4 ">
                            <div class="item">
                                <div class="img"><a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" title="<?=$value->title?>"></a></div>
                                <div class="text <?=$key==2?'end':''?>"><a href="<?=$value->url?>"><?=$value->title?></a></div>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
    </div>
</section>