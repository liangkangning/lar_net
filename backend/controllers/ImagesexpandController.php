<?php

namespace backend\controllers;

use common\helpers\ArrayHelper;
use common\helpers\Html;
use common\helpers\StringHelper;
use common\models\Anchor;
use common\models\Article;
use common\models\ArticleAnchor;
use common\models\Attr;
use common\models\AttrImages;
use common\models\AttrImagesSelect;
use common\models\AttrValue;
use common\models\Blog;
use common\models\Category;
use common\models\CategoryImages;
use common\models\Images;
use common\models\produclist;
use common\models\Url;
use SebastianBergmann\CodeCoverage\Report\Html\HTMLTest;
use Yii;
use common\models\ImagesExpand;
use yii\data\ActiveDataProvider;
use yii\helpers\HtmlPurifier;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImagesExpandController implements the CRUD actions for ImagesExpand model.
 */
class ImagesexpandController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [

                ],
            ],
        ];
    }

    /**
     * Lists all ImagesExpand models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->setForward();
        $dataProvider = new ActiveDataProvider([
            'query' => ImagesExpand::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUrl()
    {
//        var_dump(Images::find()->select('id')->asArray()->all());
//        exit();

        foreach (Images::find()->select('id')->asArray()->all() as $bk=>$bdv){
//            echo $bk.'----';
            $id=$bdv['id'];
        $arr=AttrImagesSelect::find()->where(['images_id'=>$id])->select('attr_value_id')->asArray()->orderBy('attr_value_id')->all();
        $arr=ArrayHelper::getColumn($arr,'attr_value_id');
        if(is_array($arr)){

        $t = self::getCombinationToString($arr);
        $all=array();
        $images=Images::find()->select('category_id')->where(['id'=>$id])->one();
        foreach (ArrayHelper::string2array($images->category_id,',') as $kk=>$vv){
            $cat=Category::find()->where(['id'=>$vv])->one();
            foreach ($t as $key=>$value){
                $all[][]='http://www.juda.cn/'.$cat['name'].'/list-'.ArrayHelper::array2string($value,'-').'.html';
            }
            $userkey=['url'];//测试数据键
//            var_dump($all);

            $uservale=array(
                '0'=>array('admin2'),
                '1'=>array('admin1'),
                '2'=>array('admin55'),
                '3'=>array('admin66'),
            );//测试数据值
//            var_dump($uservale);
            $res= \Yii::$app->db->createCommand()->batchInsert(Url::tableName(), $userkey, $all)->execute();
        }
        }
        }


    }
    public function actionCate_list(){
        $urls=array();
        //            属性组合
//            属性：型号
        $dianya= Attr::find()->where(['name'=>'电池电压'])->one();
        $dianyaList=ArrayHelper::getColumn(AttrValue::find()->where(['attr_id'=>$dianya['id']])->asArray()->all(),'id');

        $xinghao= Attr::find()->where(['name'=>'电芯型号'])->one();
        $xinghaoList=ArrayHelper::getColumn(AttrValue::find()->where(['attr_id'=>$xinghao['id']])->asArray()->all(),'id');

        $rongliang= Attr::find()->where(['name'=>'电池容量'])->one();
        $rongliangList=ArrayHelper::getColumn(AttrValue::find()->where(['attr_id'=>$rongliang['id']])->asArray()->all(),'id');

        $pinpai= Attr::find()->where(['name'=>'电芯品牌'])->one();
        $pinpaiList=ArrayHelper::getColumn(AttrValue::find()->where(['attr_id'=>$pinpai['id']])->asArray()->all(),'id');

        $yingyong= Attr::find()->where(['name'=>'应用领域'])->one();
        $yingyongList=ArrayHelper::getColumn(AttrValue::find()->where(['attr_id'=>$yingyong['id']])->asArray()->all(),'id');
        $Av=AttrValue::find()->asArray()->all();
//        var_dump($Av);
        foreach (Category::find()->where(['in','id',[9,44,45,41,42,43,40]])->all() as $key=>$value){
            $urls[]='http://www.juda.cn/'. $value['name'].'/';
//            1个属性组合

            foreach ($Av as $kk=>$vv){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $productList->attr_value1=$vv['id'];
                $productList->save();
            }


            //两两组合
            $list1=$this->zuhe($dianyaList,$xinghaoList);
            foreach ($list1 as $k=>$v){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $ss=explode('-',$v);
                $productList->attr_value1=$ss[0];
                $productList->attr_value2=$ss[1];
                $productList->save();
            }

            $list1=$this->zuhe($dianyaList,$rongliangList);
            foreach ($list1 as $k=>$v){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $ss=explode('-',$v);
                $productList->attr_value1=$ss[0];
                $productList->attr_value2=$ss[1];
                $productList->save();
            }

            $list1=$this->zuhe($dianyaList,$yingyongList);
            foreach ($list1 as $k=>$v){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $ss=explode('-',$v);
                $productList->attr_value1=$ss[0];
                $productList->attr_value2=$ss[1];
                $productList->save();
            }


//            型号
            $list1=$this->zuhe($xinghaoList,$rongliangList);
            foreach ($list1 as $k=>$v){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $ss=explode('-',$v);
                $productList->attr_value1=$ss[0];
                $productList->attr_value2=$ss[1];
                $productList->save();
            }
            $list1=$this->zuhe($xinghaoList,$pinpaiList);
            foreach ($list1 as $k=>$v){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $ss=explode('-',$v);
                $productList->attr_value1=$ss[0];
                $productList->attr_value2=$ss[1];
                $productList->save();
            }
            $list1=$this->zuhe($xinghaoList,$yingyongList);
            foreach ($list1 as $k=>$v){
                $productList= new produclist();
                $productList->category_id=$value['id'];
                $productList->category_name=$value['name'];
                $ss=explode('-',$v);
                $productList->attr_value1=$ss[0];
                $productList->attr_value2=$ss[1];
                $productList->save();
            }





        }
//        var_dump($list1);
        echo '完成';
    }
    public function actionCate_list_product(){
        foreach (produclist::find()->all() as $key=>$value) {
            $category_id = $value->category_id;
            $value1 = $value->attr_value1;
            $value2 = $value->attr_value2;
            $cate = Category::find()->where(['id' => $category_id])->one();
            $list = array();
            $list[] = $value1;
            if (!empty($value2)){
                $list[] = $value2;
            }

            $array = array();
            foreach ($list as $k => $v) {
                $arrayItem = ArrayHelper::getColumn(AttrImagesSelect::find()->where(['attr_value_id' => $v])->asArray()->all(), 'images_id');//选择的属性对于的商品
                if ($k >= 1) {
                    $array = array_merge($array, $arrayItem);
                    $array = ArrayHelper::FetchRepeatMemberInArray($array);
                } else {
                    $array = array_merge($array, $arrayItem);
                }
            }
            if (count($array)>0){
                $product_list = $cate->getImages($array)->select(['id'])->asArray()->all();
                $lend=count($product_list);
                if ($lend>0){
                $product_list_id=array();
                foreach ($product_list as $k=>$v){
                    $product_list_id[]=$v['id'];
                }
                $product_list_id=ArrayHelper::array2string($product_list_id,'-');

                $productOne=produclist::find()->where(['id'=>$value->id])->one();
                $productOne->num=$lend;
                $productOne->products=$product_list_id;
                if (empty($value2)){
                    $productOne->url='http://m.juda.cn/mip/'.$value->category_name.'/list-'.$value1.'.html';
                }else{
                    $productOne->url='http://m.juda.cn/mip/'.$value->category_name.'/list-'.$value1.'-'.$value2.'.html';
                }

                $productOne->save();
                }
            }
        }
        echo '成功';

    }
    public function zuhe($list,$list2){
        $arr=array();
        foreach ($list as $key=>$value){
            foreach ($list2 as $k=>$v){
                if($value<$v){
                    $arr[]=$value.'-'.$v;
                }else{
                    $arr[]=$v.'-'.$value;
                }

            }
        }
        return $arr;

    }
public function actionAnchor(){
       $anchors=Anchor::find()->asArray()->orderBy("sort desc")->all();
        foreach (Article::find()->asArray()->select(['id','content'])->all() as $key=>$value){
            var_dump($value['id']);

            if (strlen($value['content'])>10){
            $Anchor_ids= Html::getAnchor(Html::decode($value['content']),$anchors);

           foreach ($Anchor_ids as $k){
                $modle=new ArticleAnchor();
                $modle->article_id=$value['id'];
                $modle->anchor_id=$k;
                $modle->save();
            }
            }

       }
}
    public function actionSetanchor(){
        $id=Yii::$app->request->get('id');
        $article=Article::find()->where(['id'=>$id])->one();
        $str=$article->content;
        if(strpos($str,'=""')) {
            return array();
        }
        $rule = "/<img.*>/";
        //先把img排除掉,并且将其存为一个数组
        preg_match_all($rule, $str, $matches);
        $str_without_alt = preg_replace($rule, 'Its_Just_A_Mark', $str);
        //锚处理
        $str_s=$str;
        $i = 0;
        $k=0;
        $urls=array();
        $anchor_ids=array();
        foreach ($anchors as $key=>$anchor) {
            $rule = "/" . $anchor['name'] . "(?![^<>]*>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
            $str_new = preg_replace($rule, $href, $str, $anchor['num']);
            if ($str_old != $str_new && !in_array($anchor['url'],$urls)) {
                array_push($urls,$anchor['url']);
                array_push($anchor_ids,$anchor['id']);
                $str=$str_new;
                $i++;
            }
            if ($i >= 4) {
                break;
            }//最多显示4个关键词
        }
        if ($i<=3){
            $str= $str_s;
            $urls=array();
            $anchor_ids=array();
            foreach ($anchors as $key=>$anchor) {
                $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
                $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
                $str_old = $str;
                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
                if ($str_old != $str_new) {
                    array_push($urls,$anchor['url']);
                    array_push($anchor_ids,$anchor['id']);
                    $str=$str_new;
                    $k++;
                }
                if ($k >= 4) {
                    break;
                }//最多显示4个关键词
            }

        }

    }


 public   function getCombinationToString($arr) {

//        var_dump($arr);
        foreach ($arr as $key=>$value){
            $n=$key+1;
            $r = self::Combination($arr,$n);
            if ($key==0){
                $k=$r;
            }else{
                $k=array_merge($k,$r);
            }


        }
        return $k;




    }
public  function Combination($arr, $size = 1) {
        $len = count($arr);
        $max = pow(2,$len) - pow(2,$len-$size);
        $min = pow(2,$size)-1;

        $r_arr = array();
        for ($i=$min; $i<=$max; $i++){
            $count = 0;
            $t_arr = array();
            for ($j=0; $j<$len; $j++){
                $a = pow(2, $j);
                $t = $i&$a;
                if($t == $a){
                    $t_arr[] = $arr[$j];
                    $count++;
                }
            }
            if($count == $size){
                $r_arr[] = $t_arr;
            }
        }
        return $r_arr;
    }
    public  function  actionArtcontent(){
        $all=Article::find()->all();
        foreach ($all as $key=>$value){
            $model=Article::findOne($value->id);
            if(isset($model->content)){
                $model->content= preg_replace("/<(\/?a.*?)>/si","",$model->content);
                $model->save();
                echo '1----';

            }
        }

    }
    public  function  actionBlog(){//更新文章的描述
//        1.获取文章，判断描述是否为空
        $all=Blog::find()->all();
        foreach ($all as $key=>$value){
            $model=Blog::findOne($value->id);
            if(true){

                $model->content=  str_replace('&nbsp;','',$model->content);
                $des=StringHelper::html2text($model->content);
                $dess=StringHelper::truncate($des,100,'');
                $model->description="$dess";
                $model->click=rand(5,500);
                $model->save();
                echo '1----'.$model->click;

            }
        }
    }
    public  function  actionArticle(){//更新文章的描述
//        1.获取文章，判断描述是否为空
        $all=Article::find()->all();
        foreach ($all as $key=>$value){
            $model=Article::findOne($value->id);
            if(isset($model->description)){
                $des=StringHelper::html2text($model->content);
                $dess=StringHelper::truncate($des,100,'');
                $model->description="$dess";
                $model->save();
                echo '1----';

            }
        }
    }
    public  function  actionAkeyword(){//更新文章的描述
//        1.获取文章，判断描述是否为空
        $all=Article::find()->all();
        foreach ($all as $key=>$value){
            $model=Article::findOne($value->id);
            if(empty($model->keywords)){
                $model->keywords=$model->title;
                $model->save();
                echo '1----';

            }
        }
    }


    public  function  actionCategory_images()//清除已删除的产品，对于的记录表
    {
        foreach (CategoryImages::find()->all() as $key=>$value){
            $images=Images::find()->where(['id'=>$value->images_id])->one();
            if (!isset($images)){
                $cate=CategoryImages::find()->where(['category_id'=>$value->category_id,'images_id'=>$value->images_id])->one();
                $cate->delete();
                echo '111-----';
            }
        }

    }
    public  function  actionAttr_images()
    {
        foreach (AttrImages::find()->all() as $key=>$value){
            $images=Images::find()->where(['id'=>$value->images_id])->one();
            if (!isset($images)){
                $cate=AttrImages::findOne($value->id);
                $cate->delete();
                echo '111-----';
            }
        }

    }
    public  function  actionAttr_images_select()
    {
        foreach (AttrImagesSelect::find()->all() as $key=>$value){
            $images=Images::find()->where(['id'=>$value->images_id])->one();
            if (!isset($images)){
                $cate=AttrImagesSelect::find()->where(['attr_value_id'=>$value->attr_value_id,'images_id'=>$value->images_id])->one();
                $cate->delete();
                echo '111-----';
            }
        }

    }



    /**
     * ---------------------------------------
     * 添加
     * ---------------------------------------
     */
    public function actionAdd(){
        $model = $this->findModel(0);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('ImagesExpand');
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }

        /* 获取模型默认数据 */
        $model->loadDefaultValues();
        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    /**
     * ---------------------------------------
     * 编辑
     * ---------------------------------------
     */
    public function actionEdit(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('ImagesExpand');
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }
        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing ImagesExpand model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ImagesExpand model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ImagesExpand the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new ImagesExpand();
        }
        if (($model = ImagesExpand::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
