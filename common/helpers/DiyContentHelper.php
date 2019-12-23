<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\helpers;
use common\models\DiyContent;

/**
 * ArrayHelper provides additional array functionality that you can use in your
 * application.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DiyContentHelper
{
    public static function Get($name){

        $text='';
        if (isset($name)){
            $ad=DiyContent::find()->where(['name'=>$name])->one();
            $text=$ad->content;
        }
        return $text;

    }
}
