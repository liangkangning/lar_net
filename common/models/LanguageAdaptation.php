<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_language_adaptation".
 *
 * @property integer $id
 * @property string $name
 * @property string $en
 * @property string $cn
 */
class LanguageAdaptation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_language_adaptation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'en', 'cn'], 'string', 'max' => 255],
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
            'en' => 'En',
            'cn' => 'Cn',
        ];
    }
}
