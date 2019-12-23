<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_nav_list".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property integer $sort
 */
class NavList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_nav_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'sort' => 'Sort',
        ];
    }
}
