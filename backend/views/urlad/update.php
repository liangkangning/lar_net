<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Adposition */

$this->title = '更新 ' ;
$this->params['breadcrumbs'][] = ['label' => 'Adpositions', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adposition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<!-- 定义数据块 -->
<?php $this->beginBlock('test'); ?>
jQuery(document).ready(function() {
    highlight_subnav('adposition/index'); //子导航高亮

});
<?php $this->endBlock() ?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
