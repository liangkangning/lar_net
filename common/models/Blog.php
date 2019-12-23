<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_blog".
 *
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $content
 * @property string $description
 * @property string $create_time
 * @property integer $update_time
 * @property integer $click
 * @property string $tags
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'tags'], 'string'],
            [['create_time'], 'safe'],
            [['update_time', 'click'], 'integer'],
            [['title', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'content' => 'Content',
            'description' => 'Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'click' => 'Click',
            'tags' => 'Tags',
        ];
    }
    public function getUrl(){
        return \Yii::$app->urlManager->createUrl(
            ['blog/detail','id'=>$this->id]
        );
    }
}
