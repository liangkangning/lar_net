<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_article_anchor".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $anchor_id
 * @property integer $click
 */
class ArticleAnchor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_article_anchor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'anchor_id', 'click'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'anchor_id' => 'Anchor ID',
            'click' => 'Click',
        ];
    }
}
