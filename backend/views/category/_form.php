<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'options'=>[
        'class'=>"form-aaa "
    ]
]); ?>
<?=$form->field($model, 'status')->radioList(['1'=>'显示','0'=>'隐藏'])->label('是否显示') ?>
<?=$form->field($model, 'top')->radioList(['1'=>'显示','0'=>'隐藏'])->label('是否置顶') ?>
<?=$form->field($model, 'pid')->selectList(
    ArrayHelper::merge(['0'=>'一级栏目'],ArrayHelper::listDataLevel(\backend\models\Category::find()->asArray()->all(), 'id', 'title','id','pid')),
    ['class'=>'form-control c-md-2'])->label('上级菜单') ?>
<?=$form->field($model, 'url')->textInput(['class'=>'form-control c-md-2'])->label('栏目对应的URL')->hint('默认为空')?>
<?=$form->field($model, 'title')->textInput(['class'=>'form-control c-md-2'])->label('栏目名称')->hint('栏目中文名称')?>
<?=$form->field($model, 'name')->textInput(['class'=>'form-control c-md-2'])->label('栏目标识')->hint('英文标识，只允许含有:英文、数字和中划线')?>
<?=$form->field($model, 'style')->selectList(['article'=>'普通文章|article','image'=>'图片集|image'],['class'=>'form-control c-md-2'])->label('内容模型')?>
<?=$form->field($model, 'cover')->widget('\common\widgets\images\Images',[
    //'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图
    'saveDB'=>0, //图片是否保存到picture表，默认不保存
],['class'=>'c-md-12'])->label('封面图片');?>


<?=$form->field($model, 'sort')->textInput(['class'=>'form-control c-md-1'])->label('排序值')->hint('排序值越小越靠前')?>

<?=$form->field($model, 'extend')->textarea(['rows'=>5])->label('扩展参数')->hint('一维数组配置格式“项:值”每项之间用换行或逗号隔开，其值转化为array后serialize()存储到数据库') ?>

<?=$form->field($model, 'link')->textInput(['class'=>'form-control c-md-5'])->label('是否外链')->hint('如果不为外链请留空，外链直接填写地址(加http://)')?>
<?=$form->field($model, 'meta_title')->textInput()->label('SEO标题');?>
<?=$form->field($model, 'keywords')->textInput()->label('SEO关键词')->hint('关键词之间用英文逗号分隔')?>
<?=$form->field($model, 'description')->textarea(['class'=>'form-control c-md-4', 'rows'=>4])->label('SEO描述'); ?>
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
],['class'=>'c-md-7'])->label('栏目内容');?>

<div class="form-actions">
    <?= Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ajax-post','target-form'=>'form-aaa']) ?>
    <?= Html::button('取消', ['class' => 'btn']) ?>
</div>

<?php ActiveForm::end(); ?>
