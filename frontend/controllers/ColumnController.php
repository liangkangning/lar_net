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
        //该文章的电芯产品
        $products = [];
        $ids_18650 = explode(',',Yii::$app->params['web']['customize-best-18650']['value']);
        foreach ($ids_18650 as $id) {
            $products[] = Images::find()->where(['id' => $id])->one();
        }

        foreach ($products as &$product) {
            $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
        }
        Yii::$app->params['products'] = $products;

        $product_18650 = [];
        $ids = ['957','762','591'];
        Yii::$app->params['product_18650_titles'] = [['3.6V 2600mAh','Flashlight','18650 Low Temperature battery'],
            ['11.1V 10Ah','Portable Ultrasound Machine','18650-3S4P Lithium ion Battery packs'],
            ['48V 13Ah','Rail Drilling Machine','18650-13S4P Lithium Battery Packs']];
        foreach ($ids as $id) {
            $product_18650[] = Images::find()->where(['id' => $id])->one();
        }
        Yii::$app->params['product_18650'] = $product_18650;
        return $this->render('best18650');
    }
    public function actionCylindricalBattery(){
        parent::common();
        //该文章的电芯产品
        $products = [];
        $ids_18650 = explode(',',Yii::$app->params['web']['cylindrical-battery']['value']);
        foreach ($ids_18650 as $id) {
            $products[] = Images::find()->where(['id' => $id])->one();
        }

        foreach ($products as &$product) {
            $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
        }
        Yii::$app->params['products'] = $products;
        $this->view->params['meta_title']='Best Cylindrical Lithium Ion Battery, Cylindrical Battery Cell | Large Power';
        $this->view->params['keywords']='cylindrical lithium ion battery, cylindrical battery cell';
        $this->view->params['description']='What is a cylindrical lithium ion battery? How to choose cylindrical lithium ion battery cell models? How to customize cylindrical battery?';
        return $this->render('cylindrical');
    }

    public function actionLithiumGuide(){
        parent::common();
        $this->view->params['meta_title']='Best Lithium Ion Battery Guide 2020, Lithium Ion Battery Pack | Large Power';
        $this->view->params['keywords']='lithium battery,best lithium ion battery, Lithium Battery Pack';
        $this->view->params['description']='What are the characteristics and applications of lithium ion battery? Best lithium ion battery pack recommended.';
        return $this->render('lithiumGuide');
    }

    public function actionLithiumPolymer(){
        parent::common();
        $this->view->params['meta_title']='Best LiPo Battery Guide, Lithium Polymer Battery Pack | Large Power';
        $this->view->params['keywords']='LiPo battery,lithium polymer battery pack';
        $this->view->params['description']='What does LiPo battery mean? The difference between lithium polymer battery and li ion battery.';
        return $this->render('lithiumPolymer');
    }

    public function actionLifepo4Battery(){
        parent::common();
        $this->view->params['meta_title']='Best Lifepo4 Battery Guide, Chinese LiFePO4 Battery Pack Manufacturer | Large Power';
        $this->view->params['keywords']='best lifepo4 battery, liFePO4 battery pack';
        $this->view->params['description']='What is lifep04 battery? Is LiFePO4 the same as lithium ion? Recommend Chinese LiFePO4 battery manufacturer.';
        return $this->render('lifepo4Battery');
    }
    public function actionLithium12v(){
        parent::common();
        $this->view->params['meta_title']='12V Lithium Ion Battery Guide, 12V Li Ion Battery Pack | Large Power';
        $this->view->params['keywords']='12v lithium ion battery, 12v li ion battery, 12v lithium battery pack';
        $this->view->params['description']='What is 12v lithium battery? How much is 12v lithium battery? Description of 12v lithium battery type and application.';
        return $this->render('lithium12v');
    }

    public function actionLithium48v(){
        parent::common();
        $this->view->params['meta_title']='48V Battery,48V Lithium Ion Battery Pack | Large Power';
        $this->view->params['keywords']='48v battery,48v lithium ion battery,48v lithium battery pack';
        $this->view->params['description']='How much is 48V lithium ion battery? How do you charge 48V lithium ion battery properly?What are the differences between 48V lithium ion battery and 48V lead acid battery?';
        return $this->render('lithium48v');
    }

    public function actionConnectingLithium(){
        parent::common();
        $this->view->params['meta_title']='Connecting Lithium Batteries in Parallel and Series | Large Power';
        $this->view->params['keywords']='Batteries in Parallel,Batteries in Series';
        $this->view->params['description']='How to Connect Lithium Batteries in Parallel and Series? Series connection increases battery voltage.Parellel connection increases battery capacity.';
        return $this->render('connectingLithium');
    }

    public function actionBest26650(){
        parent::common();
        $this->view->params['meta_title']='Best 26650 Lithium Ion Battery,26650 Lithium Battery Pack | Large Power';
        $this->view->params['keywords']='26650 lithium ion battery,26650 lithium battery,26650 lithium battery pack';
        $this->view->params['description']='What is 26650 lithium ion battery?How do you choose best 26650 lithium battery?';
        return $this->render('best26650');
    }

}