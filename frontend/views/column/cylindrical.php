<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
$product_list = [
    ['title'=>'14500 Lithium Ion Battery','img_url'=>'/static/images/column_cylindrical_product_1.png','url'=>'/lithium-ion-battery/list-140/',
        'des'=>'Nominal voltage: 3.7V<br>Nominal capacity: 800mAh<br>Diameter: 14mm<br> Height: 50mm<br>Application: instrumentation, consumer electronics'],

    ['title'=>'18500 Lithium Ion Battery','img_url'=>'/static/images/column_cylindrical_product_2.png','url'=>'/lithium-ion-battery/list-141/',
        'des'=>'Nominal voltage: 3.6V<br>Nominal capacity: 800-1500mAh<br>Diameter: 18±0.2mm<br> Height: 50±0.3mm<br>Application: security communication, rail transit'],

    ['title'=>'18650 Lithium Ion Battery','img_url'=>'/static/images/column_cylindrical_product_3.png','url'=>'/lithium-ion-battery/list-142/',
        'des'=>'Nominal voltage: 3.7V<br>Nominal capacity: 2000-3500mAh<br>Diameter: 18±0.2mm<br> Height: 65±2.0mm<br>Application: special equipment, medical equipment, robot, etc.'],

    ['title'=>'21700 Lithium Ion Battery','img_url'=>'/static/images/column_cylindrical_product_4.png','url'=>'/lithium-ion-battery/list-143/',
        'des'=>'Nominal voltage: 3.6V<br>Nominal capacity: 3000-4800mAh<br>Diameter: 21mm<br> Height: 70mm<br>Application: digital devices, power tools'],

    ['title'=>' 26650 Lithium Ion Battery','img_url'=>'/static/images/column_cylindrical_product_5.png','url'=>'/lithium-ion-battery/list-144/',
        'des'=>'Nominal voltage: 3.2V<br>Nominal capacity: 3200~3500mAh<br>Diameter: 26.2mm<br>Height: 65.6mm<br>Application: power/energy storage, robot, emergency backup'],

    ['title'=>'32650(32700) Lithium Ion Battery','img_url'=>'/static/images/column_cylindrical_product_6.png','url'=>'/lithium-ion-battery/list-145/',
        'des'=>'Nominal voltage: 3.2V<br>Nominal capacity: 4500-6500mAh<br>Diameter: 32.4±0.3mm<br>Height: 70.5±0.2mm<br>Application: instrumentation, backup power source, special equipment'],
]
?>

<div class="column-cylindrical column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs" src="<?=Yii::getAlias('@web/static/images/column_cylindrical_banner.jpg')?>" alt="Cylindrical Lithium Ion Battery">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_cylindrical_banner_m.jpg')?>" alt="Cylindrical Lithium Ion Battery">
        </div>
        <div class="text center-text"><h1 class="big-size">Cylindrical Lithium Ion Battery</h1></div>
    </div>
    <div class="col-md-12">
        <div class="container">
            <section class="section30">
                <div class="products_list_other">
                    <ul class="ul_li_padding">
                        <?php foreach ($product_list as $key=>$value):?>

                        <li class="section60 col-md-4 col-sm-12">
                            <div class="item">
                                <div class="img col-md-12"><a target="_blank" href="<?=$value['url']?>"><img class="img_bg" src="<?=$value['img_url']?>" alt="" title=""></a></div>
                                <div class="text col-md-12 pull-left">
                                    <div class="title size2 section30"><a target="_blank" href="<?=$value['url']?>"><?=$value['title']?></a></div>
                                    <div class="des light1-8 section10"><p>
                                            <?=$value['des']?>
                                           </p></div>
                                    <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">What is a Cylindrical Lithium Battery?</h2></div>

                <div class="link_title size2 section60" id="battery-cell"><h3>1.Definition of Cylindrical Lithium Ion Battery</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Cylindrical lithium-ion battery is a lithium ion battery with cylindrical shape, so called cylindrical lithium-ion battery. According to the anode materials, cylindrical li-ion battery are divided into lithium cobalt oxides (LiCoO2), lithium manganese (LiMn2O4), lithium nickel manganese cobalt (LiNiMnCoO2 or NMC), lithium aluminum nickel cobalt (LiNiCoAlO2 or NCA), lithium iron phosphate (LiFePO4) and lithium titanate (Li4Ti5O12).
                        <br><br>
                        There are many types of cylindrical lithium batteries, including 14500, 14650, 18500, 18650, 21700, 26650, 32650, etc. They are widely used in special equipment, medical equipment, instrumentation, handheld equipment, security and communication.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Structure of Cylindrical Lithium Ion Battery</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        A typical cylindrical battery structure includes: case, cap, positive electrode, negative electrode, separator, electrolyte, PTC element, gasket, anti explosive valve, etc. Generally, the battery case is the negative electrode of the battery, and the cap is the positive electrode of the battery. The battery case is made of nickel steel plate.
                    </p>
                    <div class="img section30 text-center"><img src="/static/images/column_cylindrical_1.jpg" alt="18650 Lithium Ion Battery Shrink Wrap" title="18650 Lithium Ion Battery Shrink Wrap"></div>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.Advantages of Cylindrical Lithium Ion Battery</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Compared with lithium pouch cell and prismatic lithium battery, cylindrical lithium battery has the longest development time, high degree of standardization, mature technology, high yield and low cost.
                    </p>
                </div>
                <div class="p_ul section10">
                    <ul class=" small-size">
                        <li>Mature production process, low pack cost, high battery yield, good heat dissipation performance</li>
                        <li>Cylindrical battery has international standard of specifications and models, mature technology, which is suitable for mass continuous production.</li>
                        <li>Large specific surface area of the cylindrical lithium ion battery and nice heat dissipation effect</li>
                        <li>Cylindrical battery is generally sealed battery. There is no maintenance problem in the use process.</li>
                        <li>Cylindrical battery case has high pressure resistance, so the battery will not expand in the use process like prismatic battery and pouch cell.</li>
                    </ul>
            </section>


            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Brand Ranking of Cylindrical Lithium Ion Battery</h2></div>
                <div class="common_p section30">
                </div>
                <div class="brand_list col-md-12">
                    <ul>
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
                        <li class="section40">
                            <div class="item yellow_color">
                                <div class="img"><img src="/static/images/column_cylindrical_brand_5.jpg" alt="LG"></div>
                                <div class="text">LG</div>
                            </div>
                        </li>
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
                                <div class="img"><img src="/static/images/column_cylindrical_brand_9.jpg" alt="Wangxiang A123"></div>
                                <div class="text">Wangxiang A123</div>
                            </div>
                        </li>
                        <li class="section40">
                            <div class="item yellow_color">
                                <div class="img"><img src="/static/images/column_cylindrical_brand_10.jpg" alt="BYD"></div>
                                <div class="text">BYD</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Cylindrical Lithium Ion Battery Cell, Module and Battery Pack</h2></div>
                <div class="common_p section60 module">
                    <p class="small-size">
                        In a lithium ion battery pack, for the sake of safety and effective management of hundreds of single battery cells, the cells are not randomly placed in the case of the lithium ion battery, but are arranged in an orderly manner according to modules and packages. The smallest unit is battery cell, many of which can make a module, and several modules can make a battery pack.
                    </p>
                    <div class="img-list section60">
                        <ul class="ul_li_padding ul_none">
                            <li class="col-md-4 col-xs-12">
                                <div class="item">
                                    <div class="img"><img src="/static/images/column_cylindrical_module_1.jpg" alt="Cell" title="Cell"></div>
                                    <div class="text section20 text-center">Cell</div>
                                </div>
                            </li>
                            <li class="col-md-4 col-xs-12 m_section30">
                                <div class="item">
                                    <div class="img"><img src="/static/images/column_cylindrical_module_2.jpg" alt="Module" title="Module"></div>
                                    <div class="text section20 text-center">Module</div>
                                </div>
                            </li>
                            <li class="col-md-4 col-xs-12 m_section30">
                                <div class="item">
                                    <div class="img"><img src="/static/images/column_cylindrical_module_3.jpg" alt="Pack" title="Pack"></div>
                                    <div class="text section20 text-center">Pack</div>
                                </div>
                            </li>
                        </ul>
                        <div class="jiantou_1 visible-lg"><img src="/static/images/column_cylindrical_jiangtou.jpg" alt=""></div>
                        <div class="jiantou_2 visible-lg"><img src="/static/images/column_cylindrical_jiangtou.jpg" alt=""></div>
                    </div>

                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>1.Cylindrical Lithium Ion Battery Cell</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Battery cell is the smallest unit of the lithium ion battery pack, and it is also the energy storage unit. It must have a high energy density to store as much power as possible, so that the device can work for a long time. In addition, the life of the lithium ion battery cell is also the most critical factor. The damage of any one battery cell will affect the entire battery pack.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Lithium Ion Battery Module</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Constitute multiple battery cells enclosed by the same battery case make a module. It connects to the outside by a uniform interface.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.Lithium Ion Battery Pack</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        When several modules are jointly controlled or managed by BMS and thermal management system, it is called lithium battery pack.
                    </p>
                </div>

                <div class="common_title size1 section70" id="Recommended-Cylindrical"><h2 class="light1-5">Recommended Cylindrical Lithium Ion Battery</h2></div>
                <div class="products_list_other">
                    <ul class="ul_none">
                        <?php foreach (Yii::$app->params['products'] as $key=>$value):?>
                            <li class="section60">
                                <div class="item">
                                    <div class="product_img col-md-3 col-sm-12"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                    <div class="text col-md-9 col-sm-12">
                                        <div class="des light1-8 m_section30"><p><?=$value['diy_content']?></p></div>
                                        <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                    </div>

                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Battery Cell Safety Test Project</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        In order to ensure the safety of cylindrical lithium battery, domestic and foreign organizations have formulated various corresponding safety testing standards for cylindrical lithium ion battery. The general testing standards generally divide the safety testing items into the following four categories:
                    </p>
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li><strong>Electrical test</strong>: over charge, over discharge, external short circuit, forced discharge, etc.</li>
                            <li><strong>Mechanical test</strong>: extrusion, puncture, impact, vibration, drop, etc.</li>
                            <li><strong>Thermal test</strong>:  high and low temperature cycle, combustion, microwave heating, etc.</li>
                            <li><strong>Environmental simulation</strong>:  high and low pressure simulation, salt spray test, etc.</li>
                        </ul>
                    </div>
                </div>
                <div class="img_text section5">
                    <ul class="ul_none">
                        <div class="row">
                            <li class="section60 col-md-6 col-sm-12">
                                <div class="pic"><img src="/static/images/column_cylindrical_short.jpg" alt="Puncture"></div>
                                <div class="title size2 section20">Puncture</div>
                                <div class="text small-size section10 light1-5"><p>Place a fully charged cylindrical lithium ion battery cell on a plane. Use a steel needle with a diameter of 2.5~5mm to puncture the battery cell and maintain it for 10min. If the battery cell does not fire or explode, it passes the test.</p></div>
                            </li>
                            <li class="section60 col-md-6 col-sm-12">
                                <div class="pic"><img src="/static/images/column_cylindrical_impact.jpg" alt="Impact"></div>
                                <div class="title size2 section20">Impact</div>
                                <div class="text small-size section10 light1-5"><p>
                                        Place the fully charged cylindrical lithium ion battery cell on the impact platform, and drop the 10kg hammer freely at a height of 610mm±25mm to impact the battery cell fixed on the fixture. If the battery cell does not fire or explode, it passes the test.
                                    </p></div>
                            </li>
                        </div>

                        <div class="row">
                            <li class="section60 col-md-6 col-sm-12">
                                <div class="pic"><img src="/static/images/column_cylindrical_extrusion.jpg" alt="Extrusion"></div>
                                <div class="title size2 section20">Extrusion</div>
                                <div class="text small-size section10 light1-5">
                                    <p>
                                        Place a fully charged cylindrical lithium ion battery cell on a plane. Use oil cylinder to apply 13± 0.78KN extrusion pressure. Then the battery has plane extrusion by the steel bar with 32mm diameter. If the extrusion pressure reaches the maximum value, and the battery cell does not catch fire or explode, the battery cell passes the test.
                                    </p>
                                </div>
                            </li>
                            <li class="section60 col-md-6 col-sm-12">
                                <div class="pic"><img src="/static/images/column_cylindrical_forced.jpg" alt="Forced Discharge"></div>
                                <div class="title size2 section20">Forced Discharge</div>
                                <div class="text small-size section10 light1-5"><p>
                                        Discharge the cylindrical lithium battery cell at a constant current to the discharge cut-off voltage according to the standard discharge current, and then put the battery cell in the explosion-proof box. The battery anode is connected to the DC cathode, and the battery cathode is connected to the DC anode.
                                    </p></div>
                            </li>
                        </div>
                       <div class="row">
                           <li class="section60 col-md-6 col-sm-12">
                               <div class="pic"><img src="/static/images/column_cylindrical_overcharge.jpg" alt="Overcharge Test"></div>
                               <div class="title size2 section20">Overcharge Test</div>
                               <div class="text small-size section10 light1-5"><p>
                                       The cylindrical lithium battery cell is fully charged with 1C and overcharged with 10V 3C. When the overcharged battery cell voltage rises to a certain value, it will be stable for a period of time; when the overcharged battery cell voltage is close to a certain time, it will rise rapidly; when it rises to a certain limit, the cap of the battery cell will be pulled off, and the voltage will drop to 0V. If the battery cell does not fire or explode, it passes the test.
                                   </p></div>
                           </li>
                           <li class="section60 col-md-6 col-sm-12">
                               <div class="pic"><img src="/static/images/column_cylindrical_short.jpg" alt="Short Circuit Test"></div>
                               <div class="title size2 section20">Short Circuit Test</div>
                               <div class="text small-size section10 light1-5"><p>
                                       Use a connector with 80mΩ±20mΩinternal resistance to make a fully-charged cylindrical lithium-ion battery cell short circuit on its anode and cathode. Then test the temperature change of battery surface. The highest surface temperature is 140 ℃. Pull off the battery cell cap, if the battery cell does not fire or explode, it passes the test.
                                   </p></div>
                           </li>
                       </div>
                       <div class="row">
                           <li class="section60 col-md-6 col-sm-12">
                               <div class="pic"><img src="/static/images/column_cylindrical_thermal.jpg" alt="Thermal Shock Test"></div>
                               <div class="title size2 section20">Thermal Shock Test</div>
                               <div class="text small-size section10 light1-5"><p>
                                       Place the fully charged cylindrical lithium ion battery cell in the high temperature cabinet, the temperature is raised to 130℃±2℃ at the rate of (5℃±2℃) /min, and keep the battery cell for 30min. If the battery cell does not fire or explode, it passes the test.
                                   </p></div>
                           </li>
                           <li class="section60 col-md-6 col-sm-12">
                               <div class="pic"><img src="/static/images/column_cylindrical_combustion.jpg" alt="Combustion"></div>
                               <div class="title size2 section20">Combustion</div>
                               <div class="text small-size section10 light1-5"><p>
                                       Experiment is conducted to determine whether cylindrical lithium battery cell would explode or cause other destructive damage when burning.
                                   </p></div>
                           </li>
                       </div>

                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Cylindrical, Prismatic and Pouch Cell</h2></div>
                <div class="common_p section55">
                    <p class="size2">
                        Cylindrical Lithium Ion Battery
                    </p>
                    <p class="small-size section10">Cylindrical battery has the longest development time, the most mature technology and a high degree of standardization. Cylindrical lithium battery has mature winding process, high degree of automation, stable quality and relatively low cost.</p>
                </div>
                <div class="common_p section60">
                    <p class="size2">
                        Prismatic Lithium Ion Battery
                    </p>
                    <p class="small-size section10">The prismatic lithium ion battery usually refers to the aluminum or steel case prismatic battery. It has high market penetration rate, relatively simple structure, easy production process, light weight, and high relative energy density.</p>
                </div>
                <div class="common_p section60">
                    <p class="size2">
                        Pouch Cell
                    </p>
                    <p class="small-size section10">
                        A pouch cell is just a liquid lithium ion battery with a polymer case. In the structure, it has aluminum-plastic film package. In the case of safety hazards, the pouch cell may only swell to crack.
                    </p>
                </div>
                <section class="section30">
                    <?php $this->beginContent('@app/views/column/cylindricalTable.php') ?>
                    <?php $this->endContent() ?>
                </section>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Cylindrical Lithium Ion Battery Customization</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        Lithium ion battery customization is for devices with special needs. The lithium ion battery products we use in daily life do not need to be customized. What need to be customized are those industrial-grade lithium ion batteries. Generally they have demand on lithium ion battery volume, capacity, protective measures, etc.
                    </p>
                    <p class="small-size section20">
                        <strong>Volume customization</strong>: the volume of cylindrical lithium ion battery can be flexibly customized. The maximum or minimum size can be required within the specified battery specifications.
                    </p>
                    <p class="small-size section20">
                        <strong>Voltage and capacity customization</strong>: the voltage and capacity of cylindrical lithium ion battery can be customized according to the requirements. Users can customize the lithium ion battery suitable for the equipment according to their own needs.Lithium ion battery can be flexibly customized. The maximum or minimum size can be required within the specified battery specifications.
                    </p>
                    <p class="small-size section20">
                        <strong>Safety customization</strong>: the lithium ion battery customization manufacturer will increase the battery protection measures according to the environment of the lithium ion battery equipment you use or according to your requirements.
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
