<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_images_expand".
 *
 * @property integer $id
 * @property string $p_ziduan
 * @property string $expand_name
 * @property string $expand_value
 */
class ImagesExpand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_images_expand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['expand_name'], 'required'],
            [['p_ziduan', 'expand_name', 'expand_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'p_ziduan' => 'P Ziduan',
            'expand_name' => 'Expand Name',
            'expand_value' => 'Expand Value',
        ];
    }
}
