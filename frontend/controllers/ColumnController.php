<?php


namespace frontend\controllers;
use common\models\Images;
use Yii;

class ColumnController extends CommonController
{

    public function actionBest18650(){
        parent::common();
        $this->view->params['meta_title']='Best 18650 Lithium Battery Pack 2020, Top 18650 Battery Guide | Large Power';
        $this->view->params['keywords']='best 18650 lithium battery, top 18650 battery';
        $this->view->params['description']='How to choose best 18650 lithium battery pack? Search best 18650 battery by brand, capacity, c-rate, etc. We customize 18650 battery pack for all devices.';
        $products = Images::find()->where(['category_id' => 91])->all();
        foreach ($products as &$product) {
            $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
        }
        Yii::$app->params['products'] = $products;

        $product_18650 = [];
        $ids = ['957','762','705'];
        Yii::$app->params['product_18650_titles'] = [['3.6V 2600mAh','Flashlight','18650 Low Temperature battery'],['11.1V 10Ah','Portable Ultrasound Machine','18650-3S4P Lithium ion Battery packs'],
            ['36V 20Ah','Patrol Robot','18650-13S6P Lithium ion battery packs']];
        foreach ($ids as $id) {
            $product_18650[] = Images::find()->where(['id' => $id])->one();
        }
        Yii::$app->params['product_18650'] = $product_18650;
        return $this->render('best18650');
    }
}