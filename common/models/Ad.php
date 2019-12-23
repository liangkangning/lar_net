<?php

namespace common\models;

use Yii;
use common\modelsgii\Position;

/**
 * This is the model class for table "{{%ad}}".
 *
 * @property integer $id
 * @property string $image
 * @property integer $type
 * @property string $title
 * @property string $url
 * @property integer $sort
 * @property integer $status
* @property integer $tuozhan
 */
class Ad extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'type'], 'required'],
            [['type', 'sort', 'status'], 'integer'],
            [['image', 'url','tuozhan'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'type' => 'Type',
            'title' => 'Title',
            'url' => 'Url',
            'sort' => 'Sort',
            'status' => 'Status',
            'tuozhan' => 'tuozhan',
        ];
    }
    public function getPosition()
    {
    	return $this->hasOne(Adposition::className(), ['id' => 'type']);
    }
    public function getImageUrl(){
        $url=Picture::find(['path'])->where(['id'=>$this->image])->asArray()->one();
//        $url=$this->hasOne(Picture::className(),['id'=>'cover'])->asArray()->one();

//       var_dump($url);
//       exit();
//        return Yii::getAlias('@imagesUrl').'//'.$url['path'];
        return Yii::getAlias('@imagesUrl').'//'.$url['path'];
    }
    
    
}
