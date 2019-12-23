<?php

namespace common\models;

use common\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "yii2_category_images".
 *
 * @property integer $category_id
 * @property integer $images_id
* @property integer $top_c_id
 */
class CategoryImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'yii2_category_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'images_id'], 'required'],
            [['category_id', 'images_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'images_id' => 'Images ID',
        ];
    }
    public static function addTags($tags,$images_id)
    {
        if(empty($tags)) return ;
        foreach ($tags as $name)
        {
            if (empty(self::find()->where(['category_id'=>$name,'images_id'=>$images_id])->one())){
                $cat=Category::find()->where(['id'=>$name])->one();
                $tag = new CategoryImages;
                $tag->category_id=$name;
                $tag->images_id=$images_id;
                if ($cat->pid==0){
                    $tag->top_c_id=$name;
                }else{
                    $tag->top_c_id=$cat->pid;
                }
                $tag->save();
            }
        }
    }
    public static function removeTags($tags,$images_id)
    {

        if(empty($tags)) return ;
        foreach (self::find()->where(['images_id'=>$images_id])->asArray()->all() as $key=>$value){
            if (!in_array($value['category_id'],$tags)){
                $aTag = self::find()->where(['category_id'=>$value['category_id'],'images_id'=>$value['images_id']])->one();
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


}
