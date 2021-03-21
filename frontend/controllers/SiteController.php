<?php



namespace frontend\controllers;



use common\helpers\ArrayHelper;
use common\helpers\FuncHelper;
use common\models\Article;
use common\models\Category;
use common\models\Images;
use common\models\Picture;
use common\models\SitemapProduct;
use yii\web\Controller;

use yii;

class SiteController extends Controller

{

    /**

     * @var string

     */
    public $time;

    public function init(){
        $this->time=date('Y-m-d',time());
    }

    public function acitonCheck(){
        echo $this->url_exists('https://www.large.net/lithium-ion-battery/list-136-p4.html');
    }

    public function actionProductList(){
  
        $time=$this->time;
        $home=Yii::$app->request->getHostInfo();
        $home=str_replace("http","https",$home);
        $data=[];
        $data[]=[
            'loc' => $home,
            'priority'=>'1.0',
            'lastmod'=>$time,
            'changefreq'=>'Weekly'
        ];
        //获取分类页
        foreach (Category::find()->where(['style'=>'image'])->all() as $key =>$value){
            $url=empty($value->url)?$home.'/'.$value->name.'/':$home.$value->url;
            $data[]=[
                'loc' => $url,
                'priority'=>0.8,
                'lastmod'=>$time,
                'changefreq'=>'Weekly'
            ];
        }
        //产品属性页
        foreach (SitemapProduct::find()->where(['status'=>1])->all() as $key=>$value){
            $l = explode('list-',$value->url);
            if ($l>1 && strlen($value->url)<50){
                if (count(explode('-',$l[1]))<3){
                    $data[]=[
                        'loc' => $home.$value->url,
                        'priority'=>0.6,
                        'lastmod'=>$time,
                        'changefreq'=>'Weekly'
                    ];
                }

            }

        }


        return \Yii::createObject([
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_XML, //设置输出的格式为 XML
            'formatters' => [
                \yii\web\Response::FORMAT_XML => [
                    'class' => 'yii\web\XmlResponseFormatter',
                    'rootTag' => 'urlset', //根节点
//                    'xmlns'=>'http://www.sitemaps.org/schemas/sitemap/0.9',
                    'itemTag' => 'url', //单元
                ],
            ],
            'data' => $data,
        ]);

    }
    public function actionProductDetail(){

        $home=Yii::$app->request->getHostInfo();
        $home=str_replace("http","https",$home);
        $data=[];

        //产品详情，根据时间排序
        foreach (Images::find()->orderBy(['create_time'=>SORT_DESC,'status'=>1])->all() as $key=>$value){
            $data[]=[
                'loc' => $home.$value->url,
                'priority'=>0.6,
                'lastmod'=>date('Y-m-d',$value->create_time),
                'changefreq'=>'Weekly'
            ];
        }
        //案例
        $pid=Category::find()->where(['name'=>'case'])->one();
        $id=Category::find()->where(['pid'=>$pid->id])->asArray()->all();
        $ids=ArrayHelper::getColumn($id,'id');
        $list= Article::find()->where(['category_id'=>$ids,'status'=>1])
            ->andWhere(['status'=>1])->orderBy('create_time desc')->all();

        foreach ($list as $key=>$value){
            $data[]=[
                'loc' => $home.$value->url,
                'priority'=>0.6,
                'lastmod'=>date('Y-m-d',$value->create_time),
                'changefreq'=>'Weekly'
            ];
        }


        return \Yii::createObject([
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_XML, //设置输出的格式为 XML
            'formatters' => [
                \yii\web\Response::FORMAT_XML => [
                    'class' => 'yii\web\XmlResponseFormatter',
                    'rootTag' => 'urlset', //根节点
                    'itemTag' => 'url', //单元
                ],
            ],
            'data' => $data,
        ]);

    }
    public function actionIndustryNews(){

        $time=$this->time;
        $home=Yii::$app->request->getHostInfo();
        $home=str_replace("http","https",$home);
        $data=[];
            $data[]=[
                'loc' => $home.'/industry-news/',
                'priority'=>0.8,
                'lastmod'=>$time,
                'changefreq'=>'Weekly'
            ];

        //行业资讯列表
        $list=Article::find()->where(['category_id'=>75,'status'=>1])->orderBy(['create_time'=>SORT_DESC])->all() ;
        foreach ($list as $key=>$value){
            $data[]=[
                'loc' => $home.$value->url,
                'priority'=>0.8,
                'lastmod'=>date('Y-m-d',$value->create_time),
                'changefreq'=>'Weekly'
            ];
        }


        return \Yii::createObject([
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_XML, //设置输出的格式为 XML
            'formatters' => [
                \yii\web\Response::FORMAT_XML => [
                    'class' => 'yii\web\XmlResponseFormatter',
                    'rootTag' => 'urlset', //根节点
                    'itemTag' => 'url', //单元
                ],
            ],
            'data' => $data,
        ]);
    }

    public function actionBatteryKnowledge(){
        $time=$this->time;
        $home=Yii::$app->request->getHostInfo();
        $home=str_replace("http","https",$home);
        $data=[];
        $data[]=[
            'loc' => $home.'/battery-knowledge/',
            'priority'=>0.8,
            'lastmod'=>$time,
            'changefreq'=>'Weekly'
        ];

        //行业资讯列表
        $list=Article::find()->where(['category_id'=>76,'status'=>1])->orderBy(['create_time'=>SORT_DESC])->all() ;
        foreach ($list as $key=>$value){
            $data[]=[
                'loc' => $home.$value->url,
                'priority'=>0.6,
                'lastmod'=>date('Y-m-d',$value->create_time),
                'changefreq'=>'Weekly'
            ];
        }


        return \Yii::createObject([
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_XML, //设置输出的格式为 XML
            'formatters' => [
                'xmlns'=>'https://www.sitemaps.org/schemas/sitemap/0.9',
                \yii\web\Response::FORMAT_XML => [
                    'class' => 'yii\web\XmlResponseFormatter',
                    'rootTag' => 'urlset', //根节点
                    'itemTag' => 'url', //单元
                ],
            ],
            'data' => $data,
        ]);
    }

    //检测url是否存在
    function url_exists($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch); // $resp = curl_exec($ch);
        $curl_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
//        如果对于302这样的跳转也算作访问成功的话，你也可以加入到判断里面。
        if ($curl_code == 200 || $curl_code == 302) {
            return true;
            echo '连接成功，状态码：' . $curl_code;
        } else {
            return false;
            echo '连接失败，状态码：' . $curl_code;
        }
    }

    //获取新闻列表
    function actionNewsList(){
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        $t = strtotime('yesterday');
        $list = Article::find()->where(['or',
                ['and',
                    [">","create_time",$t],
                    ['status' => '1']
                ],
                ['and',
                    [">","admin_time",$t],
                    ['status' => '1']
                ]
            ]
        )->asArray()->all();

//        $query = Article::find()->where(['or',
//                ['and',
//                    [">","create_time",$t],
//                    ['status' => '1']
//                ],
//                ['and',
//                    [">","update_time",$t],
//                    ['status' => '1']
//                ]
//            ]
//        );
//        var_dump( $query->createCommand()->getRawSql());die;
//        var_dump($list);
        return $list;
    }

    /**
     * 获取产品列表
     */
    function actionGetProducts(){
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        $t = strtotime('yesterday');
        $list = Images::find()->where(['or',
                ['and',
                    [">","create_time",$t],
                    ['status' => '1']
                ],
                ['and',
                    [">","admin_time",$t],
                    ['status' => '1']
                ]
            ]
        )->asArray()->all();
        return $list;
    }


    function actionGetImageUrl(){
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        $id = Yii::$app->request->get('id');
        if ($id){
            $res = Picture::find()->where(['id' => $id])->one();
            if ($res){
                return "https://www.large.net".$res->url;
            }
        }
        return null;
    }

    public function actionDelete404(){
        $home=Yii::$app->request->getHostInfo();
//        $home=str_replace("http","https",$home);
        $data = SitemapProduct::find()->limit(10)->where(['utime'=>0])->asArray()->all();
        foreach ($data as $item) {
            $url = $home . $item['url'];
            var_dump($url);
            $status = FuncHelper::http_status($url);
           var_dump($status);
           //更新状态码，还有更新时间
            $obj = SitemapProduct::find()->where(['id' => $item['id']])->one();

            $obj['status'] = $status?1:0;
            $obj->utime = time();
            $obj->save();
//            var_dump($obj);

        }

    }



}

