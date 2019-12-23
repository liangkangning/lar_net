<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_links".
 *
 * @property integer $id
 * @property string $url
 * @property integer $sorrtank
 * @property string $webname
 * @property integer $position
 * @property integer $cat_id
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sorrtank', 'position', 'cat_id'], 'integer'],
            [['url'], 'string', 'max' => 120],
            [['webname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => '网站链接',
            'sorrtank' => '排序（由小到大排序）',
            'webname' => '网站名称',
            'position' => '首页/内页',
            'cat_id' => '所属栏目',
        ];
    }
    public function getCategory()
    {
    	return $this->hasOne(Category::className(), ['id' => 'cat_id']);
    }
}
