<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Property */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'options'=>[
        'class'=>"form-aaa ",
        'enctype'=>"multipart/form-data",
    ]
]); ?>
<?=$form->field($model, 'category_id')->selectList(
    ArrayHelper::listDataLevel(\backend\models\Category::find()->where(['pid'=>0])->asArray()->all(), 'id', 'title','id','pid'),['prompt'=>'请选择'],
    ['class'=>'form-control c-md-2'])->label('栏目'); ?>

<?=$form->field($model, 'title')->textInput(['class'=>'form-control c-md-2'])->label('属性名称');?>
<?=$form->field($model, 'name')->textInput(['class'=>'form-control c-md-2'])->label('属性标识')->hint('英文标识，只允许含有:英文、数字和中划线');?>

<?=$form->field($model, 'style')->dropDownList(['0'=>'文本','1'=>'数字'],['class'=>'form-control c-md-2'])->label('属性类型')->hint('文本|数字');;?>

<?=$form->field($model, 'link')->textInput(['class'=>'form-control c-md-5'])->label('外链')->hint('外链地址必须带http')?>
<?=$form->field($model, 'link_value')->textInput(['class'=>'form-control c-md-5'])->label('外链文本值')?>
<?=$form->field($model, 'sort')->textInput(['class'=>'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>

<?=$form->field($model, 'status')->radioList(['1'=>'正常','0'=>'隐藏'])->label('状态') ?>

<div class="form-actions">
    <?= Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post','target-form'=>'form-aaa']) ?>
    <?= Html::button('取消', ['class' => 'btn']) ?>
</div>

<?php ActiveForm::end(); ?>
