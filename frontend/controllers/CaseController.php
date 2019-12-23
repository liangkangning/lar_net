<?php



namespace frontend\controllers;



use common\helpers\ArrayHelper;

use common\helpers\Convert;
use common\models\Article;

use common\models\Category;

use common\models\Images;
use common\models\Keywords;
use yii\web\Controller;

use yii;

use yii\helpers\Html;


class CaseController extends CommonController

{

    /**

     * @var string

     */

    public $layout = 'main';


    public function actionIndex()

    {

        parent::common();
            $pid=Category::find()->where(['name'=>'case'])->one();
            $id=Category::find()->where(['pid'=>$pid->id])->asArray()->all();
            $ids=ArrayHelper::getColumn($id,'id');
            $list= Article::find()->where(['category_id'=>$ids])
                ->andWhere(['status'=>1])->orderBy('create_time desc');

            Yii::$app->params['list']=$list;
       
        return $this->render('index',['data'=>$this->data]);

    }

    public static  function itemList($c_id){
        $list= Article::find()
            ->where(['category_id'=>$c_id])
            ->andWhere(['status'=>1])->orderBy('create_time desc');

        Yii::$app->params['list']=$list;
    }
    public function actionDetail(){
        parent::common();

        if(Yii::$app->request->isGet){

            $id=Yii::$app->request->get('id');
            $convert=new Convert(32);
            $id=$convert->stringToId($id);
            $item=Article::find()
                ->where(['id'=>$id])
                ->andWhere(['status'=>1])
                ->one();

            if (!isset($item)){

                throw new \yii\web\NotFoundHttpException('The requested page does not exist.');

            }

            $item->click=$item->click+1;

            $item->save();



            Yii::$app->params['breadcrumbs']=array();

            Yii::$app->params['breadcrumbs'][]=Html::tag('a',"Home",['href'=>Yii::$app->homeUrl]);//面包屑

            if ($item->category_id!=0){

                $cat=\backend\models\Category::find()->select(['id','title','pid','name'])->where(['id'=>$item->category_id])->one();

                if($cat->pid!=0){

                    $ParCat=\backend\models\Category::find()->where(['id'=>$cat->pid])->one();

                    if (empty($ParCat['url'])){
                        Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$ParCat['title'],['href'=>'/'.$ParCat['name'].'/']);
                    }else{
                        Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$ParCat['title'],['href'=>$ParCat['url']]);
                    }




                }

                Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$cat['title'],['href'=>'/'.$cat['name'].'/']);



            }            

            if (strtotime('2018-9-6')<= $item['create_time']){
                $item['content']=\common\helpers\Html::setAnchor($item['content'],1);
            }else{
                $item['content']=\common\helpers\Html::setAnchor($item['content']);
            }

            $this->data['detail']=$item;

            //查询上-篇文章

            $prev_article = Article::find()

                ->andWhere(['status'=>1])

                ->andFilterWhere(['>', 'id', $id])

                ->andFilterWhere(['category_id'=>$item->category_id])

                ->orderBy(['id' => SORT_ASC])

                ->limit(1)

                ->one();

            //查询下-篇文章

            $next_article = Article::find()

                ->andWhere(['status'=>1])

                ->andFilterWhere(['<', 'id', $id])

                ->andFilterWhere(['category_id'=>$item->category_id])

                ->orderBy(['id' => SORT_DESC])

                ->limit(1)

                ->one();





            $this->data['prev_article'] = [

                'url' => !is_null($prev_article) ? $next_article->url : 'javascript:;',

                'title' => !is_null($prev_article) ? $prev_article->title : 'Nothing more',

            ];



            $this->data['next_article'] = [

                'url' => !is_null($next_article) ? $next_article->url : 'javascript:;',

                'title' => !is_null($next_article) ? $next_article->title : 'no more',

            ];



        }

        $keywords_category=Keywords::find()->orderBy(['sort'=>SORT_ASC])->limit(28)->asArray()->all();
        Yii::$app->params['keywords_category']=$keywords_category;
        $this->data['rand_product']=Images::find()->limit(3)->orderBy('rand()')->all();


        $industrialBettery_tree=ArrayHelper::CategoryList(54);
        Yii::$app->params['industrialBettery_tree']=$industrialBettery_tree;
        $specialBattery_tree=ArrayHelper::CategoryList(61);
        Yii::$app->params['specialBattery_tree']=$specialBattery_tree;

        Yii::$app->params['product_list']=Images::find()->orderBy("click desc")->limit(3)->all();
        Yii::$app->params['HottestBattery']=Article::find()->where(['category_id'=>76])->orderBy("click desc")->limit(8)->all();
        Yii::$app->params['LatestBattery']=Article::find()->where(['category_id'=>76])->orderBy("create_time desc")->limit(8)->all();
        Yii::$app->params['RecommendArticle']=Article::find()->where(['in','category_id',[75,76]])->andWhere(['status'=>1])->andWhere(['like','np','c'])->orderBy('click desc')->limit('6')->all();
        return $this->render('/news/detail',['data'=>$this->data]);

    }








}

