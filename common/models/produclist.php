<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_product_list".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $attr_value1
 * @property integer $attr_value2
 * @property string $products
 * @property integer $num
* @property string $url
* @property string $category_name
 */
class produclist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_product_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'attr_value1', 'attr_value2','num'], 'integer'],
            [['products','url','category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => 'Num',
            'url' => 'url',
            'category_name'=>'category_name',
            'category_id' => 'Category ID',
            'attr_value1' => 'Attr Value1',
            'attr_value2' => 'Attr Value2',
            'products' => 'Products',
        ];
    }
}
