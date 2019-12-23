<?php

use yii\helpers\Html;

use common\helpers\ArrayHelper;
use common\core\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Links */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sorrtank')->textInput() ?>

    <?= $form->field($model, 'webname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->dropDownList(['0'=>'首页','1'=>'内页'], ['prompt'=>'请选择']) ?>

    <?=$form->field($model, 'cat_id')->dropDownList(ArrayHelper::listDataLevel(\backend\models\Category::find()->asArray()->all(), 'id', 'title','id','pid'),['prompt'=>'请选择'],
        ['class'=>'form-control c-md-2'])->label('所属栏目')->hint('英文标识'); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
