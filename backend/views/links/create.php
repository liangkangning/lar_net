<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Links */

$this->title = '新增友情链接';
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
