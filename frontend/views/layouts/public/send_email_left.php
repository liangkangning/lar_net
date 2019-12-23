<?php

$model=new \common\models\SendMail();

$model->setScenario('all');

use common\helpers\Html;

use common\core\ActiveForm;

?>



<div class="common_email_all none">

 <div class="content">



<div class="email_title"><h2>Leave Message</h2></div>

<div class="common_email">

    <div class="form">

        <?php $form=ActiveForm::begin([

            'method' => 'post',  // 传值类型

            'action' => \yii\helpers\Url::to(['form/message']), // 默认不写,提交到当前控制器方法,但也可以这么设置

             'id'=>'send-emial-left',

            'fieldConfig' => [  //统一修改字段的模板

                'template' => "<small>*</small>{label}{input}{error}",

            ],]); ?>

        <div class="none">

            <?= $form->field($model, 'from')->textInput(['value'=>Yii::$app->request->hostInfo.Yii::$app->request->getUrl()]) ?>

        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12">

                <?= $form->field($model, 'name')->textInput() ?>

            </div>

            <div class="col-xs-12 col-sm-12">

                <?= $form->field($model, 'email')->textInput() ?>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12">

            <?= $form->field($model, 'message')->textarea(['rows'=>5]) ?>

        </div>



        <div class="col-xs-12 col-sm-12">

            <div class="form-group">

                <?= Html::submitButton('Submit', ['id'=>'more_bg','class' => 'btn', 'name' => 'contact-button']) ?>

            </div>

        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>



     

 </div>

</div>

