<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DiyContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diy Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diy-content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Diy Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'name',
            'content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


<?php $this->beginBlock('test'); ?>

jQuery(document).ready(function() {

    highlight_subnav('diy-content/index'); //子导航高亮

});

<?php $this->endBlock() ?>
