<?php
namespace frontend\controllers;
use common\helpers\ArrayHelper;
use common\helpers\convert;
use common\helpers\StringHelper;
use common\models\Article;
use common\models\AttrImages;
use common\models\Category;
use common\models\CategoryImages;
use common\models\Images;
use common\models\Links;
use yii\web\Controller;
use yii;
use yii\log\Logger;
class IndexController extends CommonController{
    /**     * @var string     */
    public $layout = 'main';
    public function actionIndex()    {
        parent::common();
        $industrialBettery=parent::ca_lujin_image_list(54,3,'sort DESC','h');
        $industrialBettery_tree=ArrayHelper::CategoryList(54);
        Yii::$app->params['industrialBettery']=$industrialBettery;
        Yii::$app->params['industrialBettery_tree']=$industrialBettery_tree;
        $specialBattery=parent::ca_lujin_image_list(61,3,'sort DESC','h');
        $specialBattery_tree=ArrayHelper::CategoryList(61);
        Yii::$app->params['specialBattery']=$specialBattery;
        Yii::$app->params['specialBattery_tree']=$specialBattery_tree;
        $EnergyStorageBattery=parent::ca_lujin_image_list(59,3,'sort DESC','h');
        Yii::$app->params['EnergyStorageBattery']=$EnergyStorageBattery;
        $news_company=Article::find()->where(['category_id'=>74])->andWhere(['status'=>1])->andWhere(['like','np','h'])->orderBy('sort desc')->limit('3')->all();
        Yii::$app->params['news_company']=$news_company;
        Yii::$app->params['news_nav']=ArrayHelper::CategoryList(73);
        //        var_dump($industrialBettery);        //首页新闻调用
       $news_company=Article::find()->where(['category_id'=>75])->andWhere(['status'=>1])->orderBy('create_time desc')->limit('6')->all();
       Yii::$app->params['IndustryNews']=$news_company;
       $news_company=Article::find()->where(['category_id'=>76])->andWhere(['status'=>1])->orderBy('create_time desc')->limit('6')->all();
       Yii::$app->params['BatteryKnowledge']=$news_company;
       $news_company=Article::find()->where(['in','category_id',[75,76]])->andWhere(['status'=>1])->orderBy('click desc')->limit('6')->all();
       Yii::$app->params['HottestArticle']=$news_company;
       $news_company=Article::find()->where(['in','category_id',[75,76]])->andWhere(['status'=>1])->andWhere(['like','np','c'])->orderBy('click desc')->limit('6')->all();
       Yii::$app->params['RecommendArticle']=$news_company;
       $links=Links::find()->where(['position'=>0])->orderBy('sorrtank desc')->asArray()->all();        $this->view->params['links']=$links;
       return $this->render('index',['data'=>$this->data]);
    }
}
