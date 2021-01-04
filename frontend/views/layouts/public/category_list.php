<div class="common_category_list section_m">
    <div class="title"><h2 class="size2">Hottest Categories</h2></div>
    <div class="img_nav hidden-xs">
        <ul>
            <?php foreach (\common\helpers\AdHelper::GetAd_list('HottestCategories') as $key=>$value):  ?>
            <li class="col-xs-12 col-sm-4">
                <div class="item">
                    <a class="hidden-xs" href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"></a>
                    <a class="visible-xs size4" href="<?=$value->url?>"><?=$value->title?></a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="anchor">
        <ul>
            <?php foreach (Yii::$app->params['anchor'] as $key=>$value):?>
                <li>
                    <div class="item"><a href="<?=$value->url?>" class="size5"><?=$value->name?></a> <?= $key==count(Yii::$app->params['anchor'])-1?"":"<span>|</span>"?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>