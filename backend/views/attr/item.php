<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Property */

$this->title = '属性管理';
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$columns = [
    [
        'class' => \common\core\CheckboxColumn::className(),
        'name'  => 'id',
        'options' => ['width' => '20px;'],
        'checkboxOptions' => function ($model, $key, $index, $column) {
            return ['value' => $key,'label'=>'<span></span>','labelOptions'=>['class' =>'mt-checkbox mt-checkbox-outline','style'=>'padding-left:19px;']];
        }
    ],
    [
        'class' => 'yii\grid\SerialColumn',
        'options' => ['width' => '20px;'],
    ],

    [
        'header' => '属性值',
        'attribute' => 'name',
    ],

    [
        'label' => '排序',
        'value' => 'sort',
        'options' => ['width' => '50px;'],
    ],

    [
        'class' => 'yii\grid\ActionColumn',
        'header' => '操作',
        'template' => '{edit} {addsub} {delete}',
        'options' => ['width' => '200px;'],
        'buttons' => [
            /*'view' => function ($url, $model, $key) {
                return Html::a('<i class="icon-eye"></i>', ['index', 'pid'=>$model['id']], [
                    'title' => Yii::t('app', '下级菜单'),
                    'class' => 'btn btn-xs blue'
                ]);
            },*/
            'edit' => function ($url, $model, $key) {
                return Html::a('<i class="fa fa-edit"></i>', ['edit_value', 'id'=>$model['id']], [
                    'title' => Yii::t('app', '编辑'),
                    'class' => 'btn btn-xs purple'
                ]);
            },
            'delete' => function ($url, $model, $key) {
                return Html::a('<i class="fa fa-times"></i>', ['deletevalue', 'id'=>$model['id']], [
                    'title' => Yii::t('app', '删除'),
                    'class' => 'btn btn-xs red ajax-get confirm'
                ]);
            },
        ],
    ],
];
?>
<?php \yii\widgets\Pjax::begin(['options'=>['id'=>'pjax-container']]); ?>
<div class="property-view">

    <h3>属性：<?= Html::encode($model->name) ?></h3>
    <?= GridView::widget([
        'dataProvider' => $dataProvider, // 列表数据
        //'filterModel' => $searchModel, // 搜索模型
        'options' => ['class' => 'grid-view table-scrollable'],
        /* 表格配置 */
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer'],
        /* 重新排版 摘要、表格、分页 */
        'layout' => '{items}<div class=""><div class="col-md-5 col-sm-5">{summary}</div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_full_number" style="text-align:right;">{pager}</div></div></div>',
        /* 配置摘要 */
        'summaryOptions' => ['class' => 'pagination'],
        /* 配置分页样式 */
        'pager' => [
            'options' => ['class'=>'pagination','style'=>'visibility: visible;'],
            'nextPageLabel' => '下一页',
            'prevPageLabel' => '上一页',
            'firstPageLabel' => '第一页',
            'lastPageLabel' => '最后页'
        ],
        /* 定义列表格式 */
        'columns' => $columns,
    ]); ?>
    <div class="h4" style="margin-top: 35px">新增属性值</div>
    <div class="post-form">
        <?php $form = ActiveForm::begin([
            'options'=>[
                'class'=>"form-aaa "
            ]
        ]); ?>
        <?= $form->field($new_model, 'name')->textInput(['maxlength' => true,'class'=>'clss']) ?>
        <?= $form->field($new_model, 'sort')->textInput(['maxlength' => true,'class'=>'clss']) ?>


        <div class="form-group">
            <?= Html::submitButton('<i class="icon-ok"></i> 新增', ['class' => 'btn blue ajax-post','target-form'=>'form-aaa']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
<?php \yii\widgets\Pjax::end(); ?>
<!-- 定义数据块 -->
<?php $this->beginBlock('test'); ?>
$(function() {
/* 子导航高亮 */
highlight_subnav('attr/index');
});
<?php $this->endBlock() ?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
