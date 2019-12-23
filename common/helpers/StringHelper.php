<?php


namespace common\helpers;

/**
 * StringHelper
 *
 */
class StringHelper extends \yii\helpers\StringHelper{

    /**
     * 字符串截取，支持中文和其他编码
     * @param string $str 需要转换的字符串
     * @param string $start 开始位置
     * @param string $length 截取长度
     * @param string $charset 编码格式
     * @param string $suffix 截断显示字符
     * @return string
     */
    public static function substr($str, $start=0, $length, $charset="utf-8", $suffix=false) {
        if(function_exists("mb_substr"))
            $slice = mb_substr($str, $start, $length, $charset);
        elseif(function_exists('iconv_substr')) {
            $slice = iconv_substr($str,$start,$length,$charset);
            if(false === $slice) {
                $slice = '';
            }
        }else{
            $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
            $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
            $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
            $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
            preg_match_all($re[$charset], $str, $match);
            $slice = join("",array_slice($match[0], $start, $length));
        }
        return $suffix ? $slice.'...' : $slice;
    }
    public static function jiequ($str,$length, $suffix=true, $start=0,  $charset="utf-8") {
        if(function_exists("mb_substr"))
            $slice = mb_substr($str, $start, $length, $charset);
        elseif(function_exists('iconv_substr')) {
            $slice = iconv_substr($str,$start,$length,$charset);
            if(false === $slice) {
                $slice = '';
            }
        }else{
            $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
            $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
            $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
            $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
            preg_match_all($re[$charset], $str, $match);
            $slice = join("",array_slice($match[0], $start, $length));
        }
        return $suffix ? $slice.'...' : $slice;
    }

    public static  function  html2text($str){
 $str = preg_replace("/<style .*?<\\/style>/is", "", $str);
 $str = preg_replace("/<script .*?<\\/script>/is", "", $str);
 $str = preg_replace("/<br \\s*\\/>/i", "", $str);
 $str = preg_replace("/<\\/?p>/i", "", $str);
 $str = preg_replace("/<\\/?td>/i", "", $str);
 $str = preg_replace("/<\\/?div>/i", "", $str);
 $str = preg_replace("/<\\/?blockquote>/i", "", $str);
 $str = preg_replace("/<\\/?li>/i", "", $str);
 $str = preg_replace("/ /i", " ", $str);
 $str = preg_replace("/ /i", " ", $str);
 $str = preg_replace("/&/i", "&", $str);
 $str = preg_replace("/&/i", "&", $str);
 $str = preg_replace("/</i", "<", $str);
 $str = preg_replace("/</i", "<", $str);
 $str = preg_replace("/“/i", '"', $str);
 $str = preg_replace("/&ldquo/i", '"', $str);
 $str = preg_replace("/‘/i", "'", $str);
 $str = preg_replace("/&lsquo/i", "'", $str);
 $str = preg_replace("/'/i", "'", $str);
 $str = preg_replace("/&rsquo/i", "'", $str);
 $str = preg_replace("/>/i", ">", $str);
 $str = preg_replace("/>/i", ">", $str);
 $str = preg_replace("/”/i", '"', $str);
 $str = preg_replace("/&rdquo/i", '"', $str);
 $str = strip_tags($str);
 $str = html_entity_decode($str, ENT_QUOTES, "utf-8");
 $str = preg_replace("/&#.*?;/i", "", $str);
 return $str;
}
    public static  function filterKeyword($str,$guolv=(['锂电池','电池'])){

        foreach ($guolv as $key=>$value){
            $str=str_replace($value,'',$str);
        }
        return $str;

    }


}

