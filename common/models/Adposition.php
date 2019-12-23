<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_ad_position".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 */
class Adposition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_ad_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['name'], 'string', 'max' => 50],
            [['url'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'url' => '对应的Url',
        ];
    }
    

}
