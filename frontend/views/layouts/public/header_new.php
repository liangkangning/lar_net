<header>
    <div class="container">
        <div class="col-xs-6 col-sm-6 p_l">
            <div class="logo">
                <div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/images/logo.png')?>" title="Custom Lithium ion Battery Pack" alt="Custom Lithium ion Battery Pack"/></a></div>
            </div>
            <div class="text">Custom Lithium Ion Battery Pack</div>
        </div>
        <div class="col-xs-6 col-sm-6 p_r">
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
            <div class="lag">
                <div class="bottom">
                    <div class="t1">
                  <span>
                        <a href="mailto:info@large.net" >info@large.net</a></span>
                    </div>
                    <div class="t2">
                        <div class="dropdown">
                            <div class="ico"><img src="<?=Yii::getAlias('@web/static/images/global.png')?>" alt=""></div>
                            <a id="dLabel" data-target="#" href="http://www.juda.cn">
                                简体中文
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
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
                                    <a href="/">Home</a>
                                </li>
                                <li class="" _t_nav="industrial-battery">
                                    <a href="/industrial-battery/">Industrial Battery</a>
                                </li>
                                <li class="" _t_nav="lithium-power-battery">
                                    <a href="/lithium-power-battery/">Lithium Power Battery</a>
                                </li>
                                <li class="" _t_nav="special-battery">
                                    <a href="/special-battery/">Special Battery</a>
                                </li>
                                <li class="" _t_nav="case">
                                    <a href="/case/">Solution</a>
                                </li>
                                <li class="" _t_nav="news">
                                    <a href="/company-news/">News</a>
                                </li>
                                <li class="" _t_nav="rd">
                                    <a href="/page/research-and-development-team.html">R&amp;D</a>
                                </li>
                                <li class="" _t_nav="about-us">
                                    <a href="/page/company-profile.html">About Us</a>
                                </li>
                                <li class="" _t_nav="page/contactus.html">
                                    <a href="/page/contactus.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <?php if (Yii::$app->controller->id=='product'): ?>
                            <div class="common_email_all none">
                                <div class="content">
                                    <div class="email_title"><h2>Leave Message</h2></div>
                                    <div class="common_email">
                                        <div class="form">
                                            <form id="send-emial-left" class="" action="/form/message.html" method="post">
                                                <input type="hidden" name="_csrf" value="NzVUdzNmWW0AU2QwRzM1HnNsMDxXLhMedWxgJks.PTtQXhY2ZCc9Wg==">
                                                <div class="none">
                                                    <div class="form-group field-sendmail-from required">
                                                        <small>*</small><label class="" for="sendmail-from">from</label><input type="text" id="sendmail-from" class="form-control c-md-4" name="SendMail[from]" value="https://www.large.net/"><span class="help-block"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12">
                                                        <div class="form-group field-sendmail-name required">
                                                            <small>*</small><label class="" for="sendmail-name">Name</label><input type="text" id="sendmail-name" class="form-control c-md-4" name="SendMail[name]"><span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12">
                                                        <div class="form-group field-sendmail-email required">
                                                            <small>*</small><label class="" for="sendmail-email">Email</label><input type="text" id="sendmail-email" class="form-control c-md-4" name="SendMail[email]"><span class="help-block"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="form-group field-sendmail-message required">
                                                        <small>*</small><label class="" for="sendmail-message">Message</label><textarea id="sendmail-message" class="form-control c-md-4" name="SendMail[message]" rows="5"></textarea><span class="help-block"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="form-group">
                                                        <button type="submit" id="more_bg" class="btn" name="contact-button">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>


                    </div>
                </div>
                <div class="navigation-down">
                    <div id="industrial-battery" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="industrial-battery">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/industrial-battery/">Industrial Battery</a>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/lithium-ion-battery/">Lithium Ion Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lifepo4-battery/">LiFePO4 Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-battery18650/">18650 Lithium Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-polymer-battery/">Lithium Polymer Battery</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/energy-storage-battery/">Energy Storage Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-power-battery/">Lithium Power Battery</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="lithium-power-battery" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="lithium-power-battery">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/lithium-power-battery/">Lithium Power Battery</a>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/lithium-ion-battery/list-133/">12V Lithium Ion Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-ion-battery/list-134/">24V Lithium Ion Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-ion-battery/list-135/">36V Lithium Ion Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-ion-battery/list-136/">48V Lithium Ion Battery</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="special-battery" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="special-battery">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/special-battery/">Special Battery</a>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/low-temperature-battery/">Low Temperature Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/wide-temperature-battery/">Wide Temperature Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/lithium-titanate-battery/">Lithium Titanate Battery</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/explosion-proof-battery/">Explosion-proof Battery</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="case" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="case">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/case/">Solution</a>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/military/">Military</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/robotic/">Robotic</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/medical/">Medical</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/instrument/">Instrument</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/survey/">Survey</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/handheld/">Handheld</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="news" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="news">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/company-news/">News</a>
                            </div>
                            <div class="col-xs-9 col-sm-9">
                                    <dd class="col-xs-3 col-sm-3">
                                        <a href="/company-news/">Company News</a>
                                    </dd>
                                  <dd class="col-xs-3 col-sm-3">
                                        <a href="/industry-news/">Industry News</a>
                                    </dd>
                                  <dd class="col-xs-3 col-sm-3">
                                        <a href="/battery-knowledge/">Battery Knowledge</a>
                                    </dd>
                            </div>
                            <div class="col-xs-9 col-sm-9 section30">
                                <dd class="col-xs-3 col-sm-3">
                                    <a href="/page/company-profile.html"><img src="<?=Yii::getAlias('@web/static/images/nav_news_1.jpg')?>" alt=""></a>
                                </dd>
                                <dd class="col-xs-3 col-sm-3">
                                    <a href="/page/qualifications-honors.html"><img src="<?=Yii::getAlias('@web/static/images/nav_news_2.jpg')?>" alt=""></a>
                                </dd>
                                <dd class="col-xs-3 col-sm-3">
                                    <a href="/page/history.html"><img src="<?=Yii::getAlias('@web/static/images/nav_news_3.jpg')?>" alt=""></a>
                                </dd>
                            </div>
                            <div class="col-xs-12 col-sm-12 section40"></div>
                        </div>
                    </div>
                    <div id="rd" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="rd">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/page/research-and-development-team.html">R&amp;D</a>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <dl>
                                    <dd>
                                        <a href="/page/research-and-development-team.html">R&amp;D Team</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/page/research-platform-and-patent.html">Research Platform &amp; Patent</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/page/test-center.html">Test Center</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dd>
                                        <a href="/page/product-certification.html">Product Certification</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-3 col-sm-3">
                                <img src="<?=Yii::getAlias('@web/static/images/nav_rd.jpg')?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="about-us" class="nav-down-menu menu-3 menu-1" style="display: none;" _t_nav="about-us">
                        <div class="container navigation-down-inner">
                            <div class="col-xs-3 col-sm-3 part_top">
                                <a href="/page/company-profile.html">About Us</a>
                            </div>
                            <div class="col-xs-9 col-sm-9">
                                    <dd class="col-xs-3 col-sm-3">
                                        <a href="/page/company-profile.html">Company Profile</a>
                                    </dd>
                                    <dd class="col-xs-3 col-sm-3">
                                        <a href="/page/qualifications-honors.html">Qualifications &amp; Honors</a>
                                    </dd>
                                    <dd class="col-xs-3 col-sm-3">
                                        <a href="/page/history.html">History</a>
                                    </dd>
                            </div>
                            <div class="col-xs-9 col-sm-9 section30">
                                <dd class="col-xs-3 col-sm-3">
                                    <a href="/page/company-profile.html"><img src="<?=Yii::getAlias('@web/static/images/nav_about_us_1.jpg')?>" alt=""></a>
                                </dd>
                                <dd class="col-xs-3 col-sm-3">
                                    <a href="/page/qualifications-honors.html"><img src="<?=Yii::getAlias('@web/static/images/nav_about_us_2.jpg')?>" alt=""></a>
                                </dd>
                                <dd class="col-xs-3 col-sm-3">
                                    <a href="/page/history.html"><img src="<?=Yii::getAlias('@web/static/images/nav_about_us_3.jpg')?>" alt=""></a>
                                </dd>
                            </div>
                            <div class="col-xs-12 col-sm-12 section40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
    