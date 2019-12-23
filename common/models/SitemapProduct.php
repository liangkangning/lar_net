<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_sitemap_product".
 *
 * @property integer $id
 * @property integer $status
 * @property string $url
 */
class SitemapProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_sitemap_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
        ];
    }
}
