<?php
$model=new \common\models\SendMail();
$model->setScenario('all');
use common\helpers\Html;
use common\core\ActiveForm;
?>
<div class="form">
    <?php $form=ActiveForm::begin([
        'method' => 'post',  // 传值类型
        'action' => \yii\helpers\Url::to(['form/message']), // 默认不写,提交到当前控制器方法,但也可以这么设置
        'id'=>'contactus-emial',
        'fieldConfig' => [  //统一修改字段的模板
            'template' => "<div class='label_diy'><small>*</small>{label}</div><div class='input'>{input}{error}</div>",
        ],]); ?>
    <div class="none">
        <?= $form->field($model, 'from')->textInput(['value'=>Yii::$app->request->hostInfo.Yii::$app->request->getUrl()]) ?>
    </div>
    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name*']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Emall*']) ?>
    <?= $form->field($model, 'company')->textInput(['placeholder' => 'company']) ?>
    <?= $form->field($model, 'country')->textInput(['placeholder' => 'country']) ?>
    <?= $form->field($model, 'message')->textarea(['placeholder' => 'Leave a message*','rows'=>5]) ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>