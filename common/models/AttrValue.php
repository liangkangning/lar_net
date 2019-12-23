<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_attr_value".
 *
 * @property integer $id
 * @property string $name
 * @property integer $attr_id
 * @property integer $sort
 */
class AttrValue extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_attr_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attr_id'], 'required'],
            [['attr_id', 'sort'], 'integer'],
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
            'name' => '属性值',
            'attr_id' => '属性名ID',
            'sort' => '排序值',
        ];
    }
    public function getAttr(){
        return $this->hasOne(Attr::className(),['id'=>'attr_id']);
    }
}
