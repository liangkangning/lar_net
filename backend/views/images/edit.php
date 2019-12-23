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
    )->where(['pid'=>54])
    ->indexBy('id')
    ->orderBy('sort')
    ->column();
$data_gongye=\common\models\Category::find()
    ->select(['title']
    )->where(['pid'=>61])
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


        <?php foreach ($data_attr as $key=>$value):
//            var_dump($value);
             $attr_value=\common\models\Attr::find()->where(['id'=>$value['id']])->one();
             $attr_value_array=$attr_value->getAttrValue()->indexBy('id')->orderBy('sort')->select(['name'])->column();

        ?>
            <?=$form->field($model, "attr_value_id[".$value['id']."]")->checkboxList($attr_value_array,['value'=>explode(',',$model->attr_value_id)])->label($value['name'])->hint('属性标签');?>
       <hr>
         <?php endforeach;?>

        <?=$form->field($model, 'category_id[54]')->checkboxList($data_tezhong,['value'=>explode(',',$model->category_id)])->label('Industrial Battery')->hint('工业电池');?>
        <?=$form->field($model, 'category_id[61]')->checkboxList($data_gongye,['value'=>explode(',',$model->category_id)])->label('Special Battery')->hint('特种电池');?>

        <?=$form->field($model, 'title')->textInput()->label('商品标题');?>
        <?=$form->field($model, 'top')->radioList(['1'=>'是','0'=>'否'])->label('是否置顶') ?>
        <?=$form->field($model, 'np')->checkboxList(['n'=>'最新[n]','h'=>'头条[h]','c'=>'推荐[c]','f'=>'幻灯[f]','a'=>'特荐[a]','p'=>'图片[p]'],['value'=>explode(',',$model->np)])->label('自定义类型');?>
        <?=$form->field($model, 'seo_title')->textInput(['class'=>'form-control c-md-5'])->label('SEO标题')->hint('SEO优化');?>
        <?=$form->field($model, 'keywords')->textInput(['class'=>'form-control c-md-5'])->label('关键词')->hint('SEO优化');?>
        <?=$form->field($model, 'description')->textarea(['class'=>'form-control c-md-4', 'rows'=>3])->label('图集描述')->hint('SEO优化') ?>


        <?=$form->field($model, 'cover')->widget('\common\widgets\images\Images',[
            //'type' => \backend\widgets\images\Images::TYPE_IMAGE, // 单图
            'saveDB'=>1, //图片是否保存到picture表，默认不保存
        ],['class'=>'c-md-12'])->label('封面图片')->hint('图组图片尺寸为：300*300');?>

        <?=$form->field($model, 'images')->widget('\common\widgets\images\Images',[
            'type' => \common\widgets\images\Images::TYPE_IMAGES, // 多图
            'saveDB'=>1, //图片是否保存到picture表，默认不保存
        ],['class'=>'c-md-12'])->label('商品图集')->hint('图组图片尺寸为：300*300');?>

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

        <?=$form->field($model, 'category_id2')->selectList(
            ArrayHelper::listDataLevel(\backend\models\Category::find()->asArray()->all(), 'id', 'title','id','pid'),['prompt'=>'请选择'],
            ['class'=>'form-control c-md-2'])->label('栏目路径'); ?>

        <?=$form->field($model, 'tags')->textInput(['class'=>'form-control c-md-3'])->label('标签')->hint('"|"号分开')?>

        <?=$form->field($model, 'bianhao')->textInput(['class'=>'form-control c-md-3'])->label('产品编号')->hint('')?>
        <?=$form->field($model, 'dianya')->textInput(['class'=>'form-control c-md-3'])->label('标称电压')->hint('单位:V')?>
        <?=$form->field($model, 'rongliang')->textInput(['class'=>'form-control c-md-3'])->label('标称容量')->hint('单位:mA')?>
        <?=$form->field($model, 'chicun')->textInput(['class'=>'form-control c-md-3'])->label('电池尺寸')->hint('单位:mm')?>
        <?=$form->field($model, 'xinghao')->textInput(['class'=>'form-control c-md-3'])->label('电芯型号')?>
        <?=$form->field($model, 'fdwendu')->textInput(['class'=>'form-control c-md-3'])->label('放电温度')->hint('单位:°C')?>
        <?=$form->field($model, 'cdwendu')->textInput(['class'=>'form-control c-md-3'])->label('充电温度')->hint('单位:°C')?>
        <?=$form->field($model, 'lingyu')->textInput(['class'=>'form-control c-md-3'])->label('应用领域')->hint('')?>

        <?=$form->field($model, 'diy_content')->textarea(['class'=>'form-control c-md-4', 'rows'=>7])->label('自定义内容')->hint('显示在文章页面') ?>

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
    highlight_subnav('images/index');
});

<?php $this->endBlock() ?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>