<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
$product_list = [
    ['title'=>'48V Low Temperature Lithium Ion Battery ','img_url'=>'/static/images/column_48v_product_1.png','url'=>'/product/8eu43dd.html',
        'des'=>'Adopt special material and process.<br> Be suitable for cold environment.<br>-50℃ 0.2C discharge efficiency 80%'],

    ['title'=>'48V Medical Lithium Ion Battery','img_url'=>'/static/images/column_48v_product_2.png','url'=>'/lilizi/list-14-88.html',
        'des'=>'Ultra-high power cell<br>Super safe<br>High capacity energy storage'],

    ['title'=>'48V Power Lithium Ion Battery','img_url'=>'/static/images/column_48v_product_3.png','url'=>'/lithium-power-battery/list-136/',
        'des'=>'High energy density<br>High volumetric specific energy<br>High-rate discharge'],



    ['title'=>'48V Energy Storage Lithium Ion Battery','img_url'=>'/static/images/column_48v_product_4.png','url'=>'/lithium-power-battery/list-133/',
        'des'=>'High voltage platform<br>Large capacity, long cycle life<br>Environmental friendly'],

    ['title'=>'48V LiFePO4 Battery','img_url'=>'/static/images/column_48v_product_5.png','url'=>'/lifepo4-battery/list-136/',
        'des'=>'Outstanding safety<br>High thermal stability<br>Long cycle life'],

    ['title'=>'48V Ternary Lithium Ion Battery ','img_url'=>'/static/images/column_48v_product_6.png','url'=>'/lithium-battery18650/list-136/',
        'des'=>'Nice cycle performance<br>Low cost<br>High energy density'],



];
    //第二类产品
    $products = [];
    $product_ids_1 = ['1010','706','901'];
    foreach ($product_ids_1 as $id) {
        $products[] = common\models\Images::find()->where(['id' => $id])->one();
    }

    foreach ($products as &$product) {
        $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
    }
    Yii::$app->params['products'] = $products;

    //第二类产品
    $products = [];
    $product_ids_1 = ['1002','1004'];
    foreach ($product_ids_1 as $id) {
        $products[] = common\models\Images::find()->where(['id' => $id])->one();
    }

    foreach ($products as &$product) {
        $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
    }
    Yii::$app->params['products_other'] = $products;


?>

<div class="column-lifepo4 column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs" src="<?=Yii::getAlias('@web/static/images/column_48v_banner.jpg')?>" alt="12V Lithium Battery Guide" title="12V Lithium Battery Guide">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_48v_banner_m.jpg')?>" alt="12V Lithium Battery Guide" title="12V Lithium Battery Guide">
        </div>
        <div class="text center-text">
            <h1 class="big-size">48V Lithium Ion Battery</h1>
        </div>
    </div>
    <div class="col-md-12">
        <div class="container">
            <section>
                <div class=" size2 section" ><h2 class="light1-5">48V Lithium Ion Battery Recommendation </h2></div>
            </section>
            <section class=" m_section0">
                    <div class="products_list_other">
                        <ul class="ul_li_padding60">
                                <?php foreach ($product_list as $key=>$value):?>
                                    <?php if ($key%2==0):?>
                                    <div class="row">
                                    <?php endif;?>
                                        <li class="<?=$key>2?'section60':'section30'?> <?= $key==0?'':'m_section60'?> col-md-4 col-sm-12">
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
                                    <?php if (($key+1)%3==0):?>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                        </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section80" ><h2 class="light1-5">Definition of 48V Lithium Ion Battery</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        In general, the single battery cell on the market is around 3.7V, but in many cases, the operating voltage range is a little bit larger. It is obvious that the voltage is not enough to use. At this time, the battery pack that can improve voltage and modular battery are coming. In many high-voltage batteries, 48V lithium ion battery has been widely used.
                    </p>
                    <p class="section20">Compared with lead-acid battery, 48V lithium ion battery has advantages of small size, light weight, outstanding temperature adaptability, high charging and discharging efficiency, good safety and stability, long service life, energy saving and environmental protection.</p>
                    <p class="section20">According to the anode material, 48V lithium ion battery can be divided into ternary lithium battery, lithium iron phosphate battery, lithium titanate battery.</p>
                </div>

                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery Price</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        A 48V lithium ion battery is connected by multiple lithium cells in series and parallel. If a single cell is a 48V lithium battery, the efficiency and life of the battery will be not so good.
                    </p>

                        <li class="section30 col-md-12 common_p">
                           <strong> 48V Lithium Ion Battery Price Estimation Formula</strong><br>
                            The price of a single lithium battery cell is X (3.6~3.7V*n= 48V) *m (the number of parallel connection cells) + the price of PCM + the price of case + the price of auxiliary materials
                        </li>



                    <p class="section20">Generally, the voltage of a single lithium cell is 3.6-3.7V, and its price will vary due to the different materials and processes used by lithium battery manufacturers.</p>
                </div>


                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery Pack</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        48V Lithium Ion Battery Pack Model Table
                    </p>
                </div>
                <div class="common_p section20 tabel-section">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Type</td>
                            <td>Battery Specification</td>
                            <td>Cell Model</td>
                            <td>Connection Modes</td>
                            <td>Dimension(mm)</td>
                            <td>Weight(Kg)</td>
                        </tr>
                        <tr>
                            <td rowspan="8">Lithium Iron Phosphate</td>
                            <td>48v 10ah</td>
                            <td>26650/3.2V/10Ah</td>
                            <td>26650-15S3P</td>
                            <td>245×145×90</td>
                            <td>5.0</td>
                        </tr>
                       <tr>
                           <td>48v 14ah</td>
                           <td>26650/3.2V/3.5Ah</td>
                           <td>26650-15S4P</td>
                           <td>290×175×75</td>
                           <td>5.5</td>
                       </tr>
                        <tr>
                            <td>48v 20ah</td>
                            <td>LA148F20C/3.2V/20Ah</td>
                            <td>LA148F20C-15S1P</td>
                            <td>470×350×90</td>
                            <td>16.0</td>
                        </tr>
                        <tr>
                            <td>48v 25ah</td>
                            <td>26650/3.2V/3200mAh</td>
                            <td>26650-15S8P</td>
                            <td>300×250×150</td>
                            <td>16.0</td>
                        </tr>
                        <tr>
                            <td>48v 28ah</td>
                            <td>26650/3.2V/3.5Ah</td>
                            <td>26650-15S8P</td>
                            <td>530×235×133</td>
                            <td>16.0</td>
                        </tr>
                        <tr>
                            <td>48v 40ah</td>
                            <td>26650/3.2V/3.3Ah</td>
                            <td>26650-15S12P</td>
                            <td>420×265×140</td>
                            <td>35.0</td>
                        </tr>
                        <tr>
                            <td>48v 50ah</td>
                            <td>26650/3.2V/3.2Ah</td>
                            <td>26650-15S16P</td>
                            <td>451×415×133</td>
                            <td>30.0</td>
                        </tr>
                        <tr>
                            <td>48v 100ah</td>
                            <td>26650/3.2V/3.3Ah</td>
                            <td>26650-15S34P</td>
                            <td>620×325×240</td>
                            <td>55.0</td>
                        </tr>

                        <tr>
                            <td rowspan="3">Ternary</td>
                            <td>48v 12ah</td>
                            <td>18650/3.6V/3.5Ah</td>
                            <td>18650-13S3P</td>
                            <td>160×140×65</td>
                            <td>2.0</td>
                        </tr>

                        <tr>
                            <td>48v 60ah</td>
                            <td>18650/3.6V/3.35Ah</td>
                            <td>18650-13S18P</td>
                            <td>300×270×155</td>
                            <td>15.0</td>
                        </tr>
                        <tr>
                            <td>48v 80ah</td>
                            <td>18650/3.6V/3.35Ah</td>
                            <td>18650-13S24P</td>
                            <td>400×400×100</td>
                            <td>20.0</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <div class="link_title size2 section" id="battery-cell"><h3>48V Lithium Ion Battery Pack Recommendation</h3></div>
                <div class="products_list">
                    <ul>
                        <?php foreach (Yii::$app->params['products'] as $key=>$value):?>
                            <li class="<?= $key==0?'section30':'section60'?>">
                                <div class="item">
                                    <?php if ($key%2==0) :?>
                                        <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                    <?php endif?>
                                    <?php if ($key%2!=0) :?>
                                        <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                    <?php endif?>
                                    <div class="text col-md-7">
                                        <div class="des light1-8 section60"><p><?=$value['diy_content']?></p></div>
                                        <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                    </div>

                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery Charger</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        A 48V lithium ion battery charger is designed to charge a lithium ion battery at a nominal voltage of 48V. Lithium ion battery has a high requirement on charger and needs protection circuit. Therefore, lithium ion battery charger usually has a high control precision and can charge lithium ion battery at constant current and constant voltage.
                    </p>
                    <p class="section20">
                        Li-ion battery charger has overvoltage protection and temperature protection. It is externally connected with current-limiting type charging power supply and P-channel mosfet, which can carry out safe and effective quick charging for single li-ion battery cell. The biggest characteristic is that it can achieve very low power dissipation without inductance. It has 8-pin μMAX package. The charging control precision reaches 0.75%, which can realize pre-charging. The maximum charging time limit provides secondary protection for lithium ion battery. The floating charging mode of lithium ion battery charger can maximize the battery capacity.
                    </p>
                </div>
                <div class="link_title size2 section60" ><h3>47.5V 4A LiFePO4 Battery Charger</h3></div>

                <div class="common_p section30">
                    <ul class="light1-8">
                        <li><strong>Input voltage：</strong>100-240V,50-60Hz</li>
                        <li><strong>Output voltage：</strong>47.5V</li>
                        <li><strong>Input current：</strong>4A</li>
                        <li><strong>Product application：</strong>thirteen 41V cells series connection LiFePO4 battery pack</li>
                        <li><strong>Product dimension：</strong>178*80*46mm</li>
                        <li><strong>Product weight：</strong>0.8kg/pcs</li>
                        <li><strong>Safety standard：</strong>UL1012 IEC60335 IEC61558</li>
                        <li><strong>Passed certificate：</strong>UL、cUL、GS、CE、ROHS、REACH、SAA、PSE、CCC</li>
                        <li><strong>Product features:</strong>reverse connection/overload/overcurrent/short circuit/high temperature automatic protection, dual-track charging, automatic capture and track of battery voltage, locking charging current, temperature rise sensor, step down stay, discolor LED displaying charging status</li>
                    </ul>
                </div>
                <div class="common_p section30">
                    <div class="img text-center"><img src="/static/images/column_48v_1.jpg" alt=""></div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery PCM</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        48V lithium ion battery PCM is the protection of the circuit board. It is mainly composed of electronic circuits, and accurately monitor the cell voltage, the charging and discharging circuit current at -40℃ to +85℃ at all times to timely control the current circuit on and off.
                    </p>
                    <p class="section20">
                        The lithium ion battery PCM can play the role of charging and discharging protection for the series and parallel connection battery packs, and can detect the overvoltage, overcurrent, over temperature, under voltage and short circuit state of each single battery cell in the battery pack, so as to extend the service life and avoid damage due to over discharge. The PCM is an indispensable part of lithium ion battery.
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery BMS</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        48V lithium ion battery management system (BMS) determines the status of the battery system by detecting the state of each lithium ion battery cell, and improves strategy implementation according to battery status, so as to ensure that the lithium ion battery charging and discharging management system operates safely and stably.
                    </p>
                    <div class="img text-center section55"><img src="/static/images/column_48v_2.jpg" alt=""></div>
                </div>
                <div class="common_title size1 section" ><h2 class="light1-5">The Characteristics of 48V Lithium Ion Battery BMS</h2></div>
                <div class="common_p section30">
                    <ul>
                        <li>The li-ion battery management system is composed of CPU, voltage and temperature acquisition module, current acquisition module and communication interface module.</li>
                        <li class="section20">It can detect and display the total voltage, total current and storage quantity of lithium ion battery pack. The voltage of any single cell and the temperature of the cell box; Maximum and minimum battery voltage and battery number, maximum and minimum temperature, battery charging and discharging current.</li>
                        <li class="section20">The host machine of lithium ion battery also provides alarm function and can control output interface, which can alarm and control output for overvoltage, under voltage, high temperature, low temperature, overcurrent and short circuit.</li>
                        <li class="section20">It has RS232 and CAN bus interface, and can directly read all information on the lithium ion battery management system on the computer.</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery Caution</h2></div>
                <div class="common_p section55">
                    <ul>
                        <li>Lithium ion battery should be kept in 50%-60% charge state when stored for a long time, and should be recharged once every 3 months, and charged and discharged once every half a year.</li>
                        <li class="section20">During transportation, pay attention to damp proof and moisture proof, avoid extrusion, collision, etc., so as to prevent damage of lithium ion battery.</li>
                        <li class="section20">Don't use or place lithium ion batteries at high temperatures (in hot sunlight or in very hot cars), otherwise the batteries may overheat, catch fire or fail to work and shorten their life.</li>
                        <li class="section20">Do not store in the place with great static electricity and magnetic field, otherwise, it is easy to destroy the battery safety protection device.</li>
                        <li class="section20">If the lithium ion battery has peculiar smell, heat, discoloration, deformation or any abnormality during use, storage or charging, remove the battery from the device or charger and stop using.</li>
                    </ul>
            </section>

            <section>
                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery and Lead Acid Battery Comparison</h2></div>
                <div class="common_p section55">
                    <ul>
                        <li>
                            <strong>Weight Energy Density</strong><br>
                            At present, the energy density of lithium ion battery is generally 200~ 260wh/g, and lead acid is generally 50~ 70wh/g. The weight energy density of lithium ion battery is 3~5 times of that of lead acid, which means that the capacity of lithium ion battery is three to five times larger than that of lead acid battery with the same weight. Therefore, lithium ion battery has absolute advantages in energy storage.
                        </li>
                        <li class="section20">
                            <strong>Volume Energy Density</strong><br>
                            Lithium ion batteries are about 30 percent smaller than lead acid batteries with the same capacity because lithium ion batteries are about 1.5 times volume energy density as lead acid batteries.
                        </li>
                        <li class="section20">
                            <strong>Cycle Life</strong><br>
                            At present, the most popular lithium battery materials are ternary lithium and lithium iron. For example, ternary lithium batteries typically have 1,000 cycles, lithium iron phosphate batteries have more than 2,000 cycles, and lead acid batteries usually have 300-350 cycles. That means lithium batteries have a life span of about 3-6 times that of lead-acid batteries.
                        </li>
                        <li class="section20">
                            <strong>Cost</strong><br>
                            Lead acid batteries are currently cheaper than lithium ion batteries. It costs about three times as lithium ion batteries. However, as for cycle life analysis, lithium ion batteries can last longer with the same cost.
                        </li>
                        <li class="section20">
                            <strong>Environmental Protection</strong><br>
                            Lead acid batteries are seriously polluted, and lithium ion batteries are more environmental friendly in production and recycling.
                        </li>
                    </ul>
                </div>
                <div class="common_p">
                    <div class="img text-center section55"><img src="/static/images/column_48v_3.jpg" alt=""></div>
                </div>
            </section>
            <section>
                <div class="common_title size1 section80" ><h2 class="light1-5">48V Lithium Ion Battery FAQ</h2></div>

                <div class="link_title size2 section55"><h3>1.48V Lithium Ion Battery Charging and Discharging Concerns</h3></div>
                <div class="common_p section30">
                    <ul class="light1-5">
                        <li>Charge in strict accordance with standard time and procedures.</li>
                        <li>When the lithium ion battery leaves the factory, it is generally in a half power state, so the battery must be fully charged for the first use.</li>
                        <li>Use the original charger. The original charger has good performance and moderate charging rate.</li>
                        <li>Do not often use until the under voltage protection circuit to come into effect before charging. It is wrong to charge after fully discharge. The larger the discharge depth, the more times of power loss, the shorter the service life of the lithium ion battery has.</li>
                    </ul>
                </div>

                <div class="link_title size2 section55"><h3>2.How many kilometers does a 48V lithium ion battery run with full charge?</h3></div>
                <div class="common_p section30">
                    <p>48V lithium ion battery life is related to capacity of the battery (Ah) and electric motor power (W). Now electric bicycle on the market with national standards normally use 48V 12Ah lithium ion battery and 350W motor. As the technical development of the battery, they can range up to 50 km, and the actual life depends on the weight of passenger and carrier.</p>
                    <p class="section20">How many kilometers a 48V lithium ion battery can run at full power depend on battery capacity, motor power, and load. In general, a 48V 12Ah, 350W lithium ion battery can run 50km. 48V 20Ah battery can run 70km. A 72V 22Ah lithium ion battery can run 90km.</p>
                </div>

                <div class="link_title size2 section55"><h3>3.How many hours does it take to charge a 48V lithium ion battery?</h3></div>
                <div class="common_p section30">
                    <p>Charging time has little to do with voltage;</p>
                    <p class="section20">It is related to the capacity of the lithium ion battery and the power of the charger, <strong>charging time = lithium ion battery capacity ÷ charging current</strong></p>
                    <p class="section20">For example, 48V 20Ah lithium ion battery uses a normal 48V 2A charger, so the theoretical charging time is 2 hours, that is, 20Ah÷10A=2h, but in practice, constant current change to constant voltage mode during charging. The last trickle charging takes a long time. It usually takes about 3 hours. Similarly, using 48V 5A charger requires 20Ah÷5A=4h, but it has trickle charging time, too. It is about 5 hours.</p>
                </div>

                <div class="link_title size2 section55"><h3>4.What if you cannot charge 48V lithium ion battery?</h3></div>
                <div class="common_p section30">
                    <ul class="light1-5">
                        <li>Check whether the charger output parameters are normal, including voltage, current, etc.</li>
                        <li>Check whether the charger circuit is normal, and whether the connection is broken.</li>
                        <li>Check whether the lithium ion battery is broken, and you can test the battery open circuit voltage.</li>
                        <li>Consult lithium ion battery manufacturers.</li>
                    </ul>
                </div>

                <div class="link_title size2 section55"><h3>5.The difference between 48V 13 series connection and 14 series connections</h3></div>
                <div class="common_p section30">
                    <ul class="light1-5">
                        <li>Ternary battery has 13 or 14 series connections, while lithium iron phosphate battery has 16 series connections.</li>
                        <li>13 series ternary battery has lower 48V discharge platform and low speed, while 14 series ternary battery is better.</li>
                        <li>13 series full voltage 13*4.2=54.6V, nominal voltage 13*3.7=48.1V, cut-off voltage 13*3.2 = 41.6V</li>
                        <li>14 series full voltage14*4.2=58.8V, nominal voltage 14*3.7=51.8V, cut-off voltage 14*3.2 = 44.8V</li>
                        <li>13 series connection can be better compatible with electric car lead-acid battery, normal electric car lead-acid battery is 12*4= 48V, cut-off voltage 10.5*4 =42V</li>
                        <li>48V 13 series connection is different from 48V 14 series connection. They are not universal. Some charger can adjust the voltage to be used.</li>
                    </ul>
                </div>

            </section>

        <div>
            <div class="container">
                <section>
                    <div class="fengxian section col-md-12">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </section>
                <section class="section section_m col-md-12">
                    <?php $this->beginContent('@app/views/layouts/public/send_email.php') ?>
                    <?php $this->endContent()?>
                </section>
        </div>
    </div>


</div>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c344a1f093e83001145111b&product=inline-share-buttons' async='async'></script>
