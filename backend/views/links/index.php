<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $searchModel common\models\LinksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '友情链接管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('增加链接', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//             'id',
            'url:url',
            'sorrtank',
            'webname',
            'position',
       
        	['attribute'=>'cat_id',
        		 'value'=>'category.title',	
        		 'filter'=>ArrayHelper::listDataLevel(\backend\models\Category::find()->asArray()->all(), 'id', 'title','id','pid'),
        		 
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    	
    ]); ?>
</div>
