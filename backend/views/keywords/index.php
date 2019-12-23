<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KeywordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '聚合页';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keywords-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加', ['add'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'keyword',
            'name',
            'keywords',
            'longword1',
//             'longword2',
//             'longword3',
             'title',
            // 'seocontent',
            // 'image',
            // 'adtext:ntext',
            // 'description:ntext',
            // 'attr_value_id',
             'num',
             'status',

            ['class' => 'yii\grid\ActionColumn',
                'template' => ' {edit} {delete}',
                ],
        ],
    ]); ?>
</div>

<!-- 定义数据块 -->

<?php $this->beginBlock('test'); ?>

jQuery(document).ready(function() {

highlight_subnav('keywords/index'); //子导航高亮

});

<?php $this->endBlock() ?>

<!-- 将数据块 注入到视图中的某个位置 -->

<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
