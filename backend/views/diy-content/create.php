<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DiyContent */

$this->title = 'Create Diy Content';
$this->params['breadcrumbs'][] = ['label' => 'Diy Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diy-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
