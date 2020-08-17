<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
$product_list = [
    ['title'=>'Conventional LiPo Battery','img_url'=>'/static/images/column_polymer_product_1.png','url'=>'https://www.large.net/lithium-polymer-battery/',
        'des'=>'Flexible size, complete model<br>High energy density, good safety<br>Medical equipment, instruments, handheld equipment, special equipment, etc.'],

    ['title'=>'Low Temperature LiPo Battery','img_url'=>'/static/images/column_polymer_product_2.png','url'=>'https://www.large.net/low-temperature-battery/',
        'des'=>'Charge temperature：-40℃ 0.2C<br>Discharge temperature：-50℃~+70℃<br>Polar scientific investigation, frigid zone emergency, special equipment, medical electronics, etc.'],

    ['title'=>'Explosion-proof LiPo Battery','img_url'=>'/static/images/column_polymer_product_3.png','url'=>'https://www.large.net/explosion-proof-battery/',
        'des'=>'Intrinsic safety type/explosion-proof type<br>Meet Exia iiA/Exib iiB T1~T4 standard<br>Oil and gas drilling, mine locomotive, petrochemical industry, refuge grotto, etc.'],

    ['title'=>'High Rate LiPo Battery','img_url'=>'/static/images/column_polymer_product_4.png','url'=>'https://www.large.net/product/8eu43dd.html',
        'des'=>'Discharge rate 3C~100C<br> high discharge platform, long cycle life<br>UAV, model airplane, remote control model,<br>power tools, etc.'],

    ['title'=>'Ultra-thin LiPo Battery','img_url'=>'/static/images/column_polymer_product_5.png','url'=>'https://www.large.net/product/8pu43df.html',
        'des'=>'Thickness≤3mm, Minimum thickness is 0.4mm.<br>High energy density, long cycle life<br>Internet of Things, smart card, electronic tag,<br>bank card, wine label, cold chain, etc.'],

    ['title'=>'Special Shape LiPo Battery','img_url'=>'/static/images/column_polymer_product_6.png','url'=>'https://www.large.net/product/8eu43dd.html',
        'des'=>'Special shape can be customize.<br>Arc, triangle, half-moon, circle, polygon, etc.<br>Small medical devices, wearable devices,<br>trackers, Internet of Things, etc.'],
];


$products2 = [];
$ids = ['903', '906'];
foreach ($ids as $id) {
    $products2[] = \common\models\Images::find()->where(['id' => $id])->one();
}
foreach ($products2 as &$product) {
    $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
}
?>

<div class="column-cylindrical column-common">
    <div class="banner col-md-12 relative">
        <div class="img">
            <img class="hidden-xs" src="<?=Yii::getAlias('@web/static/images/column_polymer_banner.jpg')?>" alt="LiPo Battery Guide">
            <img class="visible-xs" src="<?=Yii::getAlias('@web/static/images/column_polymer_banner_m.jpg')?>" alt="LiPo Battery Guide">
        </div>
        <div class="text center-text">
            <h1 class="big-size">Best LiPo Battery Guide</h1>
            <p class="size3 white_color section30 hidden-xs">
                LiPo Battery is a kind of lithium ion battery, but compared with liquid lithium ion battery, <br>
                it has many obvious advantages, such as high energy density,<br>
                small size, ultra-thin, lightweight and high safety. It is a new type of battery.
            </p>
        </div>
    </div>
    <div class="col-md-12">
        <div class="container">
            <section class="section30 m_section0">
                    <div class="products_list_other">
                        <ul class="ul_li_padding">
                            <div class="row">
                                <?php foreach ($product_list as $key=>$value):?>
                                    <?php if ($key<3):?>
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
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                            <div class="row">
                                <?php foreach ($product_list as $key=>$value):?>
                                    <?php if ($key>=3):?>
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
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>

                        </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Cell Model</h2></div>
                <section class="section60 tabel-section">
                    <?php $this->beginContent('@app/views/column/polymerTable.php') ?>
                    <?php $this->endContent() ?>
                </section>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Classification</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Structure</h3></div>
                <div class="common_p">
                    <li class="font-weight section30">Winding</li>
                </div>
                <div class="common_p">

                    <p class="small-size section5">
                        Use the same winding process as the production of liquid lithium ion battery, wind up the positive electrode, negative electrode and electrolyte film, and package it with aluminum foil.
                    </p>
                </div>
                <div class="common_p">
                    <li class="font-weight section10">Lamination</li>
                </div>
                <div class="common_p">
                    <p class="small-size section5">
                        Cut the anode and cathode into a certain size, make them with electrolyte film by hot-pressing technology, and then package with aluminum foil.
                    </p>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2.Electrolyte</h3></div>
                <div class="common_p section30">
                    <ul>
                        <li>Gel polymer electrolyte lithium ion battery adds additives in solid polymer electrolyte to improve ionic conductivity, so that the battery can be used at room temperature.</li>
                        <li class="section10">The electrolyte of solid polymer electrolyte lithium ion battery is a mixture of polymer and salt. It has low ionic conductivity at room temperature, which is suitable for high temperature usage.</li>
                        <li class="section10">The lithium ion battery that has composite gel polymer anode material uses conductive polymer as the anode material. Its specific energy is 3 times of the existing lithium ion battery, so it is the latest generation of lithium ion battery.</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Advantages of LiPo Battery</h2></div>
                <section class="section50">
                    <div class="row">
                        <ul class="ul_li_padding ul_none">
                            <li class="col-md-4">
                                <div class="item">
                                    <div class="part col-md-12">
                                        <div class="title col-md-12 size3 font-weight black_color">High safety performance</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                Due to the polymer materials,<br>
                                                the cell will not catch fire or explode.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">Small thickness</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                With the capacity of 6V400mAh,<br>
                                                its thickness can be as thin as 0.5mm.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">Light weight</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                40% lighter than the steel case<br>
                                                lithium ion battery with the same<br>
                                                capacity specification, and 20%<br>
                                                lighter than the aluminum case battery.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item">
                                    <div class="part col-md-12 section5">
                                        <div class="img"><a target="_blank" href=""><img src="/static/images/column_polymer_1.jpg" alt=""></a></div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">No leakage</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                Polymer battery contains no liquid electrolyte<br>
                                                and uses colloidal solid.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item">
                                    <div class="part col-md-12">
                                        <div class="title col-md-12 size3 font-weight black_color">High safety performance</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                Due to the polymer materials,<br>
                                                the cell will not catch fire or explode.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">Small thickness</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                With the capacity of 6V400mAh,<br>
                                                its thickness can be as thin as 0.5mm.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">Light weight</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                40% lighter than the steel case<br>
                                                lithium ion battery with the same<br>
                                                capacity specification, and 20%<br>
                                                lighter than the aluminum case battery.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Parameters</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Voltage</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li>Nominal voltage：3.7V</li>
                            <li>Charging voltage：4.1V~5V</li>
                            <li>Discharging voltage：2.8~4.2V</li>
                            <li>Storage voltage：3.7~3.8V</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Capacity</h3></div>
                <div class="common_p section30">
                  <p>
                      The capacity of a lithium polymer battery depends on the thickness, width and length. It also depends on the material and size.<br>
                      Fast estimation of polymer battery capacity, commonly used estimation formula (estimation only)：<br>
                      <strong>Capacity = Thickness * Width * Length *K (The unit of K is mah/mm^3)</strong>
                  </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.Internal Impedance</h3></div>
                <div class="common_p section30">
                    <p>
                        Internal impedance refers to the impedance encountered by the current flowing through the lithium ion battery when the lithium ion battery is working. It is mainly composed of electrode materials, electrolyte, separator impedance and the contact impedance of each part, which are affected by the size, structure and assembly of the battery.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>4.Charge Rate</h3></div>
                <div class="common_p section30">
                    <p>
                        <strong>Charge Rate = Charge Current/Rated Capacity</strong><br>
                        The maximum charging rate is the safest, but it is not the best charging rate. A lower charging rate can better extend the service life of the battery.
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>5.Discharge Rate</h3></div>
                <div class="common_p section30">
                    <p>
                        <strong>Discharge Rate=Discharge Current/Rated Capacity</strong><br>
                        Discharge rate maintains safe discharge speed of the battery. In the specified time, the battery releases its rated capacity current, which is equal to the battery rated capacity multiple. Discharge rate is expressed by letter C.
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Comparison of LiPo Battery and Lithium Ion Battery</h2></div>
                <section class="section60">
                    <?php $this->beginContent('@app/views/column/polymerTable2.php') ?>
                    <?php $this->endContent() ?>
                </section>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Maintenance</h2></div>
                <div class="common_p section60">
                    <p>The lithium polymer battery has a certain life. It doesn't mean that you can prolong battery life without using. Battery maintenance only has corresponding standards during using.</p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Charging Standard</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li>The charger of lithium polymer battery must be able to charge at constant current and constant voltage.</li>
                            <li>The single battery cell must be charged under 1C 5A.</li>
                            <li>The charging temperature ranges from 0 to 45℃.</li>
                            <li>Charging voltage shall not exceed 4.23V.</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Discharging Standard</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li>Batteries are generally flammable and explosive, and should be placed in somewhere ventilated without high temperature.</li>
                            <li>The long-term storage environment of the battery is -20℃~35℃, and the relative humidity is 45%~75%.</li>
                            <li>After storing for nearly one year, recharge the battery to 10%~50% by standard charging methods.</li>
                        </ul>
                    </div>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.Storage Standard</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li>The discharge current is less than 2C 5A.</li>
                            <li>The final discharging voltage of a single battery cell shall not be less than 2.75V.</li>
                            <li>The discharge temperature ranges from -20℃ to 60℃.</li>
                        </ul>
                    </div>
                </div>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Pack</h2></div>
                <div class="common_p section60">
                    <p>The process of assembling lithium polymer battery cells is called PACK, which connects single battery or multiple cells into lithium ion battery modules in series and parallel.</p>
                </div>
                <div class="common_p section30">
                    <p>Lithium polymer battery pack consists of battery pack, bus bar, flexible connection, PCM, exterior package, output (including connector), highland barley paper, plastic holder and other auxiliary materials.</p>
                </div>

                <div class="img-list section60 col-md-12">
                    <ul class="ul_li_padding ul_none">
                        <li class="col-md-1 col-xs-0"></li>
                        <li class="col-md-5 col-xs-12">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_polymer_2.jpg" alt="Lithium Polymer Battery Connecting in Series(3S-1P)" title="Lithium Polymer Battery Connecting in Series(3S-1P)"></div>
                                <div class="text section20 text-center">Lithium Polymer Battery Connecting in Series(3S1P)</div>
                            </div>
                        </li>
                        <li class="col-md-5 col-xs-12">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_polymer_3.jpg" alt="Lithium Polymer Battery Connecting in Parallel(1S-3P)" title="Lithium Polymer Battery Connecting in Parallel(1S-3P)"></div>
                                <div class="text section20 text-center">Lithium Polymer Battery Connecting in Parallel(1S3P)</div>
                            </div>
                        </li>
                        <li class="col-md-1 col-xs-0"></li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="size2 section60"><h2 class="light1-5">Best LiPo Battery Pack</h2></div>
                <div class="products_list">
                    <ul>
                        <?php foreach ($products2 as $key=>$value):?>
                        <li class="<?= $key==0?'section30':'section60' ?>">
                            <div class="item">
                                <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                <div class="text col-md-7">
                                    <div class="des light1-8 section30"><p><?=$value['diyContentUrl']?></p></div>
                                    <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Connector</h2></div>
                <div class="common_p section60">
                    <p>Connector is commonly known as plug-in unit, plug and sockets, etc. It is used to connect power supply and signal device. There are wire to wire connector and wire to board connector.</p>
                </div>
                <div class="common_p section60">
                    <div class="img text-center"><img src="/static/images/column_polymer_4.jpg" alt=""></div>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>Common Battery Plug</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li>Molex 2510、Molex 51021、Molex 78172</li>
                            <li>JST SHR、JST ACHR、JST PHR、JST XHP、JST SYR、JST SYP、JST ZHR
                                SM2.5, XT plug, EC5 plug, DuPont plug, TP2.0, YH2.5mm, Tamiya, etc.</li>
                            <li>Common Model Airplane Plug：EC3、EC5、EC8、XT30、XT60、XT90</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>Common Model Airplane Plug</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li>EC3,EC5,EC8,XT30,XT60,XT90</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Swollen LiPo Battery</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.LiPo Battery Swollen Reasons</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                            <li><strong>Poor packaging</strong>: During the production process, air moisture enters into the cell, causing electrolyte decomposition and gas production.</li>
                            <li><strong>Excessive water content in the cell</strong>: In the manufacturing process, once the water content exceeds the standard, the electrolyte will decompose and produce gas.</li>
                            <li><strong>Corrosion</strong>: Corrosion occurs to the polymer pouch cell, and the aluminum layer is consumed by the reaction. As a result, water barrier is lost and battery swells.</li>
                            <li><strong>Surface damage</strong>: Damaged by external forces, water gets into the cell after puncture. When exposes to air, lithium metal reacts intensely with oxygen.</li>
                            <li><strong>Crash</strong>: Aluminum is easy to deform. The bigger size the cell, the bigger size the bump, the more easily the cell is damaged.</li>
                            <li><strong>Short circuit</strong>: The anode and cathode contact leads to short circuit, and then the lithium polymer battery cell may produce gas and even smoke.</li>
                            <li><strong>Internal short circuit</strong>: Shrinkage, crimping, breakage and piercing of lithium polymer battery separator will cause internal short circuit and swollen battery.</li>
                            <li><strong>Overcharge or over discharge</strong>: When overcharged or over discharged the polymer pouch cell, the PCM is abnormal, and the battery cell will be seriously swollen.</li>
                        </ul>
                    </div>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>2.Repair and Application of Swollen Battery</h3></div>
                <div class="common_p">
                    <div class="p_ul section30">
                        <ul class=" small-size">
                          <li>If your phone battery is already swollen, use your finger to find the gap in the battery and poke a small hole in it to let the air out.</li>
                          <li>You can replace it with a new lithium polymer battery pack. Avoid overcharging during charging, which can not only protect the battery from damaging, but also lead to energy conservation and environmental protection.</li>
                        </ul>
                    </div>
                </div>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">LiPo Battery Disposal</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Use waste LiPo Batteries Properly to Avoid Environmental Pollution.</h3></div>
                <div class="common_p section30">
                    <p>Lithium polymer batteries are considered to be a relatively environmentally friendly way of storing energy. However, if the discarded lithium polymer batteries are not recycled properly, they may cause environmental pollution.</p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.Main Hazardous Substances of Waste LiPo Battery</h3></div>
                <section class="section30">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>Category</td>
                            <td>Conventional Materials</td>
                            <td>Potential Environmental Pollution</td>

                        </tr>
                        <tr>
                            <td>Anode Material</td>
                            <td>LiCoO2/LiMn2O4/LiNiO2</td>
                            <td>Heavy metal pollution; Co, Ni,<br>
                                Mn are strong carcinogens, toxic substances,<br>
                                and may change the environmental pH.</td>

                        </tr>

                        <tr>
                            <td>Electrolyte</td>
                            <td>LiPF6LiBF4/LiAsF6</td>
                            <td>Change the environmental pH; Fluorine pollution</td>

                        </tr>
                        <tr>
                            <td>Volume (mAh/g)</td>
                            <td>135~140</td>
                            <td>140~180</td>

                        <tr>
                            <td>Electrolyte Solvent</td>
                            <td>EC/PC/DC</td>
                            <td>It is difficult to degrade; Toxic;<br>
                                Burning will produce greenhouse gases.</td>

                        </tr>
                        <tr>
                            <td>Separator</td>
                            <td>PP/PE</td>
                            <td>Difficult to degrade</td>
                        </tr>
                        <tr>
                            <td>Adhesive</td>
                            <td>PVD/VDF/EPD</td>
                            <td>Fluorine pollution; Difficult to degrade</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="link_title size2 section60" id="battery-cell"><h3>3.The Disposal Status of Waste LiPo Batteries in the World</h3></div>
                    <div class="common_p">
                        <div class="p_ul section30">
                            <ul class=" small-size">
                               <li>Germany and America has legislation, and begin to do all the collection and classification.</li>
                               <li>Japan implements the "3R Plan", which changes "mass production, mass consumption and mass waste" into "recycling, reduction and reuse".</li>
                               <li>In 2003, China issued the Policy on Waste Battery Pollution Prevention and Control Technology, requiring battery producers to take important responsibility for the disposal of waste batteries.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="link_title size2 section60" id="battery-cell"><h3>4.How to Dispose Waste LiPo Battery</h3></div>
                    <div class="common_p">
                        <div class="p_ul section30">
                            <ul class=" small-size">
                                <li>If there is a waste battery recycling agency nearby, please send the waste battery to them.</li>
                                <li>If there is no waste battery recycling agency nearby and the battery quantity is relatively large, you can contact the local environmental protection bureau or mail to the recycling agency in other cities.</li>
                                <li>Correctly classify and discard the polymer into toxic and hazardous waste bins.</li>
                                <li>Before throwing away lithium polymer batteries, soak them in salt water for 1-2 days to ensure that they have fully discharged.</li>
                            </ul>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">Notes for Purchasing LiPo Batteries</h2></div>
                    <div class="link_title size2 section60" id="battery-cell"><h3>1.Brand</h3></div>
                    <div class="common_p section30">
                        <p>When choosing lithium polymer batteries, we should search for well-known brands, so that the quality of batteries can be guaranteed. Although the price of many small brands in the market is cheap, the battery may have short life and poor quality.</p>
                    </div>

                    <div class="link_title size2 section60" id="battery-cell"><h3>2.Capacity</h3></div>
                    <div class="common_p section30">
                        <p>Check if the capacity is clearly marked. A battery pack without a clearly marked capacity (such as 1000mAh or 1000 MAH) may be a poor quality battery pack or a recovered battery pack without quality assurance.</p>
                    </div>

                    <div class="link_title size2 section60" id="battery-cell"><h3>3.PCM</h3></div>
                    <div class="common_p section30">
                        <p>Without a PCM, the lithium polymer battery has the risk of deformation and leakage. In the competitive market, companies have sought cheaper PCM, or omitted them, leaving lithium polymer batteries explosive risk on the market.</p>
                    </div>
                </section>

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
