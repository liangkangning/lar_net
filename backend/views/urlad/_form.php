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
    <?=$form->field($model, 'content')->widget('\kucha\ueditor\UEditor',[

        'clientOptions' => [

            'serverUrl' => Url::to(['/public/ueditor']),//确保serverUrl正确指向后端地址

            'lang' =>'zh-cn', //中文为 zh-cn

            'initialFrameWidth' => '50%',

            'initialFrameHeight' => '100',

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

    ],['class'=>'c-md-7'])->label('广告内容');?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
