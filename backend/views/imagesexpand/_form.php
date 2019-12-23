<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Url;
use common\models\Adposition;


/* @var $this yii\web\View */
/* @var $model common\models\ImagesExpand */
/* @var $form yii\widgets\ActiveForm */
//获取产品表的字段
$table=\common\models\Images::tableName();
$tableSchema = Yii::$app->db->schema->getTableSchema($table);
$fields = \yii\helpers\ArrayHelper::getColumn($tableSchema->columns, 'name', true);

//var_dump($fields);
?>

<div class="images-expand-form">


    <?php $form = ActiveForm::begin([
        'options'=>[
            'class'=>"form-aaa ",
            'enctype'=>"multipart/form-data",
        ]
    ]); ?>





    <?=$form->field($model, 'p_ziduan')->dropDownList($fields,['class'=>'form-control c-md-2'])->label('产品表字段') ?>

    <?=$form->field($model, 'expand_name')->textInput(['class'=>'form-control c-md-1'])->label('拓展名')->hint('例如：电压')?>

    <?=$form->field($model, 'expand_value')->textInput(['class'=>'form-control c-md-1'])->label('拓展值')->hint('例如：电压单位 V')?>

    <div class="form-actions">
        <?= Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post','target-form'=>'form-aaa']) ?>
        <?= Html::button('取消', ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
