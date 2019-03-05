<?php
// +----------------------------------------------------------------------
// | 基类
// +----------------------------------------------------------------------
// | Author: kk <iweika@wcphp.com>
// +----------------------------------------------------------------------

namespace WcTools;

trait WcToolsBase
{
    /**
     * 单列方法
     * @param array $attr 参数
     * @return object callName
     */
    protected static $_instance = null;

    protected static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;

    }





}