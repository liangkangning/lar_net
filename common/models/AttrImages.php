<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_attr_images".
 *
 * @property integer $id
 * @property integer $images_id
 * @property integer $attr_id
 * @property integer $attr_value_id
 */
class AttrImages extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_attr_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images_id', 'attr_id', 'attr_value_id'], 'required'],
            [['images_id', 'attr_id', 'attr_value_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images_id' => 'Images ID',
            'attr_id' => 'Attr ID',
            'attr_value_id' => 'Attr Value ID',
        ];
    }
    public function getAttrName(){
       return $this->hasOne(Attr::className(), ['id' => 'attr_id']);
    }
    public function getAttrValueName(){
        return  $this->hasOne(AttrValue::className(), ['id' => 'attr_value_id']);
    }




}
