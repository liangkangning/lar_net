<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->registerJsFile('@web/assets/js/product.js',['depends'=>['frontend\assets\LayoutAsset']]);
$cat_nav=\common\models\Category::find()->where(['pid'=>54])->orWhere(['pid'=>61])->orderBy(['sort'=>SORT_ASC])->all();
$listUrl='/'.$this->params['action'].'/list-';
$listUrlL='/'.$this->params['action'].'/';
?>
<div class="category_index">
    <section>
        <div class="cat_banner commom_left_right_padding">
            <div class="img hidden-xs">
                <?php if(isset(Yii::$app->params['urlad'])):?>
                    <img src="<?=Yii::$app->params['urlad']?>"/>
                <?php else:?>
                    <img src="<?=Yii::$app->params['lanmu']->getImageUrl()?>"/>
                <?php endif;?>
            </div>
            <div class="text">
                <div class="container">
                    <div class="content ">
                        <div class="title"><h1 class="size1">Custom <?=Yii::$app->params['lanmu']['title']?>
                            </h1></div>
                        <div class="sub_title"><p class="size3">17 Years’Expertise in Custom Lithium-ion Battery Pack<br>
                                Maximum Reliability & Maximum Safety</p></div>
                        <div class="list hidden-xs">
                            <ul>
                                <li>
                                    <div class="item">
                                       <div class="img"><img src="<?=Yii::getAlias('@web/static/images/category_kouhao1.png')?>" alt=""></div>
                                        <div class="p"><p class="size4">Customized<br> R&D</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/category_kouhao2.png')?>" alt=""></div>
                                        <div class="p"><p class="size4">24-hour<br> Response</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/category_kouhao3.png')?>" alt=""></div>
                                        <div class="p"><p class="size4">72-hour <br> Solution</p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/category_kouhao4.png')?>" alt=""></div>
                                        <div class="p"><p class="size4">10-year<br> Maintenance</p></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div></div>
            </div>
        </div>
    </section>
    <section class="hidden-xs">
    <?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>
    <?php $this->endContent() ?>
    </section>
    <section class="container ">
        <div class="product_nav_list">
            <ul>
                <?php foreach ($cat_nav as $key=>$value):?>
                    <li>
                        <div class="item <?= $value->name==Yii::$app->params['lanmu']['name']?'choose':'' ?>">
                            <a href="/<?=$value->name?>/" class="size4"><?=$value->title?></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if (count($this->params['choose'])>0): ?>
        <div class="filter hidden-xs">
            <div class="container">
                <div class="filter_sort_head">
                    <button class="filter-sort__head-title" aria-expanded="false">
                        <span class="title-text size4">Advanced Search</span>
                    </button>
                    <div class="list">
                        <ul>
                            <?php foreach ($this->params['choose'] as $key=>$value): ?>
                                <?php $chooseIdArray= $this->params['chooseIdArray']?>
                                <li>
                                    <div class="item">
                                        <sapn class="size4">  <?=$value['attr']['name']?>: <?=$value['name']?></sapn>
                                        <a href="<?=\common\helpers\UrlHelp::ProductChooseAttr($this->params['action'],$chooseIdArray,$key,$this->params['order'])?>" rel="nofollow"><span></span></a>
                                    </div>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="fiter down commom_left_right_padding visible-xs">
            <div class="left col-xs-9"><h2><p ><?=Yii::$app->params['lanmu']['title']?> <?php foreach ($this->params['choose'] as $key=>$value): ?><?php $chooseIdArray= $this->params['chooseIdArray']?><?=$value['name']?> <?php endforeach;?></p></h2>
            </div>
            <div class="right col-xs3">
                <p>
                Filter
                <span class="fa chevron-down">
                    <img src="/static/images/nav_list4.png" alt="">
                </span>
                <span class="fa chevron-up">
                    <img src="/static/images/nav_list2.png" alt="">
                </span></p>
            </div>
        </div>
        <div class="category_nav_list commom_left_right_padding">
            <div class="container">
                <div class="top visible-xs">
                    <?php if(!empty($this->params['choose'])):?>
                        <div class="clearAll size3">
                    <?php if ($this->params['order']>0):?>
                        <a href="javascript:location.href='/<?=$this->params['action']?>/list-o<?=$this->params['order']?>.html';" rel="nofollow">Clear All</a>
                    <?php else:?>
                        <a href="javascript:location.href='/<?=$this->params['action']?>/';" rel="nofollow">Clear All</a>
                    <?php endif; ?>
              </div>
                    <?php endif;?>
                <div class="phone_title section_m">
                    <div class="title size1">Categories</div>
                    <h2 class="size3"><?=Yii::$app->params['lanmu']['title']?></h2>
                </div>
                 <?php if(!empty($this->params['choose'])):?>
                     <div class="phone_title section_m">
                         <div class="title size1">Advanced Search</div>
                         <div class="list">
                             <ul>
                                 <?php foreach ($this->params['choose'] as $key=>$value): ?>
                                     <?php $chooseIdArray= $this->params['chooseIdArray']?>
                                     <li>
                                         <div class="item">
                                             <sapn><?=$value['name']?></sapn>
                                             <a href="<?=\common\helpers\UrlHelp::ProductChooseAttr($this->params['action'],$chooseIdArray,$key,$this->params['order'])?>" rel="nofollow"><span></span></a>
                                         </div>
                                     </li>
                                 <?php endforeach;?>
                             </ul>
                         </div>
                     </div>
                 <?php endif;?>
                </div>
                <section class="section_m bottom">
                 <div class="title size1 visible-xs">Filters</div>
                <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
                    <div class="content">
                        <div class="left col-xs-12">
                           <b class="size4"> <?=$value['attr']?></b>
                            <div class="down visible-xs list">
                                <span class="fa chevron-down">
                                    <img src="/static/images/nav_list1.png" alt="">
                                </span>
                                <span class="fa chevron-up">
                                    <img src="/static/images/nav_list2.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="right">
                            <ul>
                                <?php foreach ($value['values'] as $k=>$v): ?>
                                    <li class="col-xs-12"><div class="item"><a href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id'],$this->params['order']) ?>" class="size4"><?=$v['name']?>
                                                <span class="fa fa-circle-o size4 visible-xs"></span></a></div></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach;?>
                </section>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="common_product_list">
            <div class="container">
                <div class="title size1 hidden-xs"><h2><?=Yii::$app->params['lanmu']['title']?> <?php foreach ($this->params['choose'] as $key=>$value): ?><?php $chooseIdArray= $this->params['chooseIdArray']?><?=$value['name']?> <?php endforeach;?></h2>
                </div>
                <ul>
                    <?=\yii\widgets\ListView::widget([
                        'dataProvider' => Yii::$app->params['productProvider'],
                        'itemView' => '_list',
                        'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                        'options' => [
                            'tag' => 'div',
                        ],
                        'itemOptions' => [
                            'tag' => false,
                        ],
                    ]);
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="section30 container ">
            <div class="cat_conntent">
                <div class="title"><h2 class="size1"><?=Yii::$app->params['lanmu']['title']?> Manufacturer
                    </h2></div>
                <div class="p size4">
                    <?=Yii::$app->params['lanmu']['content']?>
                </div>
                <div class="anchor hidden-xs">
                    <ul>
                        <?php foreach (Yii::$app->params['anchor'] as $key=>$value):?>
                            <li>
                                <div class="item"><a href="<?=$value->url?>" class="size5"><?=$value->name?></a> <?= $key==count(Yii::$app->params['anchor'])-1?"":"<span>|</span>"?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
    </section>
    <section class="section hidden-xs">
    <?php $this->beginContent('@app/views/layouts/public/ad.php')?><?php $this->endContent()?>
    </section>
<section class="section hidden-xs">
    <div class="container">
    <?php $this->beginContent('@app/views/layouts/public/productPage_news_tuijian.php') ?><?php $this->endContent()?>
    </div>
</section>
 <div class="section hidden-xs">
<?php $this->beginContent('@app/views/layouts/public/solutions.php') ?><?php $this->endContent()?>
</div>
    <div class="section hidden-xs">
        <?php $this->beginContent('@app/views/layouts/public/whyLarge.php') ?><?php $this->endContent()?>
    </div>
<div class="section hidden-xs">
    <?php $this->beginContent('@app/views/layouts/public/howToCustomize.php') ?><?php $this->endContent()?>
</div>
</div>