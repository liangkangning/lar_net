<?php

namespace common\models;

use Yii;
use common\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property string $id
 * @property string $pid
 * @property string $name
 * @property string $title
* @property string $url
 * @property string $link
 * @property string $extend
 * @property string $meta_title
 * @property string $keywords
 * @property string $description
 * @property string $create_time
 * @property string $update_time
 * @property integer $sort
 * @property integer $status
 * @property string $style 
 * @property string $content 
 * @property string $tempindex 
 * @property string $templist 
 * @property string $tempitem
 * @property string $cover
 * @property string $list_content
 * @property string $m_cover
 * @property string $m_list_content
* @property integer $top
 */
class Category extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'create_time', 'update_time', 'sort', 'status','top'], 'integer'],
            [['name', 'title'], 'required'],
            [['list_content','extend','content'], 'string'],
            [['name'], 'string', 'max' => 100],
//             [['title', 'meta_title'], 'string', 'max' => 50],
        	[[ 'style'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 250],
            [['title', 'meta_title','m_cover','m_list_content','cover','keywords', 'description','url'], 'string', 'max' => 255],
        	[['keywords', 'description',  'tempindex', 'templist', 'tempitem'], 'string', 'max' => 255],
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
            'pid' => 'Pid',
            'name' => 'Name',
            'title' => 'Title',
            'link' => 'Link',
            'extend' => 'Extend',
            'meta_title' => 'Meta Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'sort' => 'Sort',
            'status' => 'Status',
        	'style' => 'Style',
            'url' => 'Url',
        	'content' => 'Content',
        	'tempindex' => 'Tempindex',
        	'templist' => 'Templist',
        	'tempitem' => 'Tempitem',
            'cover' => 'Cover',
            'list_content' => 'List Content',
            'm_cover' => 'Cover',
            'm_list_content' => 'List Content',
            'top'=>'top',
        ];
    }
    
    public static function getCategoryTree(){

      return ArrayHelper::list_to_tree(Category::find()->asArray()->all(), 'id', 'pid');
    }
    public function getimageUrl(){
        return Yii::getAlias('@imagesUrl').'/'.$this->cover;
    }


    public function getCategoryImages(){
        return $this->hasMany(CategoryImages::className(), ['category_id' => 'id']);
    }
    public function getImages($array=array()){
        if ($this->pid==0){
            if (empty($array)){
                $obj=$this->hasMany(Images::className(),['id'=>'images_id'])
                ->viaTable('yii2_category_images', ['top_c_id' => 'id']);
            }else{
                $obj= $this->hasMany(Images::className(),['id'=>'images_id'])
                    ->where(['id'=>$array])
                    ->viaTable('yii2_category_images', ['top_c_id' => 'id']);
            }
        }else{
            if (empty($array)){
                $obj=$this->hasMany(Images::className(),['id'=>'images_id'])
                    ->via('categoryImages');
            }else{
                $obj= $this->hasMany(Images::className(),['id'=>'images_id'])
                    ->where(['id'=>$array])
                    ->via('categoryImages');
            }
        }

        return $obj;
    }
    public function getAttrImages($array=array()){
       if (empty($array)){
           $obj=$this->hasMany(AttrImages::className(),['images_id'=>'id'])
               ->via('images')->groupBy(['attr_id','attr_value_id']);
       }else{
           $obj=$this->hasMany(AttrImages::className(),['images_id'=>'id'])
               ->where(['images_id'=>$array])
               ->via('images')->groupBy(['attr_id','attr_value_id']);
       }
        return $obj;
    }

    public function getImagesCount(){
        return $this->hasMany(Images::className(),['id'=>'images_id'])
            ->via('categoryImages')->count();
    }

    public function getNextNav(){
        return Category::find()->where(['pid'=>$this->id,'status'=>1])->all();
    }




}
