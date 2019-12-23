<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Images */

/* 页面基本属性 */
$this->title = ($this->context->action->id == 'create' ? '添加' : '编辑') . '商品';
$this->params['title_sub'] = '';  // 在\yii\base\View中有$params这个可以在视图模板中共享的参数
//特种电池数组
$data_tezhong=\common\models\Category::find()
    ->select(['title']
    )->where(['pid'=>8])
    ->indexBy('id')
    ->orderBy('sort')
    ->column();
$data_gongye=\common\models\Category::find()
    ->select(['title']
    )->where(['pid'=>13])
    ->indexBy('id')
    ->orderBy('sort')
    ->column();
$data_attr=\common\models\Attr::find()->all();
//\common\models\CategoryImages::updateFrequency('2', '2,3','3');
//\common\models\AttrImagesSelect::updateFrequency('1','',1);
?>

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-red-sunglo">
            <i class="icon-settings font-red-sunglo"></i>
            <span class="caption-subject bold uppercase"> 内容信息</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> 工具箱
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="javascript:;"><i class="fa fa-pencil"></i> 导出Excel </a></li>
                    <li class="divider"> </li>
                    <li><a href="javascript:;"> 其他 </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php $form = ActiveForm::begin([
            'options'=>[
                'class'=>"form-aaa "
            ]
        ]); ?>

        <?=$form->field($model, 'category_id[8]')->checkboxList($data_tezhong,['value'=>explode(',',$model->category_id)])->label('特种锂电池')->hint('分类标签');?>
        <?=$form->field($model, 'category_id[9]')->checkboxList($data_gongye,['value'=>explode(',',$model->category_id)])->label('工业电池')->hint('分类标签');?>
        <?php foreach ($data_attr as $key=>$value):
//            var_dump($value);
             $attr_value=\common\models\Attr::find()->where(['id'=>$value['id']])->one();
             $attr_value_array=$attr_value->getAttrValue()->indexBy('id')->orderBy('sort')->select(['name','id'])->column();
            $attr_value_array_id=ArrayHelper::getColumn($attr_value->getAttrValue()->orderBy('sort')->asArray()->all(),'id');
             $tips =$attr_value_array_id;
        ?>
            <?=$form->field($model, "attr_value_id[".$value['id']."]")->checkboxList($attr_value_array,['item'=>function($index, $label, $name, $checked, $value) use ($tips){
            $checkStr = $checked?"checked":"";
            return '<label style="padding-right:20px;margin-bottom:5px;" data-toggle="tooltip" data-placement="top" title="'.$tips[$index].'"><input type="checkbox" name="'.$name.'" value="'.$value.'" '.$checkStr.'>'.$label.'</label>';
        }])->label($value['name'])->hint('属性标签');?>
       <hr>
         <?php endforeach;?>
        <?=$form->field($model, 'attr_value_id')->textInput()->label('所选属性');?>


        <?=$form->field($model, 'title')->textInput()->label('seo标题');?>
        <?=$form->field($model, 'keyword')->textInput(['class'=>'form-control c-md-5'])->label('关键词')->hint('SEO优化');?>
        <?=$form->field($model, 'name')->textInput()->label('URL拼音');?>
        <?=$form->field($model, 'keywords')->textInput(['class'=>'form-control c-md-5'])->label('关键词拆词')->hint('SEO优化');?>
        <?=$form->field($model, 'seocontent')->textarea(['class'=>'form-control c-md-4', 'rows'=>3])->label('描述')->hint('SEO优化') ?>

        <?=$form->field($model, 'longword1')->textInput()->label('长尾词1');?>
        <?=$form->field($model, 'longword2')->textInput()->label('长尾词2');?>
        <?=$form->field($model, 'longword3')->textInput()->label('长尾词3');?>
        <?=$form->field($model, 'image')->widget('\common\widgets\images\Images',[
            //'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图
            'saveDB'=>1, //图片是否保存到picture表，默认不保存
        ],['class'=>'c-md-12'])->label('封面图片')->hint('图组图片尺寸为：300*300');?>


     <?=$form->field($model, 'adtext')->widget('\kucha\ueditor\UEditor',[
    'clientOptions' => [
        'serverUrl' => Url::to(['/public/ueditor']),//确保serverUrl正确指向后端地址
        'lang' =>'zh-cn', //中文为 zh-cn
        'initialFrameWidth' => '600',
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
],['class'=>'c-md-7'])->label('封面图的文字');?>



        <?=$form->field($model, 'description')->widget('\kucha\ueditor\UEditor',[
            'clientOptions' => [
                'serverUrl' => Url::to(['/public/ueditor']),//确保serverUrl正确指向后端地址
                'lang' =>'zh-cn', //中文为 zh-cn
                'initialFrameWidth' => '600',
                'initialFrameHeight' => '150',
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
        ],['class'=>'c-md-7'])->label('描述');?>

        <?=$form->field($model, 'sort')->textInput(['class'=>'form-control c-md-1'])->label('排序值')->hint('排序值越小越前')?>
        <?=$form->field($model, 'status')->radioList(['1'=>'正常','0'=>'隐藏'])->label('状态') ?>
        
        <div class="form-actions">
            <?= Html::submitButton('<i class="icon-ok"></i> 确定', ['class' => 'btn blue ','target-form'=>'form-aaa']) ?>
            <?= Html::button('取消', ['class' => 'btn']) ?>
        </div>
        
        <?php ActiveForm::end(); ?>
        
        <!-- END FORM-->
    </div>
</div>

<!-- 定义数据块 -->
<?php $this->beginBlock('test'); ?>

$(function() {
    /* 子导航高亮 */
    highlight_subnav('keywords/index');
});

<?php $this->endBlock() ?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>