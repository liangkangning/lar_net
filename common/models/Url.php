<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_url".
 *
 * @property integer $id
 * @property integer $create_time
 * @property string $url
 * @property integer $num
 */
class Url extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'num'], 'integer'],
            [['url'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'create_time' => 'Create Time',
            'url' => 'Url',
            'num' => 'Num',
        ];
    }
}
