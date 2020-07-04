<?phpuse yii\bootstrap\ActiveForm;use common\helpers\Html;?><?php \frontend\assets\ProductAsset::register($this); ?><div class="fromMessage">        <div class="container">        <div class="title"><h1>Request a Quote</h1></div>        <div class="sub_title">            Customized lithium ion battery for all industrial applications        </div>        <div class="text">            <p>Please fill out the form below to request a quote. Our design team will be in touch <b>within 24 hours </b>to discuss your specifications.            </p>        </div>        <div class="form section">            <?php $form=ActiveForm::begin(['id'=>'send-message-page',             'fieldConfig' => [  //统一修改字段的模板              'template' => "<div class='label_diy'><small>*</small>{label}</div>{input}{error}",        ],]); ?>            <div class="none">            <?= $form->field($model, 'from')->textInput(['value'=>isset($_SERVER['HTTP_REFERER'])?Yii::$app->request->hostInfo.$_SERVER['HTTP_REFERER']:Yii::$app->request->hostInfo.Yii::$app->request->getUrl()]) ?>            </div>            <div class="row">            <div class="col-xs-12 col-sm-6">            <?= $form->field($model, 'name')->textInput() ?>            </div>            <div class="col-xs-12 col-sm-6">            <?= $form->field($model, 'email')->textInput() ?>            </div>            </div>            <div class="row">            <div class="col-xs-12 col-sm-6">            <?= $form->field($model, 'company')->textInput() ?>            </div>            <div class="col-xs-12 col-sm-6">            <?= $form->field($model, 'country')->textInput() ?>            </div>            </div>            <div class="col-xs-12 col-sm-12">            <?= $form->field($model, 'message')->textarea(['rows'=>7]) ?>             </div>            <div class="col-xs-12 col-sm-12">            <div class="form-group">                <?= Html::submitButton('Submit', ['id'=>'lianxi','class' => 'btn', 'name' => 'contact-button']) ?>            </div>            </div>            <?php ActiveForm::end(); ?>        </div>    </div></div>