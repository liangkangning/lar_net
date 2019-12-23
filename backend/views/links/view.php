<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Links */

$this->title ='友情链接管理';
$this->params['breadcrumbs'][] = ['label' => '友情链接管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-view">

    <h1><?= Html::encode($model->webname) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url:url',
            'sorrtank',
            'webname',
            'position',
            'cat_id',
        ],
    ]) ?>

</div>
