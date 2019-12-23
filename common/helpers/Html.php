<?php

namespace common\helpers;

use common\models\Anchor;
use common\models\Keywords;
use Yii;

/**
 * Html provides a set of static methods for generating commonly used HTML tags.
 *
 * Nearly all of the methods in this class allow setting additional html attributes for the html
 * tags they generate. You can specify for example. 'class', 'style'  or 'id' for an html element
 * using the `$options` parameter. See the documentation of the [[tag()]] method for more details.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Html extends \yii\helpers\BaseHtml
{
    /**
     * ---------------------------------------
     * 生成 图片路径
     * @param string $url 图片相对路径，一般为“201605/1235654.jpg”
     * @param string $params 生成链接时的附加测试，例如长宽等
     * @param bool $isUrl 是否生成php文档形式的url
     * @return string
     * ---------------------------------------
     */
    private $aList;
    public static function src($url,$params = '',$isUrl = false){
        if ($isUrl === false) {
            return Yii::$app->params['upload']['url'].$url;
        }
        $query = 'path='.$url;
        if ($params) {
            $query .= '&'.$params;
        }
        if (Yii::$app->params['storage_encrypt']) {
            $query = 'path='.base64_encode($query);

        }
        return Yii::getAlias('@storageUrl').'/index.php?'.$query;
    }

    /**
     * ---------------------------------------
     * 重写生成html input radio标签，为了适应metronic_v4.5.6主题，加了个<span></span>
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     * ---------------------------------------
     */
    public static function radio($name, $checked = false, $options = [])
    {
        $options['checked'] = (bool) $checked;
        $value = array_key_exists('value', $options) ? $options['value'] : '1';
        if (isset($options['uncheck'])) {
            // add a hidden field so that if the radio button is not selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['uncheck']);
            unset($options['uncheck']);
        } else {
            $hidden = '';
        }
        if (isset($options['label'])) {
            $label = $options['label'];
            $labelOptions = isset($options['labelOptions']) ? $options['labelOptions'] : [];
            unset($options['label'], $options['labelOptions']);
            $content = static::label(static::input('radio', $name, $value, $options) . '<span></span> ' . $label, null, $labelOptions);
            return $hidden . $content;
        } else {
            return $hidden . static::input('radio', $name, $value, $options);
        }
    }

    /**
     * ---------------------------------------
     * 重写生成html input checkbox标签，为了适应metronic_v4.5.6主题，加了个<span></span>
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     * ---------------------------------------
     */
    public static function checkbox($name, $checked = false, $options = [])
    {
        $options['checked'] = (bool) $checked;
        $value = array_key_exists('value', $options) ? $options['value'] : '1';
        if (isset($options['uncheck'])) {
            // add a hidden field so that if the checkbox is not selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['uncheck']);
            unset($options['uncheck']);
        } else {
            $hidden = '';
        }
        if (isset($options['label'])) {
            $label = $options['label'];
            $labelOptions = isset($options['labelOptions']) ? $options['labelOptions'] : [];
            unset($options['label'], $options['labelOptions']);
            $content = static::label(static::input('checkbox', $name, $value, $options) . '<span></span> ' . $label, null, $labelOptions);
            return $hidden . $content;
        } else {
            return $hidden . static::input('checkbox', $name, $value, $options);
        }
    }

//    mip改造，对图片进行处理
   public static  function decode_mip($content){

      $text= str_replace('<img','<mip-img',$content);
       $text = preg_replace("/style=.+?['|\"]/i",'',$text);
      return self::decode($text);
   }

    //内容设置描文本
    public static function setAnchor($str,$status=0,$data = false){

        $order = "sort desc,create_time asc";
        if ($data){
            $t = '2019-09-29 21:30:00';//如果文章超过这个时间，按照描文本最后的来匹配
            $t = strtotime($t);
            if ($data->create_time>$t){
                $order = "sort desc,create_time desc";
            }
        }
        $anchors = [];
        $list = Anchor::find()->asArray()->orderBy($order)->all();
        $values = [];
        foreach ($list as $key => $item) {//去掉重复的name
            if (!in_array($item['name'],$values)){
                $values[] = $item['name'];
                $anchors[] = $item;
            }
        }

        if ($status==1){
            $array=array();
            foreach (Keywords::find()->where(['>=','num',2])->asArray()->orderBy(['sort'=>SORT_DESC])->all() as $key=>$value){
                $v['id']=$value['id'];
                $v['name']=$value['keyword'];
                $v['url']='/keywords/'.$value['name'].'/';
                $array[]=$v;
            }
            $anchors=$array;
        }

        $rule_a = "/<a .*?>.*?<\/a>/";
        preg_match_all($rule_a, $str, $matchesA);
        $str = preg_replace($rule_a, 'Its_Just_A', $str);

        $rule = "/<img.*>/";
//        //先把img排除掉,并且将其存为一个数组
//
//        //全局正则表达式匹配   $matches 或者该变量
        preg_match_all($rule, $str, $matches);
        $str = preg_replace($rule, 'Its_Just_Img', $str);






        //锚处理
        $str_s = $str;
        $i = 0;
        $list=array();
        $urls=array();
        $anchor_ids = array();
        foreach ($anchors as $key => $anchor) {

            $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
//                error_log($anchor['name'].'---',3,'test.log');
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
            $str_new=self::tihuan($i,$anchor['name'],$str);
            if ($str_old != $str_new  && !in_array($anchor['url'],$urls)) {
                $array['id']=$anchor['id'];
                $array['url']=$anchor['url'];
                $array['i']=$i;
                $array['name']=$anchor['name'];
                $list[]=$array;
                array_push($anchor_ids, $anchor['id']);
                array_push($urls, $anchor['url']);
                $str = $str_new;
                $i++;

            }
            if ($i >= 5) {break;}//最多显示5个关键词
        }

        if ($i<=4){
            $str= $str_s;
            $list=array();
            $i=0;
            $anchor_ids=array();
            foreach ($anchors as $key=>$anchor) {
//                $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
//                $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
                $str_old = $str;
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
                $str_new=self::tihuan($i,$anchor['name'],$str);
                if ($str_old != $str_new) {
                    $array['id']=$anchor['id'];
                    $array['url']=$anchor['url'];
                    $array['i']=$i;
                    $array['name']=$anchor['name'];
                    $list[]=$array;
                    array_push($anchor_ids, $anchor['id']);
                    $str = $str_new;
                    $i++;
                }
                if ($i >= 5) {break;}//最多显示5个关键词
            }

        }
        $str=self::huanti($list,$str);

        //将img加上去
        foreach ($matches[0] as $alt_content) {
            $str = preg_replace('/Its_Just_Img/', $alt_content, $str, 1);
        }
        foreach ($matchesA[0] as $alt_content) {
            $str = preg_replace('/Its_Just_A/', $alt_content, $str, 1);
        }

        return self::article_add_product($str,$data);
    }

    public static function article_add_product($str,$article){
        $pattern = '/(product_\d+_id)/';     //product_  _idy为开头 结尾字符串
        preg_match_all($pattern, $str, $matches,PREG_PATTERN_ORDER);
        foreach ($matches[1] as $value) {
            $id = str_replace ( "product_" ,  "" ,  $value );
            $id = str_replace ( "_id" ,  "" ,  $id );
            $images = \common\models\Images::findOne($id);
            $str = self::add_content_images($str,$value,$images);
        }
        return $str;
    }

    public static function add_content_images($str,$keyword,$images){
        if ($images){
            $diy_content = str_replace ( "<a>" ,  '<a class="size2" target="_blank" href="'.$images->url.'">' ,  $images->diy_content );
            $diy_content = str_replace ( "<b>" ,  '<b class="size3">' ,  $diy_content );
            $diy = '<div class="diy_imgas col-md-12"><div class="left col-md-3"><a  target="_blank" href="'.$images->url.'"><img width="100%" src="'.$images->imageUrl.'" alt="'.$images->title.'" title="'.$images->title.'"></a></div>
<div class="right col-md-9">'.$diy_content.'<div class="more"><a class="size4" target="_blank" href="'.$images->url.'">READ MORE</a></div></div></div>';
            $str  =  str_replace ( $keyword ,  $diy ,  $str );
        }
        return $str;
    }
    public static function getAnchor($str,$anchors){

        $anchors = $anchors;
        $rule = "/<img.*>/";
        //先把img排除掉,并且将其存为一个数组
        preg_match_all($rule, $str, $matches);
        $str_without_alt = preg_replace($rule, 'Its_Just_A_Mark', $str);
        //锚处理
        $str_s = $str;
        $i = 0;
        $list=array();
        $urls=array();
        $anchor_ids = array();
        foreach ($anchors as $key => $anchor) {

            $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
//                error_log($anchor['name'].'---',3,'test.log');
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
            $str_new=self::tihuan($i,$anchor['name'],$str);
            if ($str_old != $str_new  && !in_array($anchor['url'],$urls)) {
                $array['id']=$anchor['id'];
                $array['url']=$anchor['url'];
                $array['i']=$i;
                $array['name']=$anchor['name'];
                $list[]=$array;
                array_push($anchor_ids, $anchor['id']);
                array_push($urls, $anchor['url']);
                $str = $str_new;
                $i++;

            }
            if ($i >= 4) {break;}//最多显示4个关键词
        }

        if ($i<=3){
            $str= $str_s;
            $list=array();
            $i=0;
            $anchor_ids=array();
            foreach ($anchors as $key=>$anchor) {
//                $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
//                $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
                $str_old = $str;
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
                $str_new=self::tihuan($i,$anchor['name'],$str);
                if ($str_old != $str_new) {
                    $array['id']=$anchor['id'];
                    $array['url']=$anchor['url'];
                    $array['i']=$i;
                    $array['name']=$anchor['name'];
                    $list[]=$array;
                    array_push($anchor_ids, $anchor['id']);
                    $str = $str_new;
                    $i++;
                }
                if ($i >= 4) {break;}//最多显示4个关键词
            }

        }
        $str=self::huanti($list,$str);

        //将img加上去
        foreach ($matches[0] as $alt_content) {
            preg_replace('/Its_Just_A_Mark/', $alt_content, $str, 1);
        }
//        var_dump($anchor_ids);
        return $anchor_ids;
//        return $str;

    }
    public static function anchour($str){
        $anchors = Anchor::find()->asArray()->orderBy("sort desc")->all();
        $rule = "/<img.*>/";
        //先把img排除掉,并且将其存为一个数组
        preg_match_all($rule, $str, $matches);
        $str_without_alt = preg_replace($rule, 'Its_Just_A_Mark', $str);
        //锚处理
        $str_s = $str;
        $i = 0;
        $k = 0;
        $urls = array();
        $anchor_ids = array();
        foreach ($anchors as $key => $anchor) {


            $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
//            error_log($anchor['name'].'---',3,'test.log');
            $str_new = preg_replace($rule, $href, $str, $anchor['num']);

            if ($str_old != $str_new) {

                array_push($urls, $anchor['url']);
                array_push($anchor_ids, $anchor['id']);
                $str = $str_new;
                $i++;
            }
            if ($i >= 4) {break;}//最多显示4个关键词


        }

    }

    //找出要替换的关键词
    public static function tihuan($key,$word,$str){
        $new_work='This_'.$key.'_Work';

        //判断是否包含该字符串，如果没有的换转为小写
        if(strstr($str,$word)){

        }else{
            $word = strtolower($word);
        }
        $anchor['name']=$word;
        $rule = "/" . $anchor['name'] . "(?!((<a\b)[\s\S])*<\/a>)/";
        $str=preg_replace($rule, $new_work, $str, 1 );
        return $str;
    }

//    关键词添加a标签和属性
    public static function huanti($list,$str){
        foreach ($list as $key=>$value){
            //判断是否包含该字符串，如果没有的换转为小写
            if(strstr($str,$value['name'])){

            }else{
                $value['name'] = strtolower($value['name']);
            }
            $href = '<a href="' . $value['url'] . '" class = "seo-anchor" data-anchorid='. $value['id'] .' target="_blank">' . $value['name'] . '</a>';
            $new_work='This_'.$key.'_Work';
            $str=str_replace($new_work,$href,$str);
        }
        return $str;

    }
    public static function time_en($d){
        $d=date('Y-m-d',$d);
        $marr=array('January','February','March','APRil','May','June','July','August','September','October','November','December'); $stamp = strtotime($d); $m = date('m',$stamp);
        return substr($marr[$m-1], 0,3).' '.date('d',$stamp).', '.date('Y',$stamp);
    }


}

