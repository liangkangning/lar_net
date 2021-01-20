<?php
namespace common\models;

/**
 * This is the model class for table "{{%ad}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property integer $sort
 */
class XunpanLog extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%xunpan_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 255]
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
            'url' => 'Url',
            'sort' => 'Sort',
        ];
    }
}
