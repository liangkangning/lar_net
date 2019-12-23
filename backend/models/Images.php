<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 下午 3:16
 */
namespace backend\models;

use yii;
//图片集
class Images extends \common\models\Images
{
    public function behaviors()
    {
        return [
            /**
             * 写库和更新库时，时间自动完成
             * 注意rules验证必填时可使用AttributeBehavior行为，model的EVENT_BEFORE_VALIDATE事件
             */
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
                'value' => time(),
            ],
        ];
    }
}