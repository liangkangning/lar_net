<?php$email=new \common\models\SendMail();$email->setScenario('simple');use common\helpers\Html;use common\core\ActiveForm;?><div class="right_send ">    <div class="p1 "  ><p><img src="<?=Yii::getAlias('@web/static/images/right_send1.png')?>" alt=""><span>Leave a message</span></p></div>    <div class="p2 none" >        <div class="title size4">Contact Us  <span class="fa close"><img src="<?=Yii::getAlias('@web/static/images/top_nav_list2.png')?>" alt=""></span></div>        <div class="textbox" style="margin-top: 2%;">            Your name(optional)<br>            <input type="text" id="sendName" /><br/>            <span  class="none" id="namedesc"> * Please enter your name</span>        </div>        <div class="textbox"> * Email address<br><input type="text" id="sendEmail" /><br/>            <span  class="none" id="emaildesc">  Email is required.</span>             <span  class="none" id="emailError"> This email is not valid</span>        </div>        <div class="textbox"> * How can we help you?<br>            <textarea type="text" id="sendContent" class="textaare"></textarea>            <br/>            <span class="none" id="contentdesc">  Massage is required.</span>        </div>        <div>            <button class="cancel" id="cancel" >Cancel</button>            <button class="send" id="send">Send</button>        </div>    </div>    <div class="p3 none" >        <div class="title size4">Contact Us  <span class="fa close"><img src="<?=Yii::getAlias('@web/static/images/top_nav_list2.png')?>" alt=""></span></div>        <div class="text">            <div class="img"><img src="<?=Yii::getAlias('@web/static/images/right_send2.png')?>" alt=""></div>            <div class="p"><p>We’ll get back to you soon</p></div>        </div>        <div class="done"><div class="p">Done</div></div>    </div></div><footer class=" <?= in_array(Yii::$app->params['lanmu']['name'],Yii::$app->params['nav_tree'])?'':'section'?>">          <div class="top_of_page visible-xs">              <div class="col-xs-12"><span class="fa fa-sort-up size5"></span></div>              <div class="col-xs-12"><span class="size5">TOP OF PAGE</span></div>          </div>          <div class="top hidden-xs">            <div class="container">            <div class="left"><div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/images/footer_logo.png')?>" alt="Large Power" title="Large Power" /></a></div></div>            <div class="right">                <div class="email">                    <div class="img"><a href="mailto:info@large.net"><i class="fa fa-envelope-o"></i></a></div>                    <div class="text"><a href="mailto:info@large.net" class="size3">info@large.net</a></div>                </div>                <div class="list">                <ul>                    <!-- Sharingbutton Facebook -->                    <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>                            </div>                        </div>                    </a>                    <!-- Sharingbutton Twitter -->                    <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>                            </div>                        </div>                    </a>                    <!-- Sharingbutton Google+ -->                    <a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">                        <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.37 12.93c-.73-.52-1.4-1.27-1.4-1.5 0-.43.03-.63.98-1.37 1.23-.97 1.9-2.23 1.9-3.57 0-1.22-.36-2.3-1-3.05h.5c.1 0 .2-.04.28-.1l1.36-.98c.16-.12.23-.34.17-.54-.07-.2-.25-.33-.46-.33H7.6c-.66 0-1.34.12-2 .35-2.23.76-3.78 2.66-3.78 4.6 0 2.76 2.13 4.85 5 4.9-.07.23-.1.45-.1.66 0 .43.1.83.33 1.22h-.08c-2.72 0-5.17 1.34-6.1 3.32-.25.52-.37 1.04-.37 1.56 0 .5.13.98.38 1.44.6 1.04 1.84 1.86 3.55 2.28.87.23 1.82.34 2.8.34.88 0 1.7-.1 2.5-.34 2.4-.7 3.97-2.48 3.97-4.54 0-1.97-.63-3.15-2.33-4.35zm-7.7 4.5c0-1.42 1.8-2.68 3.9-2.68h.05c.45 0 .9.07 1.3.2l.42.28c.96.66 1.6 1.1 1.77 1.8.05.16.07.33.07.5 0 1.8-1.33 2.7-3.96 2.7-1.98 0-3.54-1.23-3.54-2.8zM5.54 3.9c.33-.38.75-.58 1.23-.58h.05c1.35.05 2.64 1.55 2.88 3.35.14 1.02-.08 1.97-.6 2.55-.32.37-.74.56-1.23.56h-.03c-1.32-.04-2.63-1.6-2.87-3.4-.13-1 .08-1.92.58-2.5zM23.5 9.5h-3v-3h-2v3h-3v2h3v3h2v-3h3"/></svg>                            </div>                        </div>                    </a>                    <!-- Sharingbutton Tumblr -->                    <a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;caption=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;content=http%3A%2F%2Fsharingbuttons.io&amp;canonicalUrl=http%3A%2F%2Fsharingbuttons.io&amp;shareSource=tumblr_share_button" target="_blank" rel="noopener" aria-label="">                        <div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.5.5v5h5v4h-5V15c0 5 3.5 4.4 6 2.8v4.4c-6.7 3.2-12 0-12-4.2V9.5h-3V6.7c1-.3 2.2-.7 3-1.3.5-.5 1-1.2 1.4-2 .3-.7.6-1.7.7-3h3.8z"/></svg>                            </div>                        </div>                    </a>                    <!-- Sharingbutton LinkedIn -->                    <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fsharingbuttons.io&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">                        <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 21.5h-5v-13h5v13zM4 6.5C2.5 6.5 1.5 5.3 1.5 4s1-2.4 2.5-2.4c1.6 0 2.5 1 2.6 2.5 0 1.4-1 2.5-2.6 2.5zm11.5 6c-1 0-2 1-2 2v7h-5v-13h5V10s1.6-1.5 4-1.5c3 0 5 2.2 5 6.3v6.7h-5v-7c0-1-1-2-2-2z"/></svg>                            </div>                        </div>                    </a>                </ul>                </div>            </div>            </div>          </div>          <div class="main commom_left_right_padding">            <div class="container">            <div class="col-sm-9 col-xs-12">                <div class="email visible-xs">                    <div class="img"><a href="mailto:info@large.net"><i class="fa fa-envelope-o"></i></a></div>                    <div class="text"><a href="mailto:info@large.net" class="size3">info@large.net</a></div>                </div>                <div class="nav_f">                    <ul>                        <li class="col-xs-6 col-sm-4">                            <dl>                                <dt class="cat hidden-xs"><div class="item"><b class="size3">Navigation</b></div></dt>                                <dt><div class="item size5"><a href="/page/company-profile.html">Company Profile</a></div></dt>                                <dt><div class="item size5"><a href="/page/qualifications-honors.html">Qualifications & Honors</a></div></dt>                                <dt><div class="item size5"><a href="/page/research-and-development-team.html">Lithium ion battery Research Institute</a></div></dt>                                <dt><div class="item size5"><a href="/page/test-center.html">Test Center</a></div></dt>                                <dt><div class="item size5"><a href="/company-news/">Company News</a></div></dt>                                <dt><div class="item size5"><a href="/page/contactus.html">Contact Us</a></div></dt>                            </dl>                        </li>                        <li class="col-xs-6 col-sm-4">                            <dl>                                <dt class="cat hidden-xs"><div class="item"><a href="/industrial-battery/" class="size3">Product</a></div></dt>                                <?php foreach (\common\models\Category::find()->where(['pid'=>54])->orderBy(['sort'=>SORT_DESC])->all() as $key=>$value): ?>                                    <dt><div class="item"><a href="/<?=$value->name?>/" class="size5"><?=$value->title?></a></div></dt>                                <?php endforeach;?>                                <dt><div class="item"><a href="/low-temperature-battery/" class="size5">Low Temperature Battery</a></div></dt>                            </dl>                        </li>                        <li class="hidden-xs col-sm-4">                            <dl>                                <dt class="cat"><div class="item"><a href="/case/" class="size3">Solution</a></div></dt>                                <?php foreach (\common\models\Category::find()->where(['pid'=>66])->orderBy(['sort'=>SORT_DESC])->all() as $key=>$value): ?>                                <dt><div class="item"><a href="/<?=$value->name?>/" class="size5"><?=$value->title?></a></div></dt>                                <?php endforeach;?>                            </dl>                        </li>                    </ul>                </div>            </div>            <div class="col-sm-3 hidden-xs">               <div class="sendMassage">                  <div class="title size3">Send a Message</div>                  <div class="form">                      <?php $form=ActiveForm::begin([                          'method' => 'post',  // 传值类型                          'action' => \yii\helpers\Url::to(['form/message-simple']), // 默认不写,提交到当前控制器方法,但也可以这么设置                          'id'=>'foot-form',                          'fieldConfig' => [  //统一修改字段的模板                              'labelOptions' => [ 'class' => 'none'],                          ],]); ?>                      <div class="none">                          <?= $form->field($email, 'from')->textInput(['value'=>Yii::$app->request->hostInfo.Yii::$app->request->getUrl()]) ?>                      </div>                          <div class="col-xs-12 col-sm-12 ">                              <?= $form->field($email, 'email')->textInput(['placeholder'=>'Enter your email address','id'=>'foot-email-name']) ?>                          </div>                      <div class="col-xs-12 col-sm-12">                          <?= $form->field($email, 'message')->textarea(['rows'=>5,'placeholder'=>'Your message must be between 20-3000 characters!','id'=>'foot-email-message']) ?>                      </div>                      <div class="col-xs-12 col-sm-12">                          <div class="form-group  id="more_bg"">                              <?= Html::submitButton('Submit', ['id'=>'more_bg','class' => 'btn lianxi', 'name' => 'contact-button']) ?>                          </div>                      </div>                      <?php ActiveForm::end(); ?>                  </div>               </div>            </div>            </div>            <?php if (Yii::$app->controller->id=='index'): ?>                <div class="hidden_more section70">                    <div class="see_more container "><div class="text">See more <b class="down"><svg t="1587115753671" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2361" width="18" height="18"><path d="M192 368L237.728 320 512 608l274.24-288L832 368 512 704z" p-id="2362" fill="#555555"></path></svg></b><b class="up"><svg t="1587118632314" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3646" width="18" height="18"><path d="M192 656L237.728 704 512 416l274.24 288L832 656 512 320z" p-id="3647" fill="#555555"></path></svg></b></b></div></div>                       <div class="content">                           <div class="category_list container common_category_list hidden-xs">                               <div class="anchor col-md-12">                                   <ul>                                       <?php foreach (Yii::$app->params['anchor'] as $key=>$value):?>                                           <li>                                               <div class="item"><a href="<?=$value->url?>" class="size5"><?=$value->name?></a> <?= $key==count(Yii::$app->params['anchor'])-1?"":"<span>|</span>"?></div>                                           </li>                                       <?php endforeach; ?>                                   </ul>                               </div>                           </div>                           <?php  if (isset($this->params['links'])):?>                               <div class="youqing hidden-xs">                                   <section class="container">                                       <ul>                                           <li> <div class="item">                                                   <a href="javascript:void(0);" rel="nofollow">links:</a> |                                               </div></li>                                           <?php foreach ($this->params['links'] as $key=>$value): ?>                                               <li>                                                   <div class="item">                                                       <a target="_Blank" href="<?=$value['url']?>"><?=$value['webname']?></a> |                                                   </div>                                               </li>                                           <?php endforeach; ?>                                       </ul>                                   </section>                               </div>                           <?php endif;?>                       </div>                </div>            <?php endif;?>          </div>          <div class="bottom">              <div class="bottom_lang visible-xs">                  <div class="img"><img src="/static/images/global.png" alt=""></div>                  <div class="text"><a href="http://www.juda.cn">中文</a></div>              </div>            <div class="container">                <section>                <p class="size5">                    © 2018 Dongguan Large Electronics Co., Ltd. |  No. 8 Jingyi Road, Dongcheng District, Dongguan City, Guangdong Province, China                </p>                    <p class="size5"> <span>Tel. +86-769-23182621</span> <span class="hidden-xs">| Fax. +86-769-22802559 | </span><a class="hidden-xs" href="https://www.large.net">www.large.net</a> | <a href="https://beian.miit.gov.cn/" style="color: #555" target="_blank" rel="nofollow">粤ICP备07049936号</a></p>                </section>            </div>          </div>       </footer>