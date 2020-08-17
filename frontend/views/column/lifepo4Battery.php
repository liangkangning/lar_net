<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
$product_list = [
    ['title'=>'32650 LiFePO4 Battery','img_url'=>'/static/images/column_lifepo4_product_1.png','url'=>'/lifepo4-battery/list-145/',
        'des'=>'Nominal voltage: 3.2V<br> Nominal capacity: 4500-6500mAh<br>Application: instrumentation, backup power source, special equipment'],

    ['title'=>'26650 LiFePO4 Battery','img_url'=>'/static/images/column_lifepo4_product_2.png','url'=>'/lifepo4-battery/list-144/',
        'des'=>'Nominal voltage: 3.2V<br>Nominal capacity: 4500-6500mAh<br>Application: instrumentation, backup power source, special equipment'],

    ['title'=>'21700 LiFePO4 Battery','img_url'=>'/static/images/column_lifepo4_product_3.png','url'=>'/lifepo4-battery/list-147/',
        'des'=>'Nominal voltage: 3.6V<br>Nominal capacity: 3000-4800mAh<br>Application: digital devices, power tools'],
		
    ['title'=>'18650 LiFePO4 Battery','img_url'=>'/static/images/column_lifepo4_product_4.png','url'=>'/lifepo4-battery/list-142/',
        'des'=>'Nominal voltage: 3.7V<br>Nominal capacity: 2000-3500mAh<br>Application: special equipment, medical equipment, robot, etc.'],

    ['title'=>'Low Temperature LiFePO4 Battery','img_url'=>'/static/images/column_lifepo4_product_5.png','url'=>'/lifepo4-battery/list-164/',
        'des'=>'Charge temperature:-20℃ ~ +55℃<br>Discharge temperature:-40℃ ~ +60℃<br>Application:sepcial equipment,aerospace,polar science'],

    ['title'=>'Flexible package LiFePO4 Battery ','img_url'=>'/static/images/column_lifepo4_product_6.png','url'=>'/product/8qu43dg.html',
        'des'=>'Nominal voltage:3.2V<br>Nominal capacity:500mAh<br>Application:Internet of Things locator card'],

    ['title'=>'12V 12.8Ah SMBUS Communication26650-4S4P LiFePO4 Battery','img_url'=>'/static/images/column_lifepo4_product_7.png','url'=>'/product/8mu43c9.html',
        'des'=>'Nominal voltage:12.0V<br>Nominal capacity:12000mAh<br>Battery cell:26650/3.2V/3.2Ah'],

    ['title'=>' 25.6V 40Ah Low Temperature Charge/Discharge LiFePO4 Battery Pack','img_url'=>'/static/images/column_lifepo4_product_8.png','url'=>'/product/8ku43cs.html',
        'des'=>'Nominal voltage:25.6V<br>Nominal capacity:40000mAh<br>Battery cell:148F20C/3.2V/20Ah'],

    ['title'=>'48V 40Ah LiFePO4 Battery RS485 Communication Industrial Backup Power','img_url'=>'/static/images/column_lifepo4_product_9.png','url'=>'/product/8gu43cw.html',
        'des'=>'Nominal voltage:48.0V<br>Nominal capacity:40000mAh<br>Battery cell:26650/3200mAh/3.2V'],
];

?>

<div class="column-lifepo4 column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs"  src="<?=Yii::getAlias('@web/static/images/column_lifepo4_banner.jpg')?>" alt="Lifepo4 Battery Guide" title="Lifepo4 Battery Guide">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_lifepo4_banner_m.jpg')?>" alt="Lifepo4 Battery Guide" title="Lifepo4 Battery Guide">
        </div>
        <div class="text center-text">
            <h1 class="big-size">Best Lifepo4 Battery Guide</h1>
        </div>
    </div>
    <div class="col-md-12">
        <div class="container">
            <section class="section30 m_section0">
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
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Battery Overview</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        Lithium iron phosphate battery refers to the lithium ion battery using lithium iron phosphate as the positive electrode material. Lithium iron phosphate battery is considered as a new generation of lithium ion battery because of its advantages such as high safety, long cycle life, rate discharge and high temperature resistance.
                    </p>
                    <p class="section20">Large Power can provide customers with cell, BMS (power management system), integrated structure of the battery customized solutions, so as to meet the customers personalized power needs.</p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>1.LiFePO4 Battery Characteristics</h3></div>
                <div class="common_p section30">
                    <ul>
                        <li>Good safety performance: No explosion if puncture, no combustion or explosion when overcharge;</li>
                        <li class="section10">Good cycle life: The cycle life of lithium iron phosphate battery can reach more than 2000 times.</li>
                        <li class="section10">Good high temperature performance: The working temperature ranges from -20℃ to 70℃;</li>
                        <li class="section10">High tap density: It has higher capacity under the same conditions;</li>
                        <li class="section10">It can realize fast charging at 1C-5C, greatly reducing the charging time;</li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Application</h3></div>
                <div class="common_p section30">
                 <p>Power storage, special equipment, robot, AGV, rail transit, medical equipment, emergency backup, electric communication, etc.</p>
                </div>
            </section>


            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Best Chinese LiFePO4 Battery Manufacturers</h2></div>
                <div class="brand_list col-md-12">
                    <ul class="section20">
                        <div class="row">
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_1.jpg" alt="Sony"></div>
                                    <div class="text">CATL</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_2.jpg" alt="Panasonic"></div>
                                    <div class="text">BYD IT</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_3.jpg" alt="Sanyo"></div>
                                    <div class="text">Guoxuan</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_4.jpg" alt="Samsung"></div>
                                    <div class="text">CALB</div>
                                </div>
                            </li>
                        </div>


                        <div class="row">
                            <li class="section40 ">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_5.jpg" alt="LG"></div>
                                    <div class="text">BAK</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_6.jpg" alt="BAK"></div>
                                    <div class="text">LISHEN</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_7.jpg" alt="LISHEN"></div>
                                    <div class="text">LARGE</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_lifepo4_brand_8.jpg" alt="LARGE"></div>
                                    <div class="text">A123</div>
                                </div>
                            </li>
                        </div>


                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Battery Advantages</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Good Safety Performance</h3></div>
                <div class="common_p section30">
                   <p>Due to the stability and reliable safety design of the positive electrode materials, the lithium iron phosphate battery pack has been passed rigorous safety tests, and will not explode even in violent collisions.</p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Long Cycle Life</h3></div>
                <div class="common_p section30">
                  <p>
                      The 1C cycle life of lithium iron phosphate battery generally reaches 2000 times, even more than 3500 times. The energy storage market requires more than 4000-5000 times, which is higher than other types of lithium batteries.
                  </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.Nice High Temperature Performance</h3></div>
                <div class="common_p section30">
                    <p>
                        The peak heat of lithium iron phosphate battery can reach 350~500℃. And it has wide working temperature range (-20~+75℃). Even under high temperature (60℃), it can still give off 100% capacity.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>4.Fast Charge</h3></div>
                <div class="common_p section30">
                    <p>
                        The battery can be fully charged by a dedicated charger after 40 minutes of 1.5C charging.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>5.Environmental Protection</h3></div>
                <div class="common_p section30">
                    <p>
                        Lithium iron phosphate batteries are environmentally friendly, non-toxic, pollution-free, and cheap. It also has wide availability of raw materials.
                    </p>
                </div>
            </section>


            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Voltage & Capacity</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.LiFePO4 Battery Voltage</h3></div>
                <div class="common_p section30">
                    <p>
                        The nominal voltage of the single lithium iron phosphate battery is 3.2V, the charging voltage is 3.6V, and the discharge cut-off voltage is 2.0V.
                    </p>
                    <p class="section10">
                        Lithium iron phosphate battery packs reach the required voltage by the equipment through battery cell series connection. The battery voltage is equal to N* series connection number. Common lithium iron phosphate battery voltages are as follows:
                    </p>
                </div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class="small-size light1-8">
                            <li><a target="_blank" href="/lifepo4-battery/list-133/">12V LiFePO4 Battery</a></li>
                            <li><a target="_blank" href="/lifepo4-battery/list-134/">24V LiFePO4 Battery</a></li>
                            <li><a target="_blank" href="/lifepo4-battery/list-135/">36V LiFePO4 Battery</a></li>
                            <li><a target="_blank" href="/lifepo4-battery/list-136/">48V LiFePO4 Battery</a></li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.LiFePO4 Battery Capacity</h3></div>
                <div class="common_p section30">
                    <p>The capacity of lithium iron phosphate battery pack is determined by the capacity and number of the battery cells connected in parallel, generally according to the specific requirements of electrical equipment. The more lithium iron phosphate battery cells connected in parallel, the larger the capacity is.</p>
                    <p class="section10">Common lithium iron phosphate battery capacity has 10 ah, ah, ah, 40, 50, ah, ah, 100 200 ah, ah 400, etc.</p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Structure and Working Principle of LiFePO4 Battery</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.LiFePO4 Battery Structure</h3></div>
                <div class="common_p section30">
                    <p>
                        As shown in the figure, the left part is the olivine structure LiFePO4, the positive electrode of the battery. The aluminum foil is connected to the battery positive electrode and then polymer separator separates the positive and negative electrode, so that Li + and e - cannot pass the separator. The right part is battery cathode composed of carbon (graphite). The copper foil is connected to the battery cathode.
                    </p>
                </div>
                <div class="img_text col-md-12 section40">
                    <div class="img text-center"><img src="/static/images/column_lifepo4_1.jpg" alt=""></div>
                    <div class="text text-center">LiFePO4 Battery Internal Structure Diagram</div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.LiFePO4 Battery Working Principle</h3></div>
                <div class="common_p section30">
                    <p>
                        When the LiFePO4 battery is charging, Li+ in the positive electrode migrates to the negative electrode through the polymer separator. In the discharge process, Li+ in the negative electrode migrates to the positive electrode through the separator. Lithium-ion batteries are named for the way lithium ions move back and forth during charge and discharge process.
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Battery Charger</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.LiFePO4 Battery Charging</h3></div>
                <div class="common_p section30">
                    <p>
                        The CCCV charging method is recommended for lithium iron phosphate battery pack, that is, constant current first and then constant voltage. Constant current recommendation is 0.3c, while constant voltage recommendation is 3.65V.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Is LiFePO4 Battery Charger the same as Lithium Ion </h3></div>
                <div class="common_p section30">
                    <div class="p_ul">
                        <ul class="small-size light1-8">
                           <li>Both battery charging methods are constant current and constant voltage (CCCV), but the constant voltage point is different.</li>
                           <li>The nominal voltage of lithium iron phosphate battery is 3.2V and the charging cut-off voltage is 3.6V.</li>
                           <li>Conventional lithium ion batteries have a nominal voltage of 3.6V and a cut-off voltage of 4.2V.</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.Charging LiFePO4 Batteries With Solar</h3></div>
                <div class="common_p section30">
                    <p>
                        Solar panels cannot directly charge the lithium iron phosphate battery, because the voltage of the solar panel is unstable. It needs voltage regulation circuit and corresponding lithium iron phosphate battery charging circuit.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>4.Charging LiFePO4 Battery With Alternator</h3></div>
                <div class="common_p section30">
                    <p>
                        The generator cannot directly charge the lithium iron phosphate battery, because the electricity generated by the generator is alternating current or pulsed direct current. The lithium iron phosphate battery must be charged by direct current with constant voltage.
                    </p>
                </div>
            </section>


            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Battery Vs Lithium Ion Battery</h2></div>
                <section class="section60 tabel-section">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Chemistry</td>
                            <td>Voltag (V)</td>
                            <td>Energy Density (wh/kg)</td>
                            <td>Working Temp (℃)</td>
                            <td>Cycle Life</td>
                            <td>Safety</td>
                            <td>Environmenta</td>
                            <td>Cost based on cycle life x wh of SLA</td>
                        </tr>
                        <tr>
                            <td>LiFePO4</td>
                            <td>3.2</td>
                            <td>>120</td>
                            <td>-20-60</td>
                            <td>>2000</td>
                            <td>Safe</td>
                            <td>Good</td>
                            <td>0.15-0.25 lower than SLA</td>
                        </tr>
                        <tr>
                            <td>Lead acid</td>
                            <td>2.0</td>
                            <td>>35</td>
                            <td>-20-40</td>
                            <td>>200</td>
                            <td>Safe</td>
                            <td>Not Good</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>NiCd</td>
                            <td>1.2</td>
                            <td>>40</td>
                            <td>-20-50</td>
                            <td>>1000</td>
                            <td>Safe</td>
                            <td>Bad</td>
                            <td>0.7</td>
                        </tr>
                        <tr>
                            <td>NiMH</td>
                            <td>1.2</td>
                            <td>>80</td>
                            <td>-20-50</td>
                            <td>>500</td>
                            <td>Safe</td>
                            <td>Good</td>
                            <td>1.2-1.4</td>
                        </tr>
                        <tr>
                            <td>LiMnxNiyCoz02</td>
                            <td>3.7</td>
                            <td>>160</td>
                            <td>-20-50</td>
                            <td>>500</td>
                            <td>better than LiCo</td>
                            <td>OK</td>
                            <td>1.5-2.0</td>
                        </tr>
                        <tr>
                            <td>LiCoO2</td>
                            <td>3.7</td>
                            <td>>200</td>
                            <td>-20-50</td>
                            <td>>500</td>
                            <td>Unsafe w/o PCM</td>
                            <td>OK</td>
                            <td>1.5-2.0</td>
                        </tr>
                        </tbody>
                    </table>
                </section>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Battery and Ternary Battery</h2></div>
                <div class="common_p section60">
                    <p>
                        Affected by the structure, lithium iron phosphate and Ternary battery have their own advantages and disadvantages in performance. Ternary battery has advantages in energy density and fast charging speed, while lithium iron phosphate battery has advantages in cycle life, safety and economy.
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Material Comparison</h3></div>
                <div class="common_p section30">
                    <p>
                        The cathode, electrolyte and separator are similar in both types of batteries, but the biggest difference is the positive electrode material, hence the name.
                    </p>
                </div>
                <div class="common_p">
                    <div class="section30 col-md-12">
                        <table cellspacing="0" width="100%" class="table-bordered">
                            <tbody>
                            <tr class="firstRow">
                                <td>Anode Material</td>
                                <td>LiFePO4</td>
                                <td>LiNixCoyMn1-x-yO2</td>
                            </tr>
                            <tr>
                                <td>Shorthand</td>
                                <td>LFP</td>
                                <td>NCM</td>
                            </tr>
                            <tr>
                                <td>Nominal Voltage</td>
                                <td>3.2V</td>
                                <td>3.65V</td>
                            </tr>
                            <tr>
                                <td>Crystal Form</td>
                                <td>Olivine Structure</td>
                                <td>Layer Structure</td>
                            </tr>
                            <tr>
                                <td>Lithium ion extraction channel</td>
                                <td>One Dimension</td>
                                <td>Two Dimensions</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2.Energy Density</h3></div>
                <div class="common_p section30">
                    <p>
                        As for the cell, ternary battery has higher energy density. The rated voltage and theoretical specific capacity (mAh/g) of lithium iron phosphate anode materials are all lower than those of ternary batteries, and their energy density has been the best.
                    </p>
                </div>
                <div class="section30 col-md-12 common_p">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Anode Material</td>
                            <td>Rated Voltage （V）</td>
                            <td>Theoretical Specific Capacity （mAh/g）</td>
                            <td>Estimated Actual Specific Capacity（mAh/g）</td>
                            <td>Estimated Operating Cell Energy Density（wh/kg）</td>
                        </tr>
                        <tr>
                            <td>LiFePO4</td>
                            <td>~3.2</td>
                            <td>~170</td>
                            <td>~145</td>
                            <td>~170</td>
                        </tr>
                        <tr>
                            <td>NCM811</td>
                            <td rowspan="3">~3.65</td>
                            <td rowspan="3">~274</td>
                            <td>~195</td>
                            <td>~240</td>
                        </tr>
                        <tr>
                            <td>NCM523</td>
                            <td>~170</td>
                            <td>~210</td>
                        </tr>
                        <tr>
                            <td>NCM111</td>
                            <td>~145</td>
                            <td>~180</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="common_p section30">
                    <p>
                        Note: The energy density of the cell should be evaluated in combination with the cell design and process. The table value is for reference only.
                    </p>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.Charging Efficiency</h3></div>
                <div class="common_p section30">
                    <p>
                        Ternary lithium batteries have a great advantage over lithium iron phosphate batteries in charging efficiency.
                    </p>
                    <p class="section10">When the ternary lithium battery and lithium iron phosphate battery are charged below 10C, there is no significant difference in the constant current ratio. When the charging ratio is above 10C, the constant current ratio of the lithium iron phosphate battery will decrease rapidly, and the charging efficiency will decrease rapidly.</p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>4.Cycle Life</h3></div>
                <div class="common_p section30">
                    <p>
                        Theoretically, lithium iron phosphate has advantages in cycle life. The olivine structure is more stable, is not easy to swell and has more stable electrochemical reaction.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>5.Safety</h3></div>
                <div class="common_p section30">
                    <p>
                        Lithium iron phosphate batteries have incomparable advantages in safety. The positive electrode voltage is low, and there is no oxygen-releasing heat chain reaction that ternary has. The thermal stability temperature can reach above 300℃, while that of ternary battery is around 150-200℃.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>6.Economy</h3></div>
                <div class="common_p section30">
                    <p>
                        Lithium iron phosphate LiFePO4 has obvious advantages on price at present, the raw materials are relatively cheap, and the domestic industry chain is relatively mature.
                    </p>
                    <p class="section10">Cobalt is the key to lowering the price of NCM batteries. Cobalt is mainly an associated mineral with low production and uneven distribution, and its price has been rising continuously in recent years.</p>
                </div>

            </section>
        </div>


        <section class="bg_part">
            <div class="container">
                <div class="common_title size1 section70 " id="basic-structure-of-18650">
                    <h2 class="light1-5">LiFePO4 Battery Cycle Life and Factor</h2>
                </div>
            </div>

            <div class="getiao section60"></div>
            <div class="part1 pp">
                <div class="container">
                    <div class="link_title size2 section20" id="battery-cell"><h3>1.LiFePO4 Battery Working at Room Temperature</h3></div>
                    <div class="row col-md-12">
                        <ul class="ul_li_item_padding section60 m_section30">
                            <div class="item col-md-4">
                                <li>
                                    <div class="title"><strong>Small Current Charge and Discharge</strong></div>
                                    <div class="text section10 light1-5"><p>Lithium iron phosphate batteries tend to have more than 2000 cycles in this case; Small lithium battery manufacturers with lower quality battery also have over 1000 cycles;</p></div>
                                </li>
                            </div>
                            <div class="item col-md-4 m_section30">
                                <li>
                                    <div class="title"><strong>High Rate Stable Charge and Discharge</strong></div>
                                    <div class="text section10 light1-5"><p>Most of the applications of high rate discharge batteries are power-type lithium ion batteries, and most of them are used to provide power to the motor. As most lithium iron phosphate batteries operate under high load, the decay time of battery materials is accelerated, and the cycle life is around 800 times.</p></div>
                                </li>
                            </div>
                            <div class="item col-md-4 m_section30">
                                <li>
                                    <div class="title"><strong>High Rate Unstable Charge and Discharge</strong></div>
                                    <div class="text section10 light1-5"><p>The lithium iron phosphate batteries used in this case have a shorter lifespan, which is only about 300 times.</p></div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="part2 pp">
                <div class="container">
                    <div class="link_title size2 section20" id="battery-cell"><h3>2.LiFePO4 Battery Working at High Temperature</h3></div>
                    <div class="common_p section30">
                        <p>
                            The high temperature performance of lithium iron phosphate battery is not very mature at present. The operating temperature ranges from -20℃ to 125℃, which is the theoretical value, and the practical application temperature range is smaller.
                        </p>
                    </div>
                    <div class="row col-md-12">
                        <ul class="section60 ul_li_item_padding m_section30">
                            <div class="item col-md-4">
                                <li>
                                    <div class="title"><strong>Small Current Charge and Discharge</strong></div>
                                    <div class="text section10 light1-5"><p>Lithium iron phosphate batteries tend to have more than 2000 cycles in this case; Small lithium battery manufacturers with lower quality battery also have over 1000 cycles;</p></div>
                                </li>
                            </div>
                            <div class="item col-md-4 m_section30">
                                <li>
                                    <div class="title"><strong>High Rate Stable Charge and Discharge</strong></div>
                                    <div class="text section10 light1-5"><p>Most of the applications of high rate discharge batteries are power-type lithium ion batteries, and most of them are used to provide power to the motor. As most lithium iron phosphate batteries operate under high load, the decay time of battery materials is accelerated, and the cycle life is around 800 times.</p></div>
                                </li>
                            </div>
                            <div class="item col-md-4 m_section30">
                                <li>
                                    <div class="title"><strong>High Rate Unstable Charge and Discharge</strong></div>
                                    <div class="text section10 light1-5"><p>The lithium iron phosphate batteries used in this case have a shorter lifespan, which is only about 300 times.</p></div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="part3 pp">
                <div class="container">
                    <div class="link_title size2 section20" id="battery-cell"><h3>3.LiFePO4 Battery Working at Low Temperature</h3></div>
                    <div class="common_p section30">
                        <p>
                            Low temperature has a larger impact on the performance of lithium iron phosphate batteries. According to the current market situation, the service life of lithium iron phosphate batteries operating below -20℃ to -40℃ is significantly reduced, and it is around 300 times.
                        </p>
                    </div>
                </div>
            </div>
            <div class="part4 pp">
                <div class="container">
                    <div class="link_title size2 section20" id="battery-cell"><h3>4.The Factor Affecting LiFePO4 Battery Cycle Life </h3></div>
                    <div class="common_p section10">
                        <li class="col-md-12 section30"><strong>Charge and Discharge</strong></li>
                        <p class="section10 col-md-12">
                            When choosing a charger, it is better to use a charger with the correct device to cut off, so as not to shorten the service life of lithium iron phosphate batteries due to overcharging. In general, a slow charge will prolong the battery life, which is better than a quick charge.
                        </p>
                        <li class="col-md-12 section30"><strong>Depth of Discharge</strong></li>
                        <p class="section10 col-md-12">
                            The discharge depth is the main factor affecting the life of lithium iron phosphate batteries. The higher the discharge depth is, the shorter the life of lithium iron phosphate batteries will be. In other words, by reducing the discharge depth, the life of lithium iron phosphate batteries can be significantly extended. Therefore, we should avoid over discharge lithium battery UPS to extremely low voltage.
                        </p>
                        <li class="col-md-12 section30"><strong>Operating Environment</strong></li>
                        <p class="section10 col-md-12">
                            If lithium iron phosphate battery is used at high temperature for a long time, its electrode activity will decrease and its service life will be shortened. Therefore, it is a good way to extend the life of lithium iron phosphate battery by keeping the operating temperature as appropriate as possible.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section>
            <div class="container">
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiFePO4 Battery Recycling</h2></div>
                <div class="common_p section60">
                    <p class="col-md-12">
                        Decommissioned lithium iron phosphate batteries which do not have the value of cascade utilization and the batteries after cascade utilization will eventually enter the stage of disassembly and recycling. Unlike ternary material batteries, lithium iron phosphate batteries do not contain heavy metals, and the recovery products are mainly Li, P and Fe. The additional value of the recovery products is low, so low-cost recovery methods are important. There are mainly fire metallurgy and hydrometallurgy technical processes.
                    </p>
                </div>
                <div class="common_p">
                    <li class="col-md-12 section30"><strong>Fire Metallurgy</strong></li>
                </div>
                <div class="common_p">
                    <p class="section10 col-md-12">
                        Conventional fire metallurgy recovery is generally a high-temperature incineration of electrode, in which carbon and organic matter in the electrode fragments are burned off, and the remaining ash that cannot be burned off is finally filtrated to obtain fines containing metals and metal oxides.
                    </p>
                </div>
                <div class="common_p">
                    <li class="col-md-12 section30"><strong>Hydrometallurgy</strong></li>
                </div>
                <div class="common_p">

                    <p class="section10 col-md-12">
                        The hydrometallurgy recovery method is mainly to dissolve the metal ions in the lithium iron phosphate battery through acid-base solutions, and extract the dissolved metal ions in the form of oxides and salts through precipitation and adsorption. In the reaction process, H2SO4, NaOH, H2O2 and other reagents are often used.
                    </p>
                </div>
            </div>
        </section>

        <div>
            <div class="container">
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
