<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_property".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $title
 * @property integer $sort
 * @property integer $category_id
 * @property string $name
 * @property string $link
 * @property string $link_value
 * @property integer $status
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'sort', 'category_id', 'status'], 'integer'],
            [['pid', 'sort', 'category_id', 'status', 'style'], 'integer'],
            [['title'], 'required'],
            [['value'], 'number'],
            [['title', 'name'], 'string', 'max' => 50],
            [['link', 'link_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'title' => '名称',
            'sort' => '排序',
            'category_id' => '对于的分类',
            'name' => '标识',
            'link' => '外链',
            'link_value' => '外链文本值',
            'status' => '状态',
            'style' => '类型（文本|数字）',
            'value' => '数字值',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
