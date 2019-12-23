<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_diy_content".
 *
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $content
 */
class DiyContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_diy_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'name' => '识别符',
            'content' => '内容',
        ];
    }
}
