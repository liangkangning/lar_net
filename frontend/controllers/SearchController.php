<?php
namespace frontend\controllers;
use common\helpers\ArrayHelper;
use common\models\Images;
use common\models\ImagesElasticsearch;
use common\models\Keywords;
use yii\web\Controller;
use Yii;
class SearchController extends CommonController
{
    public function actionIndex()
    {
        parent::common();
        $search= htmlspecialchars(Yii::$app->request->get('keyword')) ;
//        $highlight=[
//            "pre_tags"=>["<span>"],
//            "post_tags"=>["</span>"],
//            "fields"=>[
//                "title"=>new \stdClass(),
//                "description"=>new  \stdClass()
//            ]
//        ];
//        $res=ImagesElasticsearch::find()->query([
//            "multi_match"=>[
//                "query"=>$search,
//                "fields"=>["title","description"]
//            ],
//        ])->highlight($highlight)->limit(1000)->all();
//        $products=[];
//        $ids=[];
////        if ($search=='power'){
//            foreach ($res as $result){
////               $product=Images::findOne($result->id);
////               $product->title=!empty($result->highlight['title'][0])?$result->highlight['title'][0]:$result->title;
////               $product->description=!empty($result->highlight['description'][0])?$result->highlight['description'][0]:$result->description;
//                $products[$result->id]['title']=$result->highlight['title'][0];
//                $products[$result->id]['description']=$result->highlight['description'][0];
//                $ids[]=$result->id;
//            }
////            var_dump($res);
////            exit();
////        }
//        $ids_string=ArrayHelper::array2string($ids,',');
//        $product_list=Images::find()->where(['id'=>$ids])->orderBy(["FIELD(`id`,$ids_string)"=>true]);
//        $productProvider= new \yii\data\ActiveDataProvider([
//            'query' => $product_list,
//            'pagination'=>[
//                'pageSize'=>24,
//                'pageSizeParam' => false,
//            ],
//        ]);
//        Yii::$app->params['products']=$products;
//        Yii::$app->params['productProvider']=$productProvider;
//        $this->view->params['count']=count($res);
//        $this->view->params['keyword']= Yii::$app->request->get('keyword');
//        $this->view->params['product_list']=$product_list;
////        var_dump($product_list);
//        $title=$search.' manufacturer |Large Power';
//        $this->view->params['meta_title']=$title;
//        return $this->render('index',['data'=>$this->data]);


        //旧的搜索代码
        if (empty($search)){
            $this->view->params['search']='';
        }else{
            $this->view->params['search']=$search;
        }
        $guolv=(['锂电池','电池']);
        foreach ($guolv as $key=>$value){
            $search=str_replace($value,'',$search);
        }
        $product_list=Images::find()
            ->Where(['or',['like', 'title', $search],['like', 'bianhao', $search]]);
        $count=Images::find()
            ->Where(['or',['like', 'title', $search],['like', 'bianhao', $search]])->select(['id'])->asArray()->all();
        $c=0;
        foreach ($count as $key=>$value){
            $c=$key+1;
        }
//        var_dump($product_list);
        //        1.根据编号搜索
        $title = $search . $this->view->params['meta_title'];
        $this->view->params['meta_title'] = $title;
        $this->view->params['count']=$c;
        $this->view->params['keyword']= Yii::$app->request->get('keyword');
        $this->view->params['product_list']=$product_list;

        return $this->render('index',['data'=>$this->data]);
    }
}
