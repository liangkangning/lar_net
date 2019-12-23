<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_attr".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 */
class Attr extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_attr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '属性类型名',
            'sort' => '排序值',
        ];

    }
    public  function getAttrValue(){
        return $this->hasMany(AttrValue::className(),['attr_id'=>'id']);

//        return $this->hasMany(AttrValue::className(),['attr_id'=>'id'])->indexBy('id')->select(['name'])->column();
    }
}
