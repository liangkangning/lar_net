<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
$ConsumerGoods = \common\models\Images::find()->where(['id' => 870])->one();
$IndustrialField = \common\models\Images::find()->where(['id' => 579])->one();
$SpecialUse = \common\models\Images::find()->where(['id' => 802])->one();
$Electrolyte = \common\models\Images::find()->where(['id' => 981])->one();
//该文章的电芯产品
$products = [];
$ids_18650 = ['955','939','852'];
foreach ($ids_18650 as $id) {
    $products[] = \common\models\Images::find()->where(['id' => $id])->one();
}

foreach ($products as &$product) {
    $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
}
Yii::$app->params['products'] = $products;

use common\models\Images; ?>

<div class="column-lithium-guide column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs"  src="<?=Yii::getAlias('@web/static/images/column_lithium_guide_banner.jpg')?>" alt="Lithium Ion Battery Guide">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_lithium_guide_banner_m.jpg')?>" alt="Lithium Ion Battery Guide">
        </div>
        <div class="text center-text">
            <h1 class="big-size">Best Lithium Ion Battery Guide</h1>
           <p class="size3 white_color section30 hidden-xs">
				Lithium ion battery is a kind of rechargeable battery which uses graphite or <br>
             other carbon materials as the negative electrode and <br>
             lithium containing compounds as the positive electrode.
            </p>
        </div>
    </div>

    <div class="col-md-12">
        <div class="container">
            <section class="section m_section60">
                <div class="link_title size2" id=""><h3>Recommended Lithium Ion Battery Category </h3></div>
                <div class="category_list col-md-12">
                    <ul class="ul_none ul_li_padding40">
                        <li class="col-md-3 section30 m_section30">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/low-temperature-battery/"><img src="/static/images/column_lithium_guide_category_1.jpg" alt="Low Temperature Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/low-temperature-battery/">Low Temperature Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section30 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/explosion-proof-battery/"><img src="/static/images/column_lithium_guide_category_2.jpg" alt="Explosion-proof Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/explosion-proof-battery/">Explosion-proof Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section30 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/lithium-power-battery/"><img src="/static/images/column_lithium_guide_category_3.jpg" alt="Lithium Power Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/lithium-power-battery/">Lithium Power Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section30 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/lifepo4-battery/"><img src="/static/images/column_lithium_guide_category_4.jpg" alt="LiFePO4 Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/lifepo4-battery/">LiFePO4 Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section60 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/lithium-battery18650/"><img src="/static/images/column_lithium_guide_category_5.jpg" alt="18650 Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/lithium-battery18650/">18650 Lithium Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section60 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/lithium-polymer-battery/"><img src="/static/images/column_lithium_guide_category_6.jpg" alt="Lithium Polymer Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/lithium-polymer-battery/">Lithium Polymer Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section60 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/energy-storage-battery/"><img src="/static/images/column_lithium_guide_category_7.jpg" alt="Energy Storage Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/energy-storage-battery/">Energy Storage Battery</a></div>
                            </div>
                        </li>
                        <li class="col-md-3 section60 m_section60">
                            <div class="item">
                                <div class="img"><a target="_blank" href="https://www.large.net/industrial-battery/"><img src="/static/images/column_lithium_guide_category_8.jpg" alt="Ternary Battery"></a></div>
                                <div class="text text-center section30"><a target="_blank" href="https://www.large.net/industrial-battery/">Ternary Lithium Battery</a></div>
                            </div>
                        </li>
						
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Development</h2></div>
                <div class="common_p section60">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li>The first patent for lithium-ion batteries was issued in 1981.</li>
                            <li>In 1992, SONY began mass production of lithium ion batteries for civilian use.</li>
                            <li>In 1998, a large number of prismatic lithium ion batteries were put into the market, occupying a large share of the market.</li>
                            <li>China began mass production of lithium ion batteries in 1999.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Application</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1. Consumer Goods</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        It is mainly used in digital products, mobile phones, portable power supplies, laptops and other electronic devices. 18650 lithium battery and lithium polymer battery are commonly used.
                    </p>
                </div>
                <div class="products_list">
                    <ul>
                    <?php $value = $ConsumerGoods;?>
                    <li class="section60">
                        <div class="item">
                            <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                            <div class="text col-md-7">
                                <div class="des light1-8 section60"><p><?=$value['diyContentUrl']?></p></div>
                                <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Industrial Field</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        It is mainly applied in the fields of medical electronics, photovoltaic energy storage, railway infrastructure, security communication, exploration and mapping, etc. Energy storage/power lithium battery, lithium iron phosphate battery, polymer lithium battery, 18650 lithium battery are commonly used.
                    </p>
                </div>
                <div class="products_list">
                    <ul>
                        <?php $value = $IndustrialField;?>
                        <li class="section60">
                            <div class="item">
                                <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                <div class="text col-md-7">
                                    <div class="des light1-8 section60"><p><?=$value['diyContentUrl']?></p></div>
                                    <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.Special Use</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        It is mainly used in the fields of military police, aerospace, naval ships, satellite navigation, weapons, and high energy physics. Ultra-low temperature lithium ion battery, high temperature lithium ion battery, lithium titanate battery and explosion-proof lithium battery are commonly used.
                    </p>
                </div>
                <div class="products_list">
                    <ul>
                        <?php $value = $SpecialUse;?>
                        <li class="section60">
                            <div class="item">
                                <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                <div class="text col-md-7">
                                    <div class="des light1-8 section60"><p><?=$value['diyContentUrl']?></p></div>
                                    <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Classification of Lithium Ion Batteries</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Appearance</h3></div>
                <div class="common_p section20">
                    <div class="title"><strong>Cylindrical Lithium Ion Battery</strong></div>
                    <p class="small-size section5 light1-5">
                        The model name of cylindrical lithium ion battery is generally 5 digits. The first two digits are the diameter of the battery, the middle two digits are the height of the battery, the last digit 0 represents cylindrical battery. The unit is millimeter.
                    </p>
                </div>
                <div class="common_p section20">
                    <div class="title"><strong>Most Commonly Used Cylindrical Lithium Ion Battery</strong></div>
                    <div class="p_ul section5">
                        <ul class="small-size">
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-142/">18650 Lithium Ion Battery</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-140/">14500 Lithium Ion Battery</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-141/">18500 Lithium Ion Battery</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-143/">21700 Lithium Ion Battery</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-144/">26650 Lithium Ion Battery</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-145/">32650（32700）Lithium Ion Battery</a></li>

                        </ul>
                    </div>
                </div>
                <div class="common_p section20">
                    <div class="title"><strong>Prismatic Lithium Ion Battery</strong></div>
                    <p class="small-size section5 light1-5">
                        Prismatic lithium ion battery usually refers to the aluminum or steel case prismatic lithium ion battery, widely used in exploration and mapping, medical equipment, portable testing equipment.
                    </p>
                    <div class="img-list images-center section60">
                        <ul class="ul_none ul_li_padding50">
                            <li>
                                <div class="item">
                                    <div class="img"><a target="_blank" href=""><img src="/static/images/column_lithium_guide_1.jpg" alt="Cylindrical Lithium Ion Battery"></a></div>
                                    <div class="text text-center section30"><a target="_blank" href="https://www.large.net/cylindrical-lithium-ion-battery/">Cylindrical Lithium Ion Battery</a></div>
                                </div>
                            </li>
                            <li class="m_section50">
                                <div class="item">
                                    <div class="img"><a target="_blank" href=""><img src="/static/images/column_lithium_guide_2.jpg" alt="Prismatic Lithium Ion Battery"></a></div>
                                    <div class="text text-center section30"><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-146/">Prismatic Lithium Ion Battery</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Case</h3></div>
                <div class="common_p section20">
                    <li class="title"><strong>Steel Case Lithium Ion Battery</strong></li>
                    <p class="small-size section5 light1-5">
                        Long ago, steel lithium ion batteries are used commonly. Due to the large weight of the steel case, poor safety, but good stability, many manufacturers increase battery safety performance by optimizing the design structure by safety valve, PTC and other devices. Some manufacturers replace the steel case with an aluminum case and flexible package, such as the current cell phone battery.
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>Aluminum Case Lithium Ion Battery</strong></li>
                    <p class="small-size section5 light1-5">
                        The aluminum case lithium ion battery is lighter and slightly safer than the steel case lithium ion battery.
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>Pouch cell</strong></li>
                    <p class="small-size section5 light1-5">
                        Pouch cell has the advantages of light weight, low mould cost and high safety. It gradually expands its market share.
                    </p>
                </div>
                <div class="img-list section60 col-md-12">
                    <ul class="ul_none ul_li_padding">
                        <li class="col-md-4">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_lithium_guide_3.jpg" alt="Steel Case Lithium Ion Battery"></div>
                                <div class="text text-center section30">Steel Case Lithium Ion Battery</div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_lithium_guide_4.jpg" alt="Aluminum Case Lithium Ion "></div>
                                <div class="text text-center section30">Aluminum Case Lithium Ion </div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_lithium_guide_5.jpg" alt="Pouch cell"></div>
                                <div class="text text-center section30">Pouch cell</div>
                            </div>
                        </li>

                    </ul>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.Anode Materials</h3></div>
                <div class="common_p section20">
                    <p>Currently, there are four kinds of anode materials for lithium ion batteries:</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/news/8ku43mw.html">LiCoO2 battery</a></p>
                    <p class="section5">The chemical formula for lithium cobalt oxide is LiCoO ₂. It is a kind of inorganic compounds, and is usually used as positive electrode materials for lithium ion batteries.</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/news/8fu43my.html">LiMn2O4 battery</a></p>
                    <p class="section5">Lithium manganese is mainly spinel manganese, which was first prepared by Hunter in 1981 as a positive electrode material with three-dimensional lithium ion channels.</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/lifepo4-battery/">LiFePO4 Battery</a></p>
                    <p class="section5">Lithium iron phosphate is a lithium ion battery anode material. Lithium iron phosphate batteries, named after their anode material, are also known as LiFePO4 battery and LFP battery.</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/news/8mu43my.html">NCM (Ternary) Battery</a></p>
                    <p class="section5">Lithium nickel manganese cobalt is the key ternary anode material for lithium ion battery, which has higher specific capacity and lower cost than the other anode material.</p>
                </div>

                <div class="table_title size2 section60">The material characteristics of the anode of lithium ion battery are compared as follows:</div>
               <section class="section30 tabel-section">
                   <table cellspacing="0" width="100%" class="table-bordered">
                       <tbody>
                       <tr class="firstRow">
                           <td>Item</td>
                           <td>LiCoO2</td>
                           <td>LiNiCoMnO2 (ternary)</td>
                           <td>LiMn2O4</td>
                           <td>LiFePO4</td>
                       </tr>
                       <tr>
                           <td>Compacted Density (g/cm3)</td>
                           <td>2.8~3.0</td>
                           <td>2.0~2.3</td>
                           <td>2.2~2.4</td>
                           <td>1.0~1.4</td>
                       </tr>

                       <tr>
                           <td>Specific Surface Area (m2/g)</td>
                           <td>0.4~0.6</td>
                           <td>0.2~0.4</td>
                           <td>0.4~0.8</td>
                           <td>12~20</td>
                       </tr>
                       <tr>
                           <td>Volume (mAh/g)</td>
                           <td>135~140</td>
                           <td>140~180</td>
                           <td>90~100</td>
                           <td>130~140</td>
                       <tr>
                           <td>Voltage Platform (V)</td>
                           <td>3.7</td>
                           <td>3.6</td>
                           <td>3.7</td>
                           <td>3.2</td>
                       </tr>
                       <tr>
                           <td>Cycle Performance</td>
                           <td>≥500times</td>
                           <td>≥500times</td>
                           <td>≥300times</td>
                           <td>≥2000times</td>
                       </tr>
                       <tr>
                           <td>Safety Performance</td>
                           <td>bad</td>
                           <td>good</td>
                           <td>better</td>
                           <td>best</td>
                       </tr>
                       <tr>
                           <td>Scope of Application</td>
                           <td>small and medium<br>
                               size battery</td>
                           <td>small batteries/small<br>
                               power battery</td>
                           <td>power battery<br>
                               low cost battery</td>
                           <td>power battery/power<br>
                               supply with super<br>
                               capacity</td>
                       </tr>
                       </tbody>
                   </table>
               </section>




                <div class="link_title size2 section60" id="battery-cell"><h3>4.Electrolyte</h3></div>
                <div class="common_p section20">
                    <li class="title"><strong>Liquid Lithium Ion Battery</strong></li>
                    <p class="small-size section5 light1-5">
                        Liquid lithium ion battery uses liquid electrolytes, which are organic solvents and lithium salts.
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>Polymer Lithium Ion Battery</strong></li>
                    <p class="small-size section5 light1-5">
                        Polymer lithium ion battery uses solid polymer electrolyte, which can be either "dry" or "colloidal". Most manufacturers use polymer colloidal electrolyte currently. The polymer matrix tends to be HFP-PVDF, PEO, PAN and PMMA.
                    </p>
                </div>

                <div class="products_list section60">
                    <ul>
                        <?php $value = $Electrolyte;?>
                        <li class="">
                            <div class="item">
                                <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                <div class="text col-md-7">
                                    <div class="des light1-8 section60"><p><?=$value['diyContentUrl']?></p></div>
                                    <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="common_p section60">
                    <li class="title"><strong>All-solid-state Lithium Ion Battery</strong></li>
                    <p class="small-size section5 light1-5">
                        "All-solid-state lithium ion battery" is a kind of lithium battery with solid electrode and electrolyte materials used in the working temperature range and without any liquid components, so it is called "all-solid-state lithium ion battery with electrolyte".
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Best Lithium Ion Battery Brand</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Best 18650 Lithium Ion Battery Brand</h3></div>
                <div class="brand_list col-md-12">
                    <ul>
                        <div class="row">
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_1.jpg" alt="Sony"></div>
                                    <div class="text">Sony</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_2.jpg" alt="Panasonic"></div>
                                    <div class="text">Panasonic</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_3.jpg" alt="Sanyo"></div>
                                    <div class="text">Sanyo</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_4.jpg" alt="Samsung"></div>
                                    <div class="text">Samsung</div>
                                </div>
                            </li>
                        </div>

                        <div class="row">
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_6.jpg" alt="BAK"></div>
                                    <div class="text">BAK</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_7.jpg" alt="LISHEN"></div>
                                    <div class="text">LISHEN</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_8.jpg" alt="LARGE"></div>
                                    <div class="text">LARGE</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_5.jpg" alt="LG"></div>
                                    <div class="text">LG</div>
                                </div>
                            </li>
                        </div>

                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Recommended Power Lithium Ion Battery Brands</h3></div>
                <div class="p_ul section20 col-md-12">
                    <ul class="small-size light1-8">
                       <li>CATL</li>
                       <li>Panasonic</li>
                       <li>BYD</li>
                       <li>Tesla</li>
                       <li>LG</li>
                       <li>Samsung SDI</li>
                       <li>GUOXUAN</li>
                       <li>LISHEN</li>
                       <li>BAK</li>
                       <li>CALB</li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.Special Lithium Ion Battery Brand</h3></div>

                <div class="common_p section20">
                    <p><a target="_blank" href="/">LARGE</a></p>
                    <p class="section10">
                        18 Years' Expertise in Customizing Lithium Ion Battery<br>
                        Dongguan Large Electronics Co., Ltd was established in 2002. It is a national-level high-tech enterprise providing customized solutions and products of maximum reliable  maximum safe special lithium ion battery system.
                    </p>
                </div>
                <section class="section60">
                    <div class="title size2" >Core Technology</div>
                    <div class="list">
                        <ul class="ul_li_padding60 ul_none">
                            <div class="row">
                                <li class="col-md-4 section30">
                                    <div class="item">
                                        <div class="img"><img src="/static/images/colmun_battery_01.jpg" alt=""></div>
                                        <div class="text section20 light1-8">
                                            <p>
                                                <strong> High Energy Density</strong><br>
                                                (Ternary, lithium cobalt oxide system)<br>
                                                Mass energy density 300watt-hour/kg<br>
                                                Volume energy density 700 watt-hour/kg
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 section30 m_section60">
                                    <div class="item">
                                        <div class="img"><img src="/static/images/colmun_battery_02.jpg" alt=""></div>
                                        <div class="text section20 light1-8">
                                            <p>
                                                <strong> High Rate</strong><br>

                                                High Rate
                                                (Ternary, Lithium Cobalt Oxide, Lithium
                                                Iron Phosphate System)<br>
                                                100C continuous discharge<br>
                                                The temperature controls within 40℃.

                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 section30 m_section60">
                                    <div class="item">
                                        <div class="img"><img src="/static/images/colmun_battery_03.jpg" alt=""></div>
                                        <div class="text section20 light1-8">
                                            <p>
                                                <strong> High Temperature</strong><br>
                                                (Ternary, Lithium Iron Phosphate System)<br>
                                                The high temperature of 80℃ lasts for 200 cycles.<br>
                                                Store at 85℃ for 48 hours.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                           <div class="row">
                               <li class="col-md-4 section60 m_section60">
                                   <div class="item">
                                       <div class="img"><img src="/static/images/colmun_battery_04.jpg" alt=""></div>
                                       <div class="text section20 light1-8">
                                           <p>
                                               <strong> Good Safety</strong><br>
                                               (Modified ternary chemical system)<br>
                                               190~200Wh/kg high energy density
                                               Meet Ex ia IIA/Ex ib IIB T1~T4 <br>
                                               explosion-proof criteria.
                                           </p>
                                       </div>
                                   </div>
                               </li>
                               <li class="col-md-4 section60 m_section60">
                                   <div class="item">
                                       <div class="img"><img src="/static/images/colmun_battery_05.jpg" alt=""></div>
                                       <div class="text section20 light1-8">
                                           <p>
                                               <strong> Low Temperature Charging</strong><br>
                                               (Ternary, Lithium Iron Phosphate System)
                                               -20℃ 0.5C charging, <br>
                                               charge-discharge cycle≥300 cycles,
                                               -40℃ 0.2C charging, <br>
                                               charge-discharge cycle≥300 cycles.
                                           </p>
                                       </div>
                                   </div>
                               </li>
                               <li class="col-md-4 section60 m_section60">
                                   <div class="item">
                                       <div class="img"><img src="/static/images/colmun_battery_06.jpg" alt=""></div>
                                       <div class="text section20 light1-8">
                                           <p>
                                               <strong> Low Temperature Discharging</strong><br>
                                               (Ternary, Lithium Iron Phosphate System)
                                               -40℃ high rate 5C continuous discharging,<br>
                                               over 80% capacity retention ratio, <br>
                                               -50℃ low temperature discharging,<br>
                                               over 75% capacity retention ratio.
                                           </p>
                                       </div>
                                   </div>
                               </li>
                           </div>


                        </ul>
                    </div>

                </section>



                <div class="table_title size2 section70">Best Special Lithium Ion Battery</div>
                <div class="products_list_other">
                    <ul class="ul_none">
                        <?php foreach (Yii::$app->params['products'] as $key=>$value):?>
                            <li class="<?= $key==0?'section20':'section60';?>">
                                <div class="item">
                                    <div class="product_img col-md-3 col-sm-12"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                    <div class="text col-md-9 col-sm-12">
                                        <div class="des light1-8 "><p><?=$value['diy_content']?></p></div>
                                        <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                    </div>

                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Parameters</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Voltage</h3></div>
                <div class="common_p section20">
                    <li class="title"><strong>Nominal Voltage</strong></li>
                    <p class="small-size section5 light1-5">
                        The potential difference between the anode and cathode of lithium ion battery is called the nominal voltage of lithium ion battery. The nominal voltage is determined by the electrode potential of the electrode material and the concentration of the internal electrolyte.
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>Open Circuit Voltage</strong></li>
                    <p class="small-size section5 light1-5">
                        The terminal voltage of the battery in the open circuit state is called the open circuit voltage. The open circuit voltage of the battery is equal to the potential difference between the anode and cathode.
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>Operating Voltage</strong></li>
                    <p class="small-size section5 light1-5">
                        Working voltage refers to the voltage displayed during the discharge process after the battery is connected to the load. It is also known as discharge voltage. The initial discharge voltage is called the initial voltage.
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>Recommended Commonly Used Voltage of Lithium Ion Battery：</strong></li>
                    <p class="small-size section5 light1-5">
                        <a target="_blank" href="/lithium-ion-battery/list-133/">12V Lithium Ion Battery</a>
                        <br>
                        <a target="_blank" href="/lithium-ion-battery/list-134/">24V Lithium Ion Battery</a>
                        <br>
                        <a target="_blank" href="/lithium-ion-battery/list-135/">36V Lithium Ion Battery</a>
                        <br>
                        <a target="_blank" href="/lithium-ion-battery/list-136/">48V Lithium Ion Battery</a>


                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Capacity</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        The capacity of a lithium ion battery under certain discharge conditions is called the capacity of a lithium ion battery and is represented by the symbol C. The commonly used unit is the ampere hour, or ampere-hour (Ah) or milliampere-hour (mAh) for short.
                        <br><br>
                        The capacity of lithium ion battery is affected by the anode material, battery temperature, discharge rate and voltage.
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>3.Internal Impedance</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        The internal impedance of lithium ion battery refers to the impedance caused by the current passing through the lithium ion battery. The internal impedance will affect the voltage of lithium ion battery.
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>4.Cycle life</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        The cycle life of a lithium ion battery is generally expressed by cycle number. One cycle represents a complete charge and discharge cycle of the lithium ion battery (that is, the lithium ion battery is charged from empty to full state and then discharged from full to empty state).
                    </p>
                </div>
                <div class="common_p">
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_6.jpg" alt="Cycle characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size light1-5">
                        Note: Lithium ion battery has good cycle characteristics and can maintain about 80% capacity after 500 cycles.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>5.Discharge Rate</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        Discharge rate refers to the current of lithium ion battery during discharge, which is generally expressed as C. The formula is as follows:
                    </p>
                    <p class="small-size section20 light1-5">
                        <strong>Discharge Rate = Discharge Current/Rated Capacity</strong>
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_7.jpg" alt="Discharging load characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size light1-5">
                        Note: Because lithium ion battery has organic solvent electrolytes, the conductivity is typically only a few hundredths of that of lead-acid or alkaline battery electrolytes. Therefore, when the lithium ion battery is discharged at a high current, it is too late to replenish Li+ from the electrolyte, and then the voltage will reduce.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>6.Operating Temperature</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        The operating temperature of lithium ion battery refers to temperature of the charging and discharging environment that lithium ion battery can adapt to.
                    </p>
                    <p class="small-size section20 light1-5">
                        When lithium ion battery is at low temperature, the discharge platform has a certain reduction. When the temperature is high, the circulation performance of the battery will be affected, and the battery will slightly swell. Therefore, the battery is generally recommended to operate at 0-40℃.
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_8.jpg" alt="Discharge temperature characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size gray_color text-center ">
                        Low Temperature Discharge Characteristic Curve of Lithium Ion Battery
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_9.jpg" alt="Storage characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size gray_color text-center ">
                        High Temperature Discharge Characteristic Curve of Lithium Ion Battery
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery and Lead Acid Battery, NI-MH Battery</h2></div>
                <section class="section60">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Item</td>
                            <td>Lithium Ion Battery</td>
                            <td>Lead Acid battery</td>
                            <td>NI-MH Battery</td>

                        </tr>
                        <tr>
                            <td>Energy Density (wh/kg)</td>
                            <td>200~260wh/kg</td>
                            <td>50~70wh/kg</td>
                            <td>40~70wh/kg</td>
                        </tr>
                        <tr>
                            <td>Open Circuit Voltage (v)</td>
                            <td>3.6V</td>
                            <td>2.0V</td>
                            <td>1.2V</td>
                        </tr>
                        <tr>
                            <td>Cycle Life (Times)</td>
                            <td>300-2500</td>
                            <td>400-600</td>
                            <td>300-350</td>
                        </tr>
                        <tr>
                            <td>Charging Speed</td>
                            <td>Quick</td>
                            <td>Slow</td>
                            <td>Slower</td>
                        </tr>
                        <tr>
                            <td>Memory Effect</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Environmental Performance</td>
                            <td>Lower Pollution</td>
                            <td>High Pollution</td>
                            <td>Low Pollution</td>
                        </tr>
                        </tbody>
                    </table>
                </section>
            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Pack </h2></div>
                <div class="common_p section60">
                    <p class="small-size light1-5">
                        Lithium ion battery pack mainly refers to the processing and assembly of lithium ion battery, which is mainly to process the battery cell, PCM, BMS, connector, label, holder, cases, lead and terminal into products according to customer’s requirements.
                    </p>
                </div>
                <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_zhinan.jpg" alt="Storage characteristics"></div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Safety Test</h2></div>
                <div class="common_p section60">
                    <p>
                        The best lithium ion battery has to pass UL2054 safety standard (lithium ion battery) and has to finish the tests below:
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>Appearance</strong></li></p>
                    <p class="section5">
                        The best lithium ion battery has to pass UL2054 safety standard (lithium ion battery) and has to finish the tests below:
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>Electric Performance Test</strong></li></p>
                    <p class="section5">
                        0.2C5A discharge performance, 1C5A discharge performance, high temperature performance, low temperature performance, charge retention and cycling.
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>Environment Compatibility Verification</strong></li></p>
                    <p class="section5">
                        Constant heat and humidity, vibration, collision and free drop
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>Safety Performance</strong></li></p>
                    <p class="section5">
                        Impact test, thermal shock, overcharge, short circuit and other safety tests
                    </p>
                </div>

            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Certification and Test Standard</h2></div>
                <div class="common_p section60">
                    <p class="text-center size2">
                        Product Certification
                    </p>
                </div>
                <div class="common_p section20">
                    <p class="text-center">
                        Certification Details of Major Global Countries and Regions(Battery)
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_10.jpg" alt="Storage characteristics"></div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Transportation</h2></div>
                <div class="common_p section60">
                    <p>
                        Lithium battery can be transported by air, by ship, or by vehicles and train. The most commonly used is air transport and marine transport.
                        Because lithium is a metal particularly prone to chemical reactions and combustion, improper lithium battery package and transportation may lead to combustion and explosion.
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Lithium Ion Battery Package Requirements：</h3></div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li>Be in UN package in accordance with the DGR Dangerous Good Specification. The corresponding number shall be displayed on the package.</li>
                            <li>Use 9 hazard labels properly.</li>
                            <li>Fill in dangerous goods declaration form and provide relevant dangerous packing certificate.</li>
                        </ul>
                    </div>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_11.jpg" alt="caution"></div>
                    a'c'c
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2.Lithium Ion Battery Transportation Requirements：</h3></div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li>Batteries shall meet UN 38.3 test requirements and pass package drop test at 1.2m height.</li>
                            <li>Provide declaration documents of dangerous goods, marked with UN number.</li>
                            <li>The battery shall be protected against short circuit. Especially in the same package, prevent conductive material against short circuit.</li>
                            <li>In order to avoid intense vibration during transition, use corner armor on all vertical and horizontal edges of the tray.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Ion Battery Price</h2></div>
                <div class="common_p section60">
                    <p>
                        The price of single lithium ion battery cell is mainly influenced by brand and quality, while the price of lithium ion battery pack has affected by many factors：
                    </p>
                </div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size ">
                            <li><p class="yellow_color">Cell Model</p></li>
                            <li><p class="yellow_color">Voltage</p></li>
                            <li><p class="yellow_color">Capacity</p></li>
                            <li><p class="yellow_color">Demand and Design of PCM</p></li>
                            <li><p class="yellow_color">Demand and Design of Case</p></li>

                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">How to Use Lithium Ion Battery Properly</h2></div>
                <div class="common_p section60">
                    <p>
                        <strong>Storage of Lithium Ion Battery</strong> - The most critical storage conditions for lithium ion batteries are temperature and humidity. It is recommended to store battery at 20℃. Make sure the warehouse is moisture proof and humidity proof. Don't make lithium ion battery in a state of power loss. Do not extrude or impact the battery. Do not store battery in strong static or high magnetic field.
                    </p>
                </div>
                <div class="common_p section20">
                    <p>
                        <strong>Lithium Battery Charge and Discharge</strong> - Do not overcharge the battery. Do not use inferior charger. Do not use high power charger a lot. Do not discharge more than 80% of the battery capacity.
                    </p>
                </div>
            </section>

            <div class="fengxian section col-md-12">
                <div class="sharethis-inline-share-buttons"></div>
            </div>

            <section class="section section_m col-md-12">
                <?php $this->beginContent('@app/views/layouts/public/send_email.php') ?>
                <?php $this->endContent()?>
            </section>
        </div>
    </div>


</div>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c344a1f093e83001145111b&product=inline-share-buttons' async='async'></script>
