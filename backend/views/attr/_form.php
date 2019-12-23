<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Attr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attr-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'class'=>"form-aaa ",
            'enctype'=>"multipart/form-data",
        ]
    ]); ?>

    <?=$form->field($model, 'name')->textInput(['class'=>'form-control c-md-2'])->label('类型属性');?>
    <?=$form->field($model, 'sort')->textInput(['class'=>'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>
        <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success ajax-post' : 'btn btn-primary ajax-post','target-form'=>'form-aaa']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

