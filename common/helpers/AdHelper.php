<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\helpers;
use common\models\Ad;
use common\models\Adposition;

/**
 * ArrayHelper provides additional array functionality that you can use in your
 * application.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdHelper
{
  public static function GetAd_list($name){

      $array=array();
      if (isset($name)){
           $ad=Adposition::find()->where(['url'=>$name])->one();
           if (isset($ad)){
               $array=Ad::find()->where(['type'=>$ad->id,'status'=>1])->orderBy('sort asc')->all();
           }
      }
      return $array;

  }
}
