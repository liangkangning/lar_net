<?php

namespace common\models;

use common\helpers\Convert;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "yii2_images".
 *
 * @property integer $id
 * @property integer $oldid
 * @property string $category_id
 * @property string $category_id2
 * @property string $name
 * @property string $title
 * @property string $cover
 * @property string $description
 * @property string $content
 * @property string $images
 * @property string $extend
 * @property integer $sort
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $status
 * @property string $tags
 * @property string $keywords
 * @property integer $click
 * @property string $np
 * @property string $bianhao
 * @property string $dianya
 * @property string $rongliang
* @property string $xinghao
 * @property string $chicun
 * @property string $fdwendu
 * @property string $cdwendu
 * @property string $lingyu
 * @property string $attr_value_id
 * @property string $seo_title
 * @property string $diy_content
* @property integer $top
 * */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $_oldCategory_id;
    public $_oldAttr_value_id;

    public function behaviors(){
         return[
             [
                 "class"=>TimestampBehavior::className(),
                 "createdAtAttribute"=>"create_time",
                 "updatedAtAttribute"=>"update_time",
                 "attributes"=>[
                     ActiveRecord::EVENT_BEFORE_INSERT=>['create_time',"update_time"],
                     ActiveRecord::EVENT_BEFORE_UPDATE=>['update_time'],
                 ]

             ]
         ];
    }
    public static function tableName()
    {
        return 'yii2_images';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['title','seo_title'],'unique'],
            [['content', 'extend'], 'string'],
            [['sort', 'create_time', 'update_time', 'status','top', 'click','oldid'], 'integer'],
            [['dianya', 'rongliang'], 'number'],
            [['category_id', 'attr_value_id', 'cover', 'description', 'images', 'tags', 'keywords', 'np','seo_title','xinghao'], 'string', 'max' => 255],
            [['diy_content'], 'string', 'max' => 500],
            [['category_id2'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 40],
            [['title'], 'string', 'max' => 255],
            [['bianhao', 'chicun', 'fdwendu', 'cdwendu', 'lingyu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oldid'=>'旧ID号',
            'category_id' => 'Category ID',
            'attr_value_id' => 'Attr Value ID',
            'category_id2' => 'Category Id2',
            'name' => 'Name',
            'title' => 'Title',
            'cover' => 'Cover',
            'description' => 'Description',
            'content' => 'Content',
            'images' => 'Images',
            'extend' => 'Extend',
            'sort' => 'Sort',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'status' => 'Status',
            'top' => 'top',
            'tags' => 'Tags',
            'keywords' => 'Keywords',
            'click' => 'Click',
            'np' => 'Np',
            'bianhao' => 'Bianhao',
            'dianya' => 'Dianya',
            'xinghao' => '型号',
            'rongliang' => 'Rongliang',
            'chicun' => 'Chicun',
            'fdwendu' => 'Fdwendu',
            'cdwendu' => 'Cdwendu',
            'lingyu' => 'Lingyu',
            'seo_title' => 'SEO标题',
            'diy_content' => 'diy_content',
        ];
    }
    public function afterFind(){
        parent::afterFind();
        $this->_oldCategory_id=$this->category_id;
        $this->_oldAttr_value_id=$this->attr_value_id;

    }
    public  function afterSave($insert,$changedAttributes){
        parent::afterSave($insert, $changedAttributes);
        CategoryImages::updateFrequency($this->_oldCategory_id, $this->category_id,$this->id);
        AttrImagesSelect::updateFrequency($this->_oldAttr_value_id, $this->attr_value_id,$this->id);
        return true;
    }

    public function afterDelete()
    {
        parent::afterDelete();
        CategoryImages::updateFrequency($this->_oldCategory_id,'',$this->id);

        AttrImagesSelect::updateFrequency($this->_oldAttr_value_id,'',$this->id);
    }
    public function getImageUrl(){
        $picture = Picture::find(['path'])->where(['id'=>$this->cover])->one();
        $url = \Yii::$app->request->hostInfo;
//        if (strstr($url,'test')){
        if (true){
            if ($picture->path){
                if ($picture->thum_path){
                    return Yii::getAlias('@imagesUrl').'/'.$picture['thum_path'];
                    //        echo Yii::$app->params['upload']['path'].$images->picture->path;die;
                }else{
                    $url = Yii::$app->params['upload']['path'].$picture->path;
                    $name = explode('/',$picture->path);
                    $name = $name[1];
                    \yii\imagine\Image::thumbnail($url, 300 , 300,
                        \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET)
                        ->save(Yii::$app->params['upload']['path'].'thum/'.$name,
                            ['quality' => 10]);
                    $picture->thum_path = 'thum/'.$name;
                    $picture->update();
                    return Yii::getAlias('@imagesUrl').'/'.$picture['thum_path'];
                }
            }
        }

        return Yii::getAlias('@imagesUrl').'/'.$picture['path'];
    }
    public function  getImagesUrl(){
        $imagesArray=explode(',',$this->images);
        $urls=Picture::find(['path'])->where(['in','id',$imagesArray])->orderBy("id desc")->asArray()->all();
        $imagesUrl=array();
        foreach ($urls as $key=>$value){
            $imagesUrl[$key]= Yii::getAlias('@imagesUrl').'/'.$value['path'];
        }
        return $imagesUrl;
    }

    public function getPicture(){
        return $this->hasOne(Picture::className(), ['id' => 'cover']);
    }

    public function getCategoryImages(){
        return $this->hasMany(CategoryImages::className(), ['images_id' => 'id']);
    }

    public function getCategory(){
        return $this->hasMany(Category::className(), ['id' => 'category_id'])
            ->via('categoryImages');
    }
    public function getCat(){
        return $this->hasOne(Category::className(), ['id' => 'category_id2']);
    }
    public function getAttrValue(){
        return $this->hasMany(AttrValue::className(), ['id' => 'attr_value_id'])
                ->via('attrImagesSelect');
    }
    public function getAttrImagesSelect(){
        return $this->hasMany(AttrImagesSelect::className(), ['images_id' => 'id']);
    }

    public function getUrl(){
        $convert=new Convert(32);
        $id=$convert->idToString($this->id);
        return \Yii::$app->urlManager->createUrl(
            ['product/detail','id'=>$id]
        );
    }
}


