<div class="header_top">
<header>
    <div class="container">
        <div class="logo_nav">
        <div class="col-xs-6 col-sm-6  p_l">
            <div class="logo">
                <div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/images/logo.png')?>" title="Custom Lithium ion Battery Pack" alt="Custom Lithium ion Battery Pack"/></a></div>
            </div>
            <div class="text hidden-xs size4">Custom Lithium ion Battery Pack</div>
        </div>
        <div class="col-xs-6 visible-xs">
            <div class="nav_button one" data="0">
                <span class="fa bars"><img src="<?=Yii::getAlias('@web/static/images/top_nav_list1.png')?>" alt=""></span>
                <span class="fa close"><img src="<?=Yii::getAlias('@web/static/images/top_nav_list2.png')?>" alt=""></span>
            </div>
        </div>
        </div>

        <div class="col-xs-12 col-sm-6 p_r">
            <div class="search">
                <div class="form">
                    <form id="search_form" method=get"" action="/search/" name="form">
                        <div class="top"><div class="input-group">
                                <input class="input" type="text" id="keywordInput" name="keyword" placeholder="Search">
                                <input type="submit"  class="submit" value="" >
                            </div></div>
                    </form>
                </div>
            </div>
            <div class="lag hidden-xs">
                <div class="bottom">
                    <div class="t1">
                  <span>
                        <a href="mailto:info@large.net" class="size3">info@large.net</a></span>
                    </div>
                    <div class="t2">
                        <div class="dropdown">
                            <div class="ico"><img src="<?=Yii::getAlias('@web/static/images/global.png')?>" alt=""></div>
                            <a id="dLabel" data-target="#" href="/">
                                English
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="https://de.large.net">Deutsche</a></li>
                                <li><a href="https://jp.large.net">日本語</a></li>
                                <li><a href="http://www.juda.cn">简体中文</a></li>
                                <span class="menu-arrow"> <em></em> </span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="nav_bar" class="container-full">

    <div class="content">
        <nav>
            <div class="head-v3">
                <div class="navigation-up">
                    <div class="container">
                        <div class="navigation-v3">
                            <ul>
                                <li class="nav-up-selected-inpage" _t_nav="home">
                                    <div class="item">
                                    <a class="common_left_padding size4" href="/">Home</a>
                                    </div>
                                </li>
                                <?php foreach (Yii::$app->params['tree_list'] as $key=>$value):?>
                                    <li class="" _t_nav="<?=$value['name']?>">
                                        <div class="item" onclick="nav_click(this)">
                                        <a class="common_left_padding size4" style="<?php echo count($value->nextNav)?'':'width:100%'; ?>" href="<?= empty($value['url'])?\common\helpers\UrlHelp::Tohmtl($value['name']):$value['url']?>"><?=$value['title']?></a>
                                        <div class="down visible-xs <?php echo count($value->nextNav)?'':'hidden-xs'; ?>">
                                            <span class="fa chevron-down"><img src="<?=Yii::getAlias('@web/static/images/nav_list1.png')?>" alt=""></span>
                                            <span class="fa chevron-up"><img src="<?=Yii::getAlias('@web/static/images/nav_list2.png')?>" alt=""></span>

                                        </div>

                                        </div>
                                        <dl class="visible-xs">
                                            <?php foreach ($value->nextNav as $k=>$v):?>
                                                <dd class="col-xs-12">
                                                    <div class="item">
                                                        <a href="<?= empty($v['url'])?\common\helpers\UrlHelp::Tohmtl($v['name']):$v['url']?>" class="size4"><?=$v['title']?></a>
                                                    </div>
                                                </dd>
                                            <?php endforeach; ?>
                                        </dl>
                                    </li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php if (Yii::$app->controller->id=='product'): ?>
                        <?php $this->beginContent("@app/views/layouts/public/send_email_left.php") ?>
                        <?php $this->endContent() ?>
                        <?php endif;?>
                    </div>
                </div>
                <div class="navigation-down hidden-xs">
                    <?php foreach (Yii::$app->params['tree_list'] as $key=>$value):?>
                        <?php if (count($value->nextNav)>0):?>
                            <div id="<?=$value['name']?>" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="<?=$value['name']?>">
                                <div class="container navigation-down-inner">
                                    <div class="hidden-xs part_top <?= $key<2?'col-sm-3':'col-sm-2 '?>">
                                        <a href="<?= empty($value['url'])?\common\helpers\UrlHelp::Tohmtl($value['name']):$value['url']?>" class="size2"><?=$value['title']?></a>
                                    </div>
                                    <?php foreach ($value->nextNav as $k=>$v):?>
                                        <?php if ($k%4==0): ?>
                                            <div class="col-xs-12 col-sm-3">
                                        <?php endif; ?>
                                        <dl>
                                            <dd>
                                                <a href="<?= empty($v['url'])?\common\helpers\UrlHelp::Tohmtl($v['name']):$v['url']?>"><?=$v['title']?></a>
                                            </dd>
                                        </dl>
                                        <?php if ($k%4==3||($k+1)==count($value->nextNav)): ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php if ($value['name']=='news'): ?>
                                    <div class="hidden-xs col-sm-7 ">
                                        <div class="col-sm-5 part_top"><a href="javascript:void(0)" class="size2">Battery Guide</a></div>
                                        <div class="col-sm-7">
                                            <div class="hidden-xs col-sm-12 ">
                                                <a href="/best-18650-lithium-battery-pack/" target="_blank" class="size4 col-sm-12">Best 18650 Lithium Battery Pack</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/cylindrical-lithium-ion-battery/" target="_blank" class="size4 col-sm-12">Cylindrical Lithium Ion Battery</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/lithium-ion-battery-guide/" target="_blank" class="size4 col-sm-12">Best Lithium Ion Battery Guide</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/liPo-battery-guide/" target="_blank" class="size4 col-sm-12">Best LiPo Battery Guide</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/lifepo4-battery-guide/" target="_blank" class="size4 col-sm-12">Best Lifepo4 Battery Guide</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/12v-lithium-battery/" target="_blank" class="size4 col-sm-12">12V Lithium Battery Guide</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/48v-lithium-battery-guide/" target="_blank" class="size4 col-sm-12">48V Lithium Ion Battery</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/connecting-batteries-in-parallel-and-series/" target="_blank" class="size4 col-sm-12">Connecting Lithium Batteries In Parallel And Series</a>
                                            </div>
                                            <div class="hidden-xs col-sm-12 section20">
                                                <a href="/best-26650-lithium-ion-battery/" target="_blank" class="size4 col-sm-12">The Best 26650 Lithium Ion Battery</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </nav>
    </div>
</section>
</div>