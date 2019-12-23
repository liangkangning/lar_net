<?php



namespace backend\controllers;



use common\models\Category;
use common\models\CategoryImages;
use Yii;

use backend\models\Shop;

use common\helpers\ArrayHelper;

use common\helpers\FuncHelper;

use common\models\ShopGroup;

use backend\models\search\ShopSearch;

use yii\web\NotFoundHttpException;





/**

 * 商品控制器

 * 作者 ：longfei

 * Email ：phphome@qq.com

 */

class TestController extends BaseController

{

    /**

     * ---------------------------------------

     * 列表页

     * ---------------------------------------

     */

    public function actionIndex()

    {
        foreach (CategoryImages::find()->all() as $key=>$value){
              $ca=Category::find()->where(['id'=>$value->category_id])->one();
              if ($ca->pid==0){
                   $this->update_category_images($value->category_id,$value->images_id,$ca->id);
              }else{
                  $this->update_category_images($value->category_id,$value->images_id,$ca->pid);
              }
        }

    }
    public function update_category_images($cat_id,$image_id,$top_id){
          $ca=CategoryImages::find()->where(['category_id'=>$cat_id,'images_id'=>$image_id])->one();
          $ca->top_c_id=$top_id;
          $ca->save();
    }




}

