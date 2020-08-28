<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
$product_list = [
    ['title'=>'12V Low Temperature Lithium Battery','img_url'=>'/static/images/column_12v_product_1.jpg','url'=>'/low-temperature-battery/list-133/',
        'des'=>'Charging temperature：0℃ ~ +45℃<br> Discharging temperature：-40℃ ~ +60℃<br>Application: special equipment, aerospace, polar scientific research, frigid zone emergency, etc.'],

    ['title'=>'12V Explosion-proof Lithium Battery','img_url'=>'/static/images/column_12v_product_2.jpg','url'=>'/explosion-proof-battery/list-139/',
        'des'=>'Intrinsic safety type/Explosion-proof type<br>High safety coefficient materials<br>Meet Exia iiA/Exib iiB T1~T4 standard.'],

    ['title'=>'12V Wide Temperature Lithium Battery','img_url'=>'/static/images/column_12v_product_3.jpg','url'=>'/wide-temperature-battery/list-133/',
        'des'=>'Working temperature range: -50℃~70℃<br>-40℃ capacity retention ratio: ≥90%<br>-50℃ capacity retention ratio: ≥70%'],



    ['title'=>'12V Lithium Power Battery','img_url'=>'/static/images/column_12v_product_4.jpg','url'=>'/lithium-power-battery/list-133/',
        'des'=>'High Rate Discharge<br>High Energy Density<br>Longer Cycle Life and Safer'],

    ['title'=>'12V Lifepo4 Battery','img_url'=>'/static/images/column_12v_product_5.jpg','url'=>'/lifepo4-battery/list-133/',
        'des'=>'High thermal stability<br>Outstanding safety performance<br>Nice high rate discharge performance'],

    ['title'=>'12V Medical Lithium Battery','img_url'=>'/static/images/column_12v_product_6.jpg','url'=>'/lithium-ion-battery/list-133-166/',
        'des'=>'High energy density, small size and light weight<br>Low self-consumption and long service life<br>Maximum reliability and maximum safety'],



    ['title'=>'12V Energy Storage Battery','img_url'=>'/static/images/column_12v_product_7.jpg','url'=>'/energy-storage-battery/list-133/',
        'des'=>'Emergency Energy Storage Battery<br>Large voltage, large capacity and long cycle life<br>Solar energy storage, military portable power supply and emergency backup power supply'],

    ['title'=>'12V Lithium Polymer Battery','img_url'=>'/static/images/column_12v_product_8.jpg','url'=>'/lithium-polymer-battery/list-133/',
        'des'=>'Higher energy density<br>Better safety performance<br>Flexible Design'],

    ['title'=>'12V Lithium Titanate Battery','img_url'=>'/static/images/column_12v_product_9.jpg','url'=>'/lithium-titanate-battery/list-133/',
        'des'=>'Super safe, high rate and long life<br>Charging rate：1~40C<br>Discharge rate：1~40C'],
];
    //第二类产品
    $products = [];
    $product_ids_1 = ['690','834','736'];
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

<div class="battery-12v column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs" src="<?=Yii::getAlias('@web/static/images/column_12v_banner.jpg')?>" alt="12V Lithium Battery Guide" title="12V Lithium Battery Guide">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_12v_banner_m.jpg')?>" alt="12V Lithium Battery Guide" title="12V Lithium Battery Guide">
        </div>
        <div class="text center-text">
            <h1 class="big-size">12V Lithium Battery Guide</h1>
        </div>
    </div>
    <div class="col-md-12">
        <div class="container">
            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">What is a 12V Lithium Battery?</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        12V lithium battery is a lithium battery pack composed of 3 or 4 lithium batteries in series. The capacity of the battery is determined by the capacity of the single cell and the number of cells in parallel. It is a new kind of safe and environmental rechargeable battery.
                    </p>

                </div>
            </section>
            <section class="m_section0">
                    <div class="products_list_other">
                        <ul class="ul_li_padding">
                                <?php foreach ($product_list as $key=>$value):?>
                                    <?php if ($key%2==0):?>
                                    <div class="row">
                                    <?php endif;?>
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
                                    <?php if (($key+1)%3==0):?>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>

                        </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">12V Lithium Battery Classification</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        12V lithium batteries are divided into 12V lithium ion battery, 12V lithium iron phosphate battery, 12V cylindrical lithium battery and 12V lithium polymer battery according to the materials and packaging.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>1.12V Lithium Ion Battery</h3></div>
                <div class="common_p section30">
                    <p class="small-size section5">
                        A 12V lithium-ion battery is connected in series by three or four lithium-ion batteries. The capacity of the battery pack depends on the capacity of a single cell, or the capacity of the batteries in parallel. It is a new kind of safe and environmental protection battery.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>Battery capacity</strong></li>
                    <p class="small-size section5">
                        There is no standard capacity. It is determined according to the specific requirements of electrical appliances or equipment. The general capacity is: 2200mAh, 5Ah, 10Ah. Some electric vehicles can reach 20Ah, or 50Ah. The more batteries are connected in parallel, the larger the capacity is.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>Volume</strong></li>
                    <p class="small-size section5">
                        12V lithium battery volume depends on the battery capacity, and it has no uniform specification. The bigger the battery, the larger the volume is.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>Weight</strong></li>
                    <p class="small-size section5">
                        Nowadays, a lot of equipment needs a large capacity, light weight lithium battery. Take electric cars for example, they used to use lead-acid batteries, but now many electric cars change into lithium batteries because of the large capacity, light weight and small volume.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>Charging and discharging current</strong></li>
                    <p class="small-size section5">
                        The charging and discharging current of a lithium battery is determined by the power of the device. On the basis of constant voltage, the more power the device has, the more current it needs to output.
                    </p>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2.12V LiFePO4 Battery</h3></div>
                <div class="common_p section30">
                 <p>12V lithium iron phosphate battery is a battery pack consisting of four lithium iron phosphate cells connected in series. Lithium iron phosphate cell is a lithium cell using lithium iron phosphate (LiFePO4) as the positive electrode material. The nominal voltage is 3.2V, the maximum charging voltage of the single cell is less than 3.9V, and the minimum discharge voltage is more than 2.0V.</p>
                </div>
                <div class="common_p section30">
                    <p class="size4 font-weight black_color">12V LiFePO4 Battery Advantages</p>
                </div>
                <div class="common_p section10">
                    <ul>
                        <li>12V lithium iron phosphate battery has long life. Lithium iron phosphate batteries can be used for seven to eight years under the same conditions.</li>
                        <li>Safe usage: 12V lithium iron phosphate batteries have passed rigorous safety tests and will not explode even in a traffic accident.</li>
                        <li>Fast charge: The battery can be fully charged after 40 minutes of 1.5C charging by using a special charger.</li>
                        <li>12V lithium iron phosphate battery can withstand high temperature. 12V lithium iron phosphate battery hot air value can reach 350 to 500℃.</li>
                        <li>12V lithium iron phosphate battery is environmental friendly, non-toxic, pollution-free and cheap with wide source of raw materials.</li>
                    </ul>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.12V Lithium Polymer Battery</h3></div>
                <div class="common_p section30">
                    <p>Lithium polymer battery is developed on the basis of liquid lithium ion battery. Its anode and cathode materials are the same as liquid lithium ion battery, but it uses gel electrolyte and aluminum plastic film for outer packing. Polymer lithium battery is also known as LiPo battery.</p>
                    <p class="section10">12V lithium polymer battery has a nominal voltage of 12V and is widely used in digital products, power tools, special wearable devices, etc.</p>
                </div>
                <div class="common_p section30">
                    <p class="size4 font-weight black_color">12V Lithium Polymer Battery Advantages</p>
                </div>
                <div class="common_p section10">
                    <ul>
                        <li>Higher energy density</li>
                        <li>Better safety performance</li>
                        <li>Flexible design and customable appearance</li>
                        <li>Nice discharge performance</li>
                        <li>Simple PCM design</li>
                    </ul>
                </div>

                <div class="common_p section60">
                    <div class="img"><img src="/static/images/column_12v_1.jpg" alt=""></div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">12V Lithium Ion Battery Price</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        12 V lithium battery price mainly composes of cell, PCM and case. At the same time due to the power consumption and current of the electric appliances, the material of the connection strap between the cells (conventional nickel sheet, forming nickel, copper nickel clad sheet, jumper, etc.) will affect the cost. Different connector (such as aviation plugs, from ten yuan to thousands of yuan) may affect the cost a lot. What’s more, different pack technology can also affect the cost.
                    </p>

                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>The factors affecting 12V Lithium Ion Battery Price</h3></div>
                <div class="common_p section30">
                    <li><strong>Cell</strong></li>
                    <p class="small-size section5">
                        Due to different anode material of lithium ion batteries is, there will be lithium manganese (3.6 V), lithium cobalt oxides (3.7 V / 3.8 V), NCM (3.6 V), lithium iron phosphate (3.2 V), lithium titanate (2.3 V / 2.4 V) and other material system. The batteries with different material system have different voltage platform, safety coefficient, recycling times, energy density ratio and working temperature, so it have different prices.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>Brand</strong></li>
                    <p class="small-size section5">
                        Different lithium battery brands have obviously different prices, mainly because the quality of brand cell (safety, consistency, stability, production process, etc.) is basically proportional to the price.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>Capacity</strong></li>
                    <p class="small-size section5">
                        In the case that 12V lithium battery voltage is determined, the larger the capacity, the higher the cost will be, and the higher the price will be.
                    </p>
                </div>

                <div class="common_p section30">
                    <li><strong>PCM quality and circuit design</strong></li>
                    <p class="small-size section5">
                        Good quality lithium battery use high quality electronic components and PCM. It also has multiple protection circuit design to improve the charge and discharge circuit, and has the design of constant temperature, constant voltage, overcharge, over discharge, over current and short circuit, etc. to create a safe environment for you and be good for the use of your equipment, so the price will be affected by the above factors.
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">12V Lithium Battery Pack</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        A 12V lithium battery pack is a lithium battery pack consisting of three or four lithium batteries in series and several lithium batteries in parallel, so the capacity of a 12V lithium battery can be customized.
                    </p>
                </div>
                <div class="common_p section30">
                    <li><strong>Common Capacity of 12V Lithium Battery Pack</strong></li>
                    <p class="small-size section5">
                        4Ah, 5Ah, 7Ah, 8Ah, 9Ah, 10Ah, 12Ah, 17Ah, 18Ah, 20Ah, 30Ah，40Ah, 50Ah, 100Ah, 200Ah, etc.
                    </p>
                </div>
                <div class="common_p section30">
                    <li><strong>12V DC Lithium Battery</strong></li>
                    <p class="small-size section5">
                        12V DC lithium battery stabilizes the output voltage at about 12V through the conversion of boosted/step-down circuit, so as to meet the requirement of constant voltage working equipment. It is a DC battery with standard specifications. It has universal and compatible characteristics, which can be changed to meet the requirements of different electrical equipment.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>12V Large Capacity Lithium Battery Recommendation</h3></div>
                <div class="products_list">
                    <ul>
                        <?php foreach (Yii::$app->params['products'] as $key=>$value):?>
                            <li class="<?=$key==0?'section30':''?> section60">
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
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">12V Lithium Battery Applications</h2></div>
                <div class="common_p section60">
                    <ul>
                        <li><strong>Lighting industry</strong>: solar street lamp, solar insecticidal lamp, solar yard lamp, solar energy storage power supply, etc.</li>
                        <li><strong>Power field</strong>: power tools, robot, AGV, vacuum cleaner, electric sprayer, RC, etc.</li>
                        <li><strong>Consumer electronics</strong>: Bluetooth speaker, loudspeaker, LED and various electronic equipment, etc.</li>
                        <li><strong>Energy storage</strong>: communication base station, data center, home energy storage, wind power storage, photovoltaic power generation, etc.</li>
                        <li><strong>Special fields</strong>: medical equipment, security power, special equipment, etc.</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">12V Lithium Battery Charger</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        12V lithium battery charger is specially designed to charge the 12V lithium battery. Lithium ion battery has a high requirement on charger and needs protection circuit. Therefore, lithium battery charger usually has a high control precision and can charge lithium ion battery at constant current and constant voltage.
                    </p>
                </div>
                 <div class="products_list_other section30 charger">
                        <ul class="ul_none">
                            <li class="">
                                <div class="item">
                                    <div class="col-md-3 col-sm-12 section30"><a target="_blank" href="/product/8ju43de.html"><img src="https://www.large.net/static/images/column_12v_product_other_1.jpg" alt="12.6V 7A Lithium Battery Charger" title="12.6V 7A Lithium Battery Charger"></a></div>
                                    <div class="text col-md-9 col-sm-12">
                                        <div class="des light1-8 section30 m_section0"><p><span><a href="/product/8ju43de.html">12.6V 7A Lithium Battery Charger</a></span>
                                                <span>Input voltage：100-240V，50-60Hz</span>
                                                <span>Output voltage：12.6V</span>
                                                <span>Output current：7A</span>
                                                <span>Product application： Three 11.1V lithium battery packs connected in series</span></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="section30">
                                <div class="item">
                                    <div class="col-md-3 col-sm-12 section30"><a target="_blank" href="/product/8pu43dc.html"><img src="https://www.large.net/static/images/column_12v_product_other_2.jpg" alt="11.1V 5A LiFePO4 Battery Charge" title="11.1V 5A LiFePO4 Battery Charge"></a></div>
                                    <div class="text col-md-9 col-sm-12">
                                        <div class="des light1-8 section30 m_section0"><p><span><a href="/product/8pu43dc.html">11.1V 5A LiFePO4 Battery Charger</a></span>
                                                <span>Input voltage：100-240V，50-60Hz</span>
                                                <span>Output voltage：11.1V</span>
                                                <span>Charging temperature: 0 ~ 45℃</span>
                                                <span>Output current：5A</span></p>
                                                <span>Product application：Three 9.6V LiFePO4 Battery connected in series</span></p>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>12V Lithium Battery and Lead Acid Battery Charger</h3></div>
                <div class="common_p section30">
                    <p>
                        Lead acid battery charger is generally set to two or three stage charging mode. 12V lithium battery and lead acid battery voltage level is not matched. There are different kinds of lithium battery. Battery performance and battery PCM parameters may not be the same. Therefore, unlike lead acid batteries, there is no universal battery charger. Generally speaking, 12V lithium battery is equipped with a special charger, in order to protect the lithium battery, it is better to use the corresponding lithium battery special charger.
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">12V Lithium Battery Cautions</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.12V Lithium Battery Charging</h3></div>
                <div class="common_p section30">
                    <ul>
                        <li class="col-md-12">
                            <p><strong>Charging Method</strong></p>
                            <p>
                                The charger used for 12V lithium battery charging should conform to the characteristics of three stages lithium battery charging, which need to have and complete three stages of pre-charging, constant current charging and constant voltage charging. For this reason, the original 12V lithium battery charger is better. When the original charger is damaged, do not blindly buy other chargers to charge the 12V lithium battery.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p><strong>Ambient temperature</strong></p>
                            <p>
                                When charging 12V lithium battery, the ambient temperature should not exceed 0~40℃.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p><strong>Charging cutoff voltage</strong></p>
                            <p>
                                12V lithium polymer battery charging cutoff voltage is 12.6V. Balanced charging mode is needed to ensure that the voltage of single cell will not exceed 4.2V.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p><strong>Charging current</strong></p>
                            <p>
                                If it is not urgent, it can be charged with 0.2C, and the current generally cannot exceed 1C.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.12V Lithium Battery Discharging</h3></div>
                <div class="common_p section30">
                    <ul>
                        <li class="col-md-12">
                            <p><strong>Ambient temperature</strong></p>
                            <p>
                                Discharge state is the working state of 12V lithium battery, and the temperature is required to be -20~60℃.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p><strong>Discharge cut-off voltage</strong></p>
                            <p>
                                12V lithium polymer battery discharge cut-off voltage standard is 8.25V. Some can be set to 9V.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p><strong>Discharge current</strong></p>
                            <p>
                                12V lithium polymer battery also has large current, large capacity and other types. Lithium polymer battery that can carry out high power discharge needs to control the current within the scope of the product specifications.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p><strong>Charging current</strong></p>
                            <p>
                                If it is not urgent, it can be charged with 0.2C, and the current generally cannot exceed 1C.
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.12V Lithium Battery Self-discharge</h3></div>
                <div class="common_p section30">
                    <p>
                        It is better for 12V lithium ion battery to store 40 to 60 percent power, which, of course, is impossible to maintain all the time. Mobile phone, for example, usually is used until it is prompted to charge. 12V lithium battery will also be affected by self-discharge. Long-term self-discharge will cause over discharge, therefore, we need to make preparations for 12V lithium battery self-discharge.
                    </p>
                </div>
                <div class="common_p section30">
                    <ul>
                        <li class="col-md-12 col-xs-12">
                            <p><strong>Regular charging</strong></p>
                            <p>
                                Charge the 12V lithium battery regularly to keep the voltage between 10.8V and 11.7V. The lithium battery has no memory effect and can be charged at any time.
                            </p>
                        </li>
                        <li class="col-md-12 col-xs-12 section30">
                            <p>
                                Make sure that the discharge cut-off voltage is not within the working range. If it has insufficient power, you need to stop using decisively and charge the battery.
                            </p>
                        </li>

                    </ul>
                </div>

            </section>
            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Lithium Battery VS Lead Acid Battery</h2></div>
                <div class="common_p section30">
                    <p class="small-size section5">
                        Since the appearance of lithium battery, it has gradually replaced the market position of lead acid battery. The most widely used 12V battery has also changed from lead acid to lithium battery. So what are the advantages of lithium battery compared with lead-acid battery?
                    </p>
                </div>
                <div class="common_p section30">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Item</td>
                            <td>Lithium Battery</td>
                            <td>Lead Acid Battery</td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td>Light Weight and Good Portability</td>
                            <td>Heavy Weight and Not Easy to Carry Out</td>
                        </tr>
                        <tr>
                            <td>Environmental Friendly</td>
                            <td>No Pollution</td>
                            <td>Contain Plenty of Heavy Metal</td>
                        </tr>

                        <tr>
                            <td>Service Life</td>
                            <td>Long Life</td>
                            <td>Short Life</td>
                        </tr>

                        <tr>
                            <td>Charge</td>
                            <td>Fast Charge</td>
                            <td>Slow Charge</td>
                        </tr>

                        <tr>
                            <td>Energy Density</td>
                            <td>High Energy Density</td>
                            <td>Only a Quarter of That of Lithium Battery</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </section>


    </div>
    </div>

</div>
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

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c344a1f093e83001145111b&product=inline-share-buttons' async='async'></script>
