<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_keywords".
 *
 * @property integer $id
 * @property string $keyword
 * @property string $name
 * @property string $keywords
 * @property string $longword1
 * @property string $longword2
 * @property string $longword3
 * @property string $title
 * @property string $seocontent
 * @property string $image
 * @property string $adtext
 * @property string $description
 * @property string $attr_value_id
 * @property integer $num
 * @property integer $sort
 * @property integer $status
 * @property string $category_id
 */
class Keywords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_keywords';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adtext', 'description'], 'string'],
            [['num', 'sort', 'status'], 'integer'],
            [['keyword','category_id', 'keywords', 'longword1', 'longword2', 'longword3'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 100],
            [['title', 'seocontent', 'image', 'attr_value_id'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => '核心词',
            'name' => 'URL拼音',
            'keywords' => '核心词拆词',
            'longword1' => '长尾词1',
            'longword2' => '长尾词2',
            'longword3' => '长尾词3',
            'title' => '标题',
            'seocontent' => 'Seocontent',
            'image' => 'Image',
            'adtext' => 'Adtext',
            'description' => 'Description',
            'attr_value_id' => 'Attr Value ID',
            'num' => '产品数量',
            'sort' => '排序',
            'status' => '是否显示',
            'category_id' => '分类id',
        ];
    }


    public function getImageUrl(){
        $url=Picture::find(['path'])->where(['id'=>$this->image])->asArray()->one();
//        $url=$this->hasOne(Picture::className(),['id'=>'cover'])->asArray()->one();

//       var_dump($url);
//       exit();
//        return Yii::getAlias('@imagesUrl').'//'.$url['path'];
        return Yii::getAlias('@imagesUrl').'/'.$url['path'];
    }

}

