<?php

namespace common\models;

use yii\elasticsearch\ActiveRecord;
/**
 * ImagesSearch represents the model behind the search form about `common\models\Images`.
 */
class ImagesElasticsearch extends ActiveRecord
{
      public function attributes(){
            return ['id','title','description'];
      }

      public static function index(){
          return "large";
      }

      public static function type(){
          return "products";
      }
}
