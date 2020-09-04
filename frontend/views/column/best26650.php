<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
//该文章的电芯产品
$products = [];
$ids_18650 = ['1113','1114','1115','1116','1117'];
foreach ($ids_18650 as $id) {
    $products[] = \common\models\Images::find()->where(['id' => $id])->one();
}
$list = [
    [
        'imagesUrl'=>'/static/images/column_26650_p1.png',
        'url'=>'https://www.large.net/low-temperature-battery/list-147/',
        'title'=>'26650 Low Temperature Lithium Ion Battery',
        'diy_content'=>'
                <span><a>26650 Low Temperature Lithium Ion Battery</a></span>
                <span>Good low temperature performance</span>
				<span>Charging temperature：0℃ ~ +45℃</span>
                <span>Discharging temperature：-40℃ ~ +60℃</span>
                <span>Application field: special equipment, </span>
                <span>aerospace industry, polar science </span>
                <span>exploration, frigid zone emergency, etc. </span>
                '
    ],
    [
        'imagesUrl'=>'/static/images/column_26650_p2.png',
        'url'=>'https://www.large.net/energy-storage-battery/list-144/',
        'title'=>'26650 Energy Storage Lithium Ion Battery',
        'diy_content'=>'
                <span><a>26650 Energy Storage Lithium Ion Battery</a></span>
                <span>Large capacity</span>
                <span>Emergency energy storage lithium ion battery
                Large voltage, large capacity, long cycle life
                Solar energy storage, military portable power 
                supply, emergency backup power</span>

                '
    ],
    [
        'imagesUrl'=>'/static/images/column_26650_p3.png',
        'url'=>'https://www.large.net/lithium-power-battery/list-144/',
        'title'=>'26650 Power Lithium Ion Battery',
        'diy_content'=>'
                <span><a>26650 Power Lithium Ion Battery</a></span>
                <span>Large capacity and large power</span>
                <span>High energy density</span>
                <span>Long cycle life</span>
                <span>Good safety performance</span>

                '
    ],
    [
        'imagesUrl'=>'/static/images/column_26650_p4.png',
        'url'=>'https://www.large.net/lifepo4-battery/list-144/',
        'title'=>'26650 LiFePO4 Battery',
        'diy_content'=>'
                <span><a>26650 LiFePO4 Battery</a></span>
                <span>Large Capacity</span>
                <span>Nice hot stability</span>
                <span>Advanced safety</span>
                <span>Outstanding high rate discharge performance</span>

                '
    ],
];
foreach ($list as $item){
    $products[] = $item;
}
foreach ($products as &$product) {
    $product['diy_content'] = str_replace("<a",'<a href="'.$product['url'].'"',$product['diy_content']);
}

Yii::$app->params['products'] = $products;
?>
<div class="column-best-26650 column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs" src="<?=Yii::getAlias('@web/static/images/column_26650_banner.jpg')?>" alt="Best 18650 Lithium Battery Pack">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_26650_banner_m.jpg')?>" alt="Best 18650 Lithium Battery Pack">
        </div>
        <div class="text center-text"><h1 class="big-size">The Best 26650 Lithium Ion Battery</h1></div>
    </div>

    <div class="col-md-12">
        <div class="container">
            <section class="col-md-12">
				<div class="link_title size2 section" id=""><h3>26650 Lithium Ion Battery Recommendation</h3></div>
                <div class="products_18650 col-md-12">
                    <ul>

                        <?php foreach (Yii::$app->params['products'] as $key=>$value):?>
                            <?php if ($key==0 || ($key+1)%3==0): ?> <div class="row"><?php endif;?>
                            <li class="col-md-4 <?= $key<3?'section30':'section60'?> <?= $key==0?'':'m_section60'?>">
                                <div class="item">
                                    <div class="img"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net<?= is_array($value['imagesUrl'])?$value['imagesUrl'][0]:$value['imagesUrl']?>" alt="<?=$value['title']?>"></a></div>
                                    <div class="text section20 light1-8 ">
                                        <p><?=$value['diy_content']?></p>
                                    </div>
                                </div>
                                <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                            </li>
                            <?php if ((count(Yii::$app->params['products'])-1)==$key || $key%3==2): ?></div><?php endif;?>

                        <?php endforeach;?>

                    </ul>
                </div>
            </section>




            <section class="section">
                <div class="common_title " id="what-is-an-18650"><h2 class="light1-5 size1">26650 Lithium Ion Battery</h2></div>

                <div class="link_title size2 section60" id="the-best-18650-battery-cell"><h3>1.26650 Lithium Ion Battery Definition</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        26650 is a cylindrical lithium battery specification. 26650 battery is applicable to special equipment, medical equipment, instruments, power tools, logistics, security monitoring, exploration and mapping, etc.
                    </p>
                    <p>26650 lithium battery dimension: The diameter is 26mm, and length is 65mm.</p>
                </div>


                <div class="link_title size2 section60" id="the-beast-18650-cell-battery-brands"><h3>2.26650 Lithium Ion Battery Advantages</h3></div>
                <div class="common_p section30">
                    <p>
                        26650 lithium battery has high energy density, low self-discharge rate, stable charging and discharging performance, no memory effect, no decomposition in heat, high safety performance, long life cycle and high voltage. You can connect 26650 lithium battery in series or in parallel. It is environmental friendly and has no pollution.
                    </p>
                </div>

                <div class="link_title size2 section60" id="the-beast-18650-cell-battery-brands"><h3>3.Single 26650 Lithium Ion Battery Cell</h3></div>
                <div class="common_p section30">
                    <p>
                        26650 lithium battery materials are mainly divided into ternary materials and lithium iron phosphate materials.
                    </p>
                </div>
                <div class="common_p section30 ">
                    <ul>
                        <li class="light1-8">
                            <p><strong>Voltage</strong></p>
                            <p>
                                INR26650 lithium battery has nominal voltage of 3.6V, full charge voltage of 4.2V, and discharge cut-off voltage of 3.0V.<br>
                                IFR26650 lithium battery has nominal voltage of 3.2V, full charge voltage of 3.65V, and discharge cut-off voltage of 2.0V.
                            </p>
                        </li>
                        <li class="light1-8 section30">
                            <p><strong>Capacity</strong></p>
                            <p>
                                IFR26650 lithium battery capacity includes 2800mAh, 3000mAh, 3200mAh, 3400mAh, 3600mAh, 3800mAh and 4000mAh.<br>
                                INR26650 lithium battery capacity tends to be 4500mAh, 5000mAh, 5500mAh and 6000mAh.
                            </p>
                        </li>

                    </ul>
                </div>
            </section>

            <section class="section">
                <div class="common_title " id="what-is-an-18650"><h2 class="light1-5 size1">26650 Lithium Ion Battery Positive Electrode Materials</h2></div>

                <div class="common_p section60">
                   <p>
                       26650 lithium battery positive electrode materials include lithium cobalt oxides, lithium manganese, NCA, NCM and lithium iron phosphate. Material system determines the working voltage and single cell capacity. Various materials manufacturers and cell manufacturers improve the overall indexes, such as battery voltage and capacity, by special material adding, coating process and manufacturing process improvement. Working voltage and theoretical capacity of various materials are normally as follow:
                   </p>
                </div>

                <div class="common_p section30">
                    <ul class="light1-8">
                        <li>
                            <p>Lithium cobalt oxides 3.6V, theoretical capacity 274mAh/g</p>
                        </li>
                        <li>
                            <p>Lithium manganese 3.7V, theoretical capacity 148mAh/g</p>
                        </li>
                        <li>
                            <p>Ternary material 3.65V, theoretical capacity 278mAh/g</p>
                        </li>
                        <li>
                            <p>Lithium iron phosphate 3.2V, theoretical capacity 170mAh/g</p>
                        </li>
                        <li>
                            <p>The materials determine the cycle life of the battery, so does the manufacturing level of the battery manufacturer.</p>
                        </li>
                    </ul>
                </div>

                <div class="common_p section60">
                    <p><strong>26650 LiFePO4 Battery Advantages</strong></p>
                </div>
                <div class="common_p section30">
                    <ul class="light1-8">
                        <li>
                            <p>High energy density: theoretical specific capacity 170mAh/g, actual specific capacity ≥140 mAh/g (0.2c, 25°C);</p>
                        </li>
                        <li>
                            <p>High safety: the most secure positive electrode material for lithium ion batteries;</p>
                        </li>
                        <li>
                            <p>No pollution: does not contain any heavy metal elements that are harmful to human body;</p>
                        </li>
                        <li>
                            <p>Long cycle life: it can charge and discharge more than 2000 times under 100%DOD;</p>
                        </li>
                        <li>
                            <p>Fast charging performance: Lithium iron phosphate battery can be charged at high rate.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="section60">
                <section class=" tabel-section">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Item</td>
                            <td>LCO</td>
                            <td>NCM</td>
                            <td>LMO</td>
                            <td>LFP</td>
                        </tr>
                        <tr>
                            <td>Tap Density（g/cm3）</td>
                            <td>2.8~3.0</td>
                            <td>2.0~2.3</td>
                            <td>2.2~2.4</td>
                            <td>1.0~1.4</td>
                        </tr>

                        <tr>
                            <td>Gram Volume (mAh/g)</td>
                            <td>135～140</td>
                            <td>140～180</td>
                            <td>90～100</td>
                            <td>130～140</td>
                        </tr>
                        <tr>
                            <td> (V)Voltage Platform</td>
                            <td>3.7</td>
                            <td>3.6</td>
                            <td>3.7</td>
                            <td>3.2</td>
                        <tr>
                            <td>Cycle Performance</td>
                            <td>≥500Times</td>
                            <td>≥500Times</td>
                            <td>≥300Times</td>
                            <td>≥2000Times</td>
                        </tr>
                        <tr>
                            <td>Safety Performance</td>
                            <td>Bad</td>
                            <td>Good</td>
                            <td>Very Good</td>
                            <td>Advanced</td>
                        </tr>
                        <tr>
                            <td>Applications</td>
                            <td>Medium And Small Size Battery</td>
                            <td>Small Battery/Small Power Battery</td>
                            <td>Power Battery, Low Cost Battery</td>
                            <td>Power Battery/Super Large Capacity Power Supply</td>
                        </tr>

                        </tbody>
                    </table>
                </section>
            </section>
            <section class="section">
                <div class="common_title " id="what-is-an-18650"><h2 class="light1-5 size1">18650 VS 26650</h2></div>

                <div class="common_p section60">
                    <p>
                        Compared with traditional 18650 battery, 26650 lithium battery has a larger capacity in the same material system, and has 52 percent fewer cells than that of 18650 battery. This means that the complexity of the battery management system, the number of metal structures, the volume of the battery, and the cost of the battery system can be significantly reduced for a power battery with the same capacity.
                    </p>
                </div>
                <div class="link_title size2 section60" id="the-best-18650-battery-cell"><h3>What is the difference between 18650 lithium battery and 26650 lithium battery?</h3></div>
                <div class="common_p section30">
                    <ul class="light1-5">
                        <li>
                            <p>Different rated capacity: IFR26650 lithium battery rated capacity is 3000-5000mah, while IFR18650 lithium battery rated capacity is 2200~3200mAh.</p>
                        </li>
                        <li class="section20">
                            <p>Different dimensions: the IFR26650 has a diameter of 26mm and the IFR18650 has a diameter of 18mm.</p>
                        </li>
                        <li class="section20">
                            <p>Different reference mass: the production mass of IFR26650 lithium battery is 94 grams, while the production mass of IFR18650 lithium battery is 45 grams.</p>
                        </li>
                        <li class="section20">
                            <p>Different battery capacities: With the same battery material, the 26650battery capacity is larger than that of 18650. It is assumed that the 26650 battery with ternary material is generally around 5200mAh, while the capacity of 18650 battery is mostly around 2600mAh.</p>
                        </li>
                        <li class="section20">
                            <p>Different application environments; 18650 lithium battery is applied as illuminator battery, industrial supporting lithium battery pack, electric tool battery and electric bicycle battery, which are mostly power lithium battery, while 26650 lithium battery is applied in energy storage base station and solar energy storage.</p>
                        </li>
                        <li class="section20">
                            <p>Different endurance: 26650 battery have a larger volume ratio than 18650 battery, so it has a larger space filling material to achieve a larger capacity. At present, the capacity of 18650 battery has 2200mAh, 2600mAh, 3100mAh, etc., while the capacity of 26650 can achieve 4000mAh, 4200mAh, 4500mAh, and the endurance time will be longer.</p>
                        </li>
                    </ul>
                </div>
                <div class="common_p section60">
                    <div class="img text-center"><img src="/static/images/best_26650_01.jpg" alt=""></div>
                </div>
            </section>


            <section class="section">
                <div class="common_title" ><h2 class="light1-5 size1">26650 Lithium Ion Battery Safety Test</h2></div>

                <div class="link_title size2 section60" ><h3>1、Over Charge</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        After standard battery charging, measure the initial state of the battery. When the battery is in normal state, charge the battery with 3C current to 10.0V, and then charge the battery at constant voltage until the current reaches 0.01c. Observe the appearance change of the battery.
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>

                <div class="link_title size2 section60" ><h3>2、Over Discharge</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        After standard battery charging, measure the initial state of the battery. When the battery is in normal state, discharge it at 0.5C to 0V. Observe the battery appearance change.
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>

                <div class="link_title size2 section60" ><h3>3、External Short Circuit</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        After standard battery charging, measure the initial state of the battery. Put battery in an explosion-proof cover and make it a direct short circuit in its positive and negative electrodes (circuit resistance is no more than 50 m Ω), when the battery temperature is down to about 10 ℃ lower than the peak temperature, the experiment is over. Observe the temperature and appearance of the battery.
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>

                <div class="link_title size2 section60" ><h3>4、Heater Test</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Measure the initial state of the battery. After standard battery charging, put the battery in the heater. The temperature rises to 130±2℃ /min at the rate of (5±2℃) /min, and keep the temperature for 30min. Observe the battery appearance change.
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>

                <div class="link_title size2 section60" ><h3>5、Drop Test</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Test the initial capacity of the battery. After standard charging, measure the initial state of the battery. Drop the test battery vertically and horizontally onto the cement floor freely from a height of 1m (the lowest height).
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>

                <div class="link_title size2 section60" ><h3>6、Impact Test</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Put a steel rod with a diameter of 15.8mm in the middle of the fully charged battery, then a 10Kg hammer was free-falling from a height of 1.0m to the upper part of the battery.
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>

                <div class="link_title size2 section60" ><h3>7、Extrusion Test</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        Put the battery cell between two extrusion surfaces of the extrusion equipment. The cylindrical battery cell axis is parallel to the extrusion surface. Increase the pressure gradually to 13kN, and maintain the pressure for 1min.
                    </p>
                    <p class="section30">Result: No fire, no explosion.</p>
                </div>
            </section>

            <section class="section">
                <div class="common_title" ><h2 class="light1-5 size1">26650 Lithium Ion Battery Charging</h2></div>

                <div class="link_title size2 section60" ><h3>1.26650 Lithium Ion Battery Charging Precautions</h3></div>
                <div class="common_p section30">
                    <ul>
                        <li><p>The basic requirements for charging 26650 lithium battery are specific charging voltage and charging current at each stage. Some auxiliary functions are added to prolong the battery life.</p></li>
                        <li class="section20"><p>In order to ensure the stable and reliable operation of the battery and prevent the interference of transient voltage change, the time delay circuit with over-charge, over-discharge and over-current protection should be designed to prevent the instability caused by transient interference.</p></li>
                        <li class="section20"><p>The factors affecting the safety and effective charging of 26650 lithium battery include voltage, current and temperature. Therefore, these three factors should be taken care of and controlled in the charger design.</p></li>
                    </ul>
                </div>
                <div class="link_title size2 section60" ><h3>2.Can the 18650 battery charger charge 26650 battery?</h3></div>
                <div class="common_p section30">
                    <p>
                        You can use the charger of 18650 lithium battery to charge the 26650 lithium battery, but do not use it for a long time. Because the charger of 18650 lithium battery has a relatively high voltage platform, the voltage platform of 18650 lithium battery is 3.6V and 4.2V, and the voltage platform of 26650 lithium battery is 3.2V and 3.6V. Therefore, long-term use will cause damage to 26650 lithium batteries.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="common_title" ><h2 class="light1-5 size1">How do you choose 26650 lithium battery?</h2></div>
                <div class="common_p section60">
                  <p>26650 lithium battery is widely used in power tools, lighting, wind power energy storage, photovoltaic energy storage, electric vehicles, toys, instruments, UPS backup power, communications equipment, medical equipment and military lights. What do we pay attention to when purchasing 26650 lithium battery?</p>
                </div>

                <div class="link_title size2 section60" ><h3>1.Appearance and Production Process</h3></div>
                <div class="common_p section30">
                    <p>
                        Appearance refers to the appearance, workmanship, size and process of 26650 lithium battery. After polishing, the rubber oil polishing materials feel good. At the same time, the insulation performance is better.
                    </p>
                </div>

                <div class="link_title size2 section60" ><h3>2、Capacity Label</h3></div>
                <div class="common_p section30">
                    <p>
                        A 26650 lithium ion battery without a clearly capacity label is likely to be a garbage battery that uses an inferior battery cell or is reassembled with a recycled battery cell. There are many cheap 26650 lithium batteries on the market, which are made of recycled or disassembled battery cells. Although they are cheap, they have short life and unstable quality. Careless use may damage the equipment or even cause an explosion.
                    </p>
                </div>

                <div class="link_title size2 section60" ><h3>3、Protected or Unprotected</h3></div>
                <div class="common_p section30">
                    <p>
                        The characteristics of 26650 lithium battery determine that 26650 lithium battery need to be equipped with a protective board to prevent the occurrence of overcharge, over-discharge and short circuit. The 26650 lithium battery without a protective board will be in danger of deformation, leakage and explosion. Amid fierce price competition, battery package factories have sought cheaper protective circuits or omitted them altogether, which may make the market be flooded with 26650 lithium-ion batteries that could explode.
                    </p>
                </div>

                <div class="link_title size2 section60" ><h3>4、Flat or Button Top</h3></div>
                <div class="common_p section30">
                    <ul>
                        <li><p>There are flat top and button top 26650 lithium batteries. The difference between them is that one has a protection board, while the other has no protection board.</p></li>
                        <li class="section20"><p>Flat top 26650 lithium battery: no protection board</p></li>
                        <li class="section20"><p>Button top 26650 lithium battery: It has protection board, because the top of the protection board protrudes. The protruding part is the protection board.</p></li>
                        <li class="section20"><p>In general, I recommend purchasing a button top battery to ensure that it is compatible with a wide range of devices and usages. The positive and negative electrodes of electrical appliances are designed with springs, so that it is retractable, and both button and flat top batteries can be used.</p></li>
                        <li class="section20"><p>But when a flat top battery is connected in series, the positive electrode of the flat top battery cannot touch the negative electrode of the other battery.</p></li>
                    </ul>
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
