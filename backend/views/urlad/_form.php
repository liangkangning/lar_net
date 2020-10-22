<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Adposition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adposition-form">

    <?php $form = ActiveForm::begin(); ?>


    <?=$form->field($model, 'url')->textInput(['class'=>'form-control c-md-5'])->label('URL');?>

    <?=$form->field($model, 'cover')->widget('\common\widgets\images\Images',[

        //'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图

        'saveDB'=>1, //图片是否保存到picture表，默认不保存

    ],['class'=>'c-md-12'])->label('封面图片')->hint('单图图片尺寸为：300*300');?>
    <?=$form->field($model, 'content')->textarea(['class'=>'form-control c-md-4', 'rows'=>7])->label('广告内容')->hint('显示在图片上') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
