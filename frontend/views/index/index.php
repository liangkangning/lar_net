<?php
use \yii\helpers\Html;
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\LayoutAsset']]);
?>
<div class="index">
		
    <section class="hidden-xs">
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('index_banner') as $key=>$value):?>
                    <li data-target="#myCarousel" data-slide-to="<?=$key?>" class="<?= $key==0?'active':''?>"></li>
                <?php endforeach; ?>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('index_banner') as $key=>$value):?>
                    <div class="item <?= $key==0?'active':''?>">
                        <a href="<?=$value->url?>">   <img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"> </a></div>
                <?php endforeach; ?>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel"
               data-slide="prev">
                <div>
                    <span>‹</span>
                </div>
            </a>
            <a class="carousel-control right" href="#myCarousel"
               data-slide="next">
                <div>
                    <span>›</span>
                </div>
            </a>
        </div>
</section>
    <section class="visible-xs">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('index_banner_moblie') as $key=>$value):?>
                <div class="swiper-slide"> <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a></div>
                <?php endforeach; ?>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
<section class="container">
    <div class="kouhao hidden-xs">
        <ul>
            <li class="col-xs-3 col-sm-3">
                <div class="item">
                    <div class="img"><img src="<?=Yii::getAlias('@web/static/images/kouhao1.png')?>" alt="Customized R&D" title="Customized R&D"></div>
                    <div class="text"><span><strong class="size4">Customized R&D</strong></span></div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3">
                <div class="item">
                    <div class="img"><img src="<?=Yii::getAlias('@web/static/images/kouhao2.png')?>" alt="24-hour Response" title="24-hour Response"></div>
                    <div class="text"><span><strong class="size4">24-hour Response</strong></span></div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3">
                <div class="item">
                    <div class="img"><img src="<?=Yii::getAlias('@web/static/images/kouhao3.png')?>" alt="provide solution within 72 hours" title=" 72-hour Solution"></div>
                    <div class="text"><span><strong class="size4"> 72-hour Solution</strong></span></div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3">
                <div class="item">
                    <div class="img"><img src="<?=Yii::getAlias('@web/static/images/kouhao4.png')?>" alt="10-year Maintenance" title="10-year Maintenance"></div>
                    <div class="text"><span><strong class="size4">10-year Maintenance</strong></span></div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="container section">
	<div class="product_list">
        <div class="left_category col-xs-12 col-sm-3">
            <ul>
                <li class="top hidden-xs"><p class="size4">Product Category</p></li>
                <li class="industrial category"><div class="item ">
                        <div class="title"><h2><a class="size4" href="/industrial-battery/">Industrial Battery</a></h2></div>
                        <div class="content hidden-xs">
                            <?php foreach (Yii::$app->params['industrialBettery_tree'] as $key=>$value):?>
                                <div class="cat">
                                    <a class="size4" href="/<?=$value->name?>/"><?=$value->title?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div></li>
                <li class="storage category"><div class="item ">
                        <div class="title"><h2><a class="size4" href="/lithium-power-battery/">Lithium Power Battery</a></h2></div>
                        <div class="content hidden-xs">
                            <?php foreach (Yii::$app->params['LithiumPowerBattery'] as $cat): ?>
                                <div class="cat">
                                    <a class="size4" href="<?=$cat->url?>"><?=$cat->title?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div></li>
                <li class="specail category"><div class="item ">
                        <div class="title"><h2><a class="size4" href="/special-battery/">Special Battery</a></h2></div>
                        <div class="content hidden-xs">
                            <?php foreach (Yii::$app->params['specialBattery_tree'] as $key=>$value):?>
                                <div class="cat">
                                    <a class="size4" href="/<?=$value->name?>/" title="<?=$value->title?>"><?=$value->title?></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div></li>

            </ul>
        </div>
        <div class="product_list_imgs col-xs-12 col-sm-9">

            <ul>

                <?php foreach (Yii::$app->params['product_list'] as $key=>$value):?>
                    <li class=" col-xs-6 col-sm-4 <?=$key>=2?'hidden-xs':''?> goods_detail">
                        <div class="item">
                            <div class="img"><a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" title="<?=$value->title?>" alt="<?=$value->title?>"/></a></div>
                            <div class="text"><a href="<?=$value->url?>" title="<?=$value->title?>" class="size4"><?=$value->title?></a></div>
                        </div>
                    </li>
                <?php endforeach;?>

            </ul>
            <a href="/industrial-battery/" class="bottom_more visible-xs">
                <span><img src="/static/images/more.png" alt=""></span>
                <div class="text">More</div>
            </a>
        </div>

	</div>
</section>
<div class="getiao visible-xs "></div>
 <div class="section section_m">
<?php $this->beginContent('@app/views/layouts/public/solutions.php')?>
<?php $this->endContent() ?>
 </div>
<section class="ad_common hidden-xs section">
    <?php $this->beginContent('@app/views/layouts/public/ad.php')?><?php $this->endContent()?>
</section>
    <section class="container">
        <div class="adv hidden-xs">
            <div class="title font-30" >
                <h1 class="size1">The World's Leading Manufacturer of Custom Lithium ion battery Pack</h1>
            </div>
            <div class="adv_dec">
                <p class="size4">
                    Large Power is a Chinese high-tech enterprise which dedicated to the R&D, manufacture and sales of rechargeable lithium ion battery packs. Large Power was founded in 2002, with its factory in Guangdong, China.
                </p>
                <p class="size4">
                    Since its establishment, Large Power is committed to serve global portable power bank, storage energy battery pack, power battery pack, backup battery pack and special usage battery users. During 17 years development, Large Power has become a world's leading supplier of lithium ion battery pack.
                </p>
            </div>
        </div>
        <div class="adv_list commom_left_right_padding">
            <div class="title visible-xs section_m"><h2 class="size1">Why Large Power</h2></div>
            <ul>
                <div class="row">
                <li class="col-xs-6 col-sm-6">
                    <div class="item">
                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/adv_list1.png')?>" alt=""></div>
                        <div class="title"><strong class="size3">17 Years’ Experience in Custom Solutions</strong></div>
                        <div class="text hidden-xs"><p class="size4">Since its foundation in 2002, Large Power has been dedicated to provide the best custom lithium ion battery pack for worldwide users. And it has accumulated rich experience in lithium ion battery field.</p></div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-6">
                    <div class="item">
                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/adv_list2.png')?>" alt=""></div>
                        <div class="title"><strong class="size3">Over 60 People’s in R&D Team</strong></div>
                        <div class="text hidden-xs"><p class="size4">Large Power’s technical center covers ID design, electronics, mechanism, software, electrochemistry, power source, workmanship, measurement, control, signal processing and so on.</p></div>
                    </div>
                </li>
                </div>
                <div class="row">
                <li class="col-xs-6 col-sm-6">
                    <div class="item">
                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/adv_list3.png')?>" alt=""></div>
                        <div class="title"><strong class="size3">Over 3000 Successful Cases</strong></div>
                        <div class="text hidden-xs"><p class="size4">Large Power’s custom lithium ion battery packs are widely used in medicine, finance, communication, security and protection, logistics, mining, photovoltaic and 3C consumer products.</p></div>
                    </div>
                </li>
                <li class="col-xs-6 col-sm-6">
                    <div class="item">
                        <div class="img"><img src="<?=Yii::getAlias('@web/static/images/adv_list4.png')?>" alt=""></div>
                        <div class="title"><strong class="size3">International Product Certifications</strong></div>
                        <div class="text hidden-xs"><p class="size4">Custom lithium ion battery of Large Power is in compliance with IEC61960, IEC62133, IEEE-1725, UL2054, UL1642 standard and other international certifications.</p></div>
                    </div>
                </li>
                </div>
            </ul>
        </div>
    </section>
    <section class="container section commom_left_right_padding">
      <div class="battery_institute">
           <div class="title section_m"><h2 class="size1">R&D Team</h2></div>
          <div class="description">
              <p class="size4">
                 <strong>Expert Team:</strong> include 9 professors and experts, 2 associate professors, 12 middle and senior title engineers, 2 of whom are from the national thousand talents program and 7 doctoral supervisors.<br>
                  <strong>Team of the research institute: </strong>there are over 60 people. They have expertise in industrial design, electronics, power supply, structure, technology, software, measurement, control, electrochemistry and other professional technical categories.<br>
                  <strong>Large Power has 103 patents, including 11 patents for invention, 42 for utility model, and 50 for appearance.</strong>
              </p>
          </div>
          <div class="list section40 section_m">
              <ul>
                  <div class="row">
                      <li class="col-xs-12 col-sm-4"><div class="item">
                              <div class="img"><img src="/static/images/yanfa_team_p1.png"></div>
                              <div class="text">
                                  <div class="name"><b class="size4">Xue Jiaxiang</b></div>
                                  <div class="p">
                                      <p class="size5">Expert of Central South University, doctoral advisor</p>
                                      <p class="size5"><strong>Research direction:</strong> photovoltaic grid-connected inverter and its distributed power generation system, digitize switching power supply and intelligent control.</p>
                                  </div>
                              </div>
                          </div></li>
                      <li class="col-xs-12 col-sm-4"><div class="item">
                              <div class="img"><img src="/static/images/yanfa_team_p2.png"></div>
                              <div class="text">
                                  <div class="name"><b class="size4">Zhou Gang</b></div>
                                  <div class="p">
                                      <p class="size5">Postdoctor of Central South University</p>
                                      <p class="size5"><strong>Research direction:</strong> high performance electrode material and lithium ion,explosion-proof, low temperature battery.</p>
                                  </div>
                              </div>
                          </div></li>

                      <li class="col-xs-12 col-sm-4"><div class="item">
                              <div class="img"><img src="/static/images/yanfa_team_p3.png"></div>
                              <div class="text">
                                  <div class="name"><b class="size4">Li Chengchao</b></div>
                                  <div class="p">
                                      <p class="size5">Distinguished professor of Guangdong University of Technology</p>
                                      <p class="size5"><strong>Research direction:</strong>the designed synthesis of new energy materials and research of energy storage</p>
                                  </div>
                              </div>
                          </div></li>
                  </div>
                  <div class="row hidden-xs">
                      <li class="col-xs-12 col-sm-4"><div class="item">
                              <div class="img"><img src="/static/images/yanfa_team_p10.png"></div>
                              <div class="text">
                                  <div class="name"><b class="size4">Yuan Wei</b></div>
                                  <div class="p">
                                      <p class="size5">Professor and doctor of mechanical and automotive engineering of SCUT</p>
                                      <p class="size5"><strong>Research direction:</strong> hydrogen and methanol fuel cells, lithium ion batteries and other issues.
                                      </p>
                                  </div>
                              </div>
                          </div></li>

                      <li class="col-xs-12 col-sm-4"><div class="item">
                              <div class="img"><img src="/static/images/yanfa_team_p5.png"></div>
                              <div class="text">
                                  <div class="name"><b class="size4">Ma Jianmin</b></div>
                                  <div class="p">
                                      <p class="size5">Doctor, vice professor</p>
                                      <p class="size5"><strong>Research direction:</strong> nanotechnology of Li/Na ion battery, capacitor and electro-catalysis; Organic anhydrous treatment project of intelligent power station and microorganism
                                      </p>
                                  </div>
                              </div>
                          </div></li>

                      <li class="col-xs-12 col-sm-4"><div class="item">
                              <div class="img"><img src="/static/images/yanfa_team_p6.png"></div>
                              <div class="text">
                                  <div class="name"><b class="size4">Li Chen</b></div>
                                  <div class="p">
                                      <p class="size5">Professor of Dongguan University of Technology</p>
                                      <p class="size5"><strong>Research direction:</strong>  lithium-ion battery materials, antibacterial agent, energy-saving luminescent material, lightweight materials of reactive extrusion and new rubber material
                                      </p>
                                  </div>
                              </div>
                          </div></li>
                  </div>
              </ul>
          </div>
      </div>
    </section>
    <div class="getiao"></div>
    <section class="section container section_m commom_left_right_padding">
      <div class="test_index">
          <div class="title size1"><h2 class="size1">Advanced Laboratory</h2></div>
          <div class="text hidden-xs"><p class="size4">Environmental Laboratory, Security Laboratory, Power Supply Laboratory, Ecology Laboratory, Aging Laboratory, Photovoltaic Energy Storage Laboratory</p></div>
          <div class="test_list">
              <ul>
                  <li class="col-xs-6 col-sm-4">
                      <div class="item">
                          <div class="img"><img src="/static/images/text_center1.jpg"></div>
                          <div class="text size5">Environment Laboratory</div>
                      </div>
                  </li>
                  <li class="col-xs-6 col-sm-4">
                      <div class="item">
                          <div class="img"><img src="/static/images/text_center2.jpg"></div>
                          <div class="text size5">Ecology Laboratory</div>
                      </div>
                  </li>
                  <li class="col-xs-6 col-sm-4">
                      <div class="item">
                          <div class="img"><img src="/static/images/text_center3.jpg"></div>
                          <div class="text size5">Power Supply Laboratory</div>
                      </div>
                  </li>
                  <li class="col-xs-6 col-sm-4">
                      <div class="item">
                          <div class="img"><img src="/static/images/text_center4.jpg"></div>
                          <div class="text size5">Electrical Performance Laboratory</div>
                      </div>
                  </li>
                  <li class="col-xs-6 col-sm-4">
                      <div class="item">
                          <div class="img"><img src="/static/images/text_center5.jpg"></div>
                          <div class="text size5">Security Laboratory</div>
                      </div>
                  </li>
                  <li class="col-xs-6 col-sm-4">
                      <div class="item">
                          <div class="img"><img src="/static/images/text_center6.jpg"></div>
                          <div class="text size5">Photovoltaic Energy Storage Laboratory</div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
    </section>
    <div class="getiao section_m"></div>
<section class="section container commom_left_right_padding section_m">
<div class="developed">
    <div class="title size1"><h2 class="size1">Developed System and Product Qualification</h2></div>
    <div class="text">
        <p class="size4"><strong>Enterprise certification: </strong>ISO9001, ISO14001, OHSAS18000, BSCI, MFI, Wal-Mart certification</p>
       
        <p class="size4"><strong>Product certification: </strong>ROHS, REACH, CB, UL, FCC, CE, CQC, UN38.3, CCC, BSMI, PSE, KC</p>
    </div>
</div>
</section>
  <section class="section30">
      <div class="zhengshu">
          <div class="container">
          <div class="img"><img src="<?=Yii::getAlias('@web/static/images/zhengshu.jpg')?>" alt=""></div>
          </div>
      </div>
  </section>
    <section class="section container commom_left_right_padding section_m">
        <div class="product_quality">
            <div class="title size1"><h2 class="size1">Product Quality and Security</h2></div>
            <div class="img"><img src="<?=Yii::getAlias('@web/static/images/baojiatu.jpg')?>" alt=""></div>
            <div class="text">
                <div class="sub_title size2"><strong class="size2">Core component of lithium ion battery: </strong>Cell, BMS, Structural Component</div>
                <div class="p">
                    <p class="size4"><strong>Product liability insurance：</strong>Product liability insurance of Ping An Insurance (Group) Company, RMB30 million, Policy Certificate No: 10590003900575009566</p>
                    <p class="size4"><strong>Cell：</strong>Apply the cell of well-known international brands and self-developed special cell of Large Power</p>
                    <p class="size4"><strong>BMS：</strong>Adopts imported components with multiple protection functions of communication, equilibrium, reverse charging, temperature protection, overcharging, over-discharging, over-current and short circuit</p>
                    <p class="size4"><strong>Structure and process design：</strong>Based on users’ requirements, we adopt process of explosion-proof, waterproof, dustproof, flame retardant, triaxial vibration, multi-point molding junction, film heating and heat balance management to ensure the security, reliability and stability of the product.</p>
                </div>
            </div>
        </div>
    </section>

<section class="section section_m">
	<div class="client">
		<div class="container commom_left_right_padding">
		<div class="title"><h2 class="size1">Our Customers</h2></div>
		<div class="img">
            <ul>
                <li class="col-xs-4 col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers1.jpg')?>" alt=""></div></li>
                <li class="col-xs-4 col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers2.jpg')?>" alt=""></div></li>
                <li class="col-xs-4 col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers3.jpg')?>" alt=""></div></li>
                <li class="col-xs-4 col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers4.jpg')?>" alt=""></div></li>
                <li class="col-xs-4 col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers5.jpg')?>" alt=""></div></li>
                <li class="col-xs-4 col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers6.jpg')?>" alt=""></div></li>
                <li class="hidden-xs col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers7.jpg')?>" alt=""></div></li>
                <li class="hidden-xs col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers8.jpg')?>" alt=""></div></li>
                <li class="hidden-xs col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers9.jpg')?>" alt=""></div></li>
                <li class="hidden-xs col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers10.jpg')?>" alt=""></div></li>
                <li class="hidden-xs col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers11.jpg')?>" alt=""></div></li>
                <li class="hidden-xs col-sm-2"><div class="item"><img src="<?=Yii::getAlias('@web/static/images/customers12.jpg')?>" alt=""></div></li>
            </ul>
        </div>
		</div>
	</div>
</section>
 <section class="section hidden-xs">
        <div class="index_news">
            <div class="container">
                <div class="title"><h2 class="size1">News</h2></div>
                <div class="common_nav center">
                    <ul>
                        <li>
                            <div class="item checked" data="list0">
                                <div class="text"><a href="/company-news/" class="size3">Large Power News</a></div>
                                <div class="ico" style="width: 141px;">
                                    <i></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item" data="list1">
                                <div class="text"><a href="/industry-news/" class="size3">Industry News</a></div>
                                <div class="ico" style="width: 130px;">
                                    <i></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item" data="list2">
                                <div class="text"><a href="/battery-knowledge/" class="size3">Battery Knowledge</a></div>
                                <div class="ico" style="width: 172px;">
                                    <i></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item" data="list3">
                                <div class="text"><a href="#" class="size3">Hottest Article</a></div>
                                <div class="ico">
                                    <i></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item" data="list4">
                                <div class="text"><a href="#" class="size3">Recommended For You</a></div>
                                <div class="ico">
                                    <i></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="common_nav_list section40">
                    <li class="list0">
                        <div class="list">
                            <ul>
                                <?php foreach (Yii::$app->params['news_company'] as $key=>$value) :?>
                                    <li class="col-xs-4 col-sm-4"><div class="item">
                                            <div class="img image_blur">
                                                <a  href="<?=$value->url?>">
                                                    <img src="<?=$value->imageUrl?>" title="<?=$value->title?>" alt="<?=$value->title?>"/>
                                                    <div class="cover"></div>
                                                </a></div>
                                            <div class="text"><a class="hover_a size4"  href="<?=$value->url?>"><?=$value->title?></a></div>
                                        </div></li>
                                <?php  endforeach; ?>
                            </ul>
                        </div>
                    </li>
                    <li class="list1 none">
                        <div class="list_l_r">
                            <div class="col-xs-4 col-sm-4">
                                <div class="img"><a href=""><img src="<?=Yii::getAlias('@web/static/images/index_new_nav1.jpg')?>" alt=""></a></div>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <ul>
                                    <?php foreach (Yii::$app->params['IndustryNews'] as $key=>$value) :?>
                                        <li>
                                            <div class="item"><span></span><div class="text"><a class="commom_a size4" href="<?=$value->url?>" title="<?=$value['title']?>"><?=$value['title']?></a></div></div>
                                        </li>
                                    <?php  endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list2 none">
                        <div class="list_l_r">
                            <div class="col-xs-4 col-sm-4">
                                <div class="img"><a href=""><img src="<?=Yii::getAlias('@web/static/images/index_new_nav2.jpg')?>" alt=""></a></div>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <ul>
                                    <?php foreach (Yii::$app->params['BatteryKnowledge'] as $key=>$value) :?>
                                        <li>
                                            <div class="item"><span></span><div class="text"><a class="commom_a size4" href="<?=$value->url?>" title="<?=$value['title']?>"><?=$value['title']?></a></div></div>
                                        </li>
                                    <?php  endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list3 none">
                        <div class="list_l_r">
                            <div class="col-xs-4 col-sm-4">
                                <div class="img"><a href=""><img src="<?=Yii::getAlias('@web/static/images/index_new_nav3.jpg')?>" alt=""></a></div>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <ul>
                                    <?php foreach (Yii::$app->params['HottestArticle'] as $key=>$value) :?>
                                        <li>
                                            <div class="item"><span></span><div class="text"><a class="commom_a size4" href="<?=$value->url?>" title="<?=$value['title']?>"><?=$value['title']?></a></div></div>
                                        </li>
                                    <?php  endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list4 none">
                        <div class="list_l_r">
                            <div class="col-xs-4 col-sm-4">
                                <div class="img"><a href=""><img src="<?=Yii::getAlias('@web/static/images/index_new_nav4.jpg')?>" alt=""></a></div>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <ul>
                                    <?php foreach (Yii::$app->params['RecommendArticle'] as $key=>$value) :?>
                                        <li>
                                            <div class="item"><span></span><div class="text"><a class="commom_a size4" href="<?=$value->url?>" title="<?=$value['title']?>"><?=$value['title']?></a></div></div>
                                        </li>
                                    <?php  endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
</div>
