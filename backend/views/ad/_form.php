<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Url;
use common\models\Adposition;
use common\models\Ad;

/* @var $this yii\web\View */
/* @var $model backend\models\Ad */
/* @var $form common\core\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'options'=>[
        'class'=>"form-aaa ",
        'enctype'=>"multipart/form-data",
    ]
]); ?>
<?=$form->field($model, 'type')->selectList(Adposition::find()
		        ->select(['name','id'])
				->orderBy('id')
				->indexBy('id')
				->column(),
    ['class'=>'form-control c-md-2'])->label('类型') ?>

<?=$form->field($model, 'title')->textInput()->label('文章标题');?>

<!-- 单图 -->
<?=$form->field($model, 'image')->widget('\common\widgets\images\Images',[
    //'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图
    'saveDB'=>1, //图片是否保存到picture表，默认不保存
],['class'=>'c-md-12'])->label('图片');?>

<?=$form->field($model, 'url')->textInput(['class'=>'form-control c-md-5'])->label('外链')->hint('外链地址必须带http')?>
<?=$form->field($model, 'tuozhan')->textInput(['class'=>'form-control c-md-1'])->label('拓展值')->hint('例如，首页banner背景色填（#141823）')?>

<?=$form->field($model, 'sort')->textInput(['class'=>'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>



<?=$form->field($model, 'status')->radioList(['1'=>'正常','0'=>'隐藏'])->label('状态') ?>

<div class="form-actions">
    <?= Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post','target-form'=>'form-aaa']) ?>
    <?= Html::button('取消', ['class' => 'btn']) ?>
</div>

<?php ActiveForm::end(); ?>
