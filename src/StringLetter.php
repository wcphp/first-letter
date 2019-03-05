<?php
// +----------------------------------------------------------------------
// | 字符串字母工具
// +----------------------------------------------------------------------
// | Author: kk <iweika@wcphp.com>
// +----------------------------------------------------------------------

namespace WcTools;


class StringLetter
{
    use WcToolsBase;
    /**
     * 获取字符串首字符，字母（大小写）接返回，中文返回拼音的首字母，其它符号返回空
     * @access public
     * @param  string   $str 字符串
     * @param  bool     $type 返回字母大小写 true-大写，false-小写
     * @return string
     * @throws \Exception
     */
    public static function first($str='',$type=false){
        $str = trim($str);
        if(empty($str)) return '';
        $fistStr = mb_substr( $str, 0, 1);
        $resStr = '';
        if(preg_match('/[A-Za-z]/',$fistStr)){
            $resStr = $fistStr;
        }elseif(preg_match('/[\x{4e00}-\x{9fff}]+/u',$fistStr)){
            $pinYinArr = json_decode(file_get_contents(__DIR__ . '/../data/pinyin-first.txt'),true);
            $resStr = $pinYinArr[$fistStr] ?? '';
        }
        return $type ? strtoupper($resStr): strtolower($resStr);
    }

}