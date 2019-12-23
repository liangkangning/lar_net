<?php

namespace common\models;

use common\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "yii2_attr_images_select".
 *
 * @property integer $images_id
 * @property integer $attr_value_id
 */
class AttrImagesSelect extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_attr_images_select';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images_id', 'attr_value_id'], 'required'],
            [['images_id', 'attr_value_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'images_id' => 'Images ID',
            'attr_value_id' => 'Attr Value ID',
        ];
    }
    public static function addTags($tags,$images_id)
    {
        if(empty($tags)) return ;
        foreach ($tags as $name)
        {

//            exit();
            if (empty(self::find()->where(['attr_value_id'=>$name,'images_id'=>$images_id])->one())){
                $tag = new AttrImagesSelect();
                $tag->attr_value_id=$name;
                $tag->images_id=$images_id;
                $tag->save();

                $attr_value=AttrValue::find()->where(['id'=>$name])->one();
                $Attrimg = new AttrImages();
                $Attrimg->attr_value_id=$name;
                $Attrimg->attr_id=$attr_value->attr->id;
                $Attrimg->images_id=$images_id;
//                var_dump($Attrimg);
                $Attrimg->save();


            }
        }
    }
    public static function removeTags($tags,$images_id)
    {
        if(empty($tags)) return ;

        foreach (self::find()->where(['images_id'=>$images_id])->asArray()->all() as $key=>$value){
            if (!in_array($value['attr_value_id'],$tags)){
                $aTag = self::find()->where(['attr_value_id'=>$value['attr_value_id'],'images_id'=>$value['images_id']])->one();
                $aTag->delete();
            }
        }
        foreach (AttrImages::find()->where(['images_id'=>$images_id])->asArray()->all() as $key=>$value){
            if (!in_array($value['attr_value_id'],$tags)){
                $aTag = AttrImages::find()->where(['attr_value_id'=>$value['attr_value_id'],'images_id'=>$value['images_id']])->one();
                $aTag->delete();
            }
        }


    }
    public static function updateFrequency($oldTags,$newTags,$images_id)
    {
        $oldTagsArray = ArrayHelper::string2array($oldTags);
        $newTagsArray = ArrayHelper::string2array($newTags);
        self::addTags(array_values(array_diff($newTagsArray,$oldTagsArray)),$images_id);
        self::removeTags($newTagsArray,$images_id);
    }
    public function getAttr2images($list=null){
        return $this->hasMany(AttrValue::className(), ['images_id' => 'id']);
    }
}
