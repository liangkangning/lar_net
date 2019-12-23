<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\DiyContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diy-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'content')->widget('\kucha\ueditor\UEditor',[

    'clientOptions' => [

        'serverUrl' => Url::to(['/public/ueditor']),//确保serverUrl正确指向后端地址

        'lang' =>'zh-cn', //中文为 zh-cn

        'initialFrameWidth' => '100%',

        'initialFrameHeight' => '400',

        //定制菜单，参考http://fex.baidu.com/ueditor/#start-toolbar

        'toolbars' => [

            [

                'fullscreen', 'source', 'undo', 'redo', '|',

                'fontsize',

                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat',

                'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|',

                'forecolor', 'backcolor', '|',

                'lineheight', '|',

                'indent', '|',

            ],

            ['preview','simpleupload','insertimage','link','emotion','map','insertvideo','insertcode',]

        ]

    ]

],['class'=>'c-md-7'])->label('文章内容');?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
