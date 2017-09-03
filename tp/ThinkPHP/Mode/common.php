<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * ThinkPHP 普通模式定义
 */
return array(
    // 配置文件
    'config'    =>  array(
        THINK_PATH.'Conf/convention.php',   // 系统惯例配置
        CONF_PATH.'config'.CONF_EXT,      // 应用公共配置
    ),

    // 别名定义
    'alias'     =>  array(
        'Think\Log'               => CORE_PATH . 'Log'.EXT,
        'Think\Log\Driver\File'   => CORE_PATH . 'Log/Driver/File'.EXT,
        'Think\Exception'         => CORE_PATH . 'Exception'.EXT,
        'Think\Model'             => CORE_PATH . 'Model'.EXT,
        'Think\Db'                => CORE_PATH . 'Db'.EXT,
        'Think\Template'          => CORE_PATH . 'Template'.EXT,
        'Think\Cache'             => CORE_PATH . 'Cache'.EXT,
        'Think\Cache\Driver\File' => CORE_PATH . 'Cache/Driver/File'.EXT,
        'Think\Storage'           => CORE_PATH . 'Storage'.EXT,
    ),

    // 函数和类文件
    //  CORE_PATH ->  root/thinkphp_3.2.3_core/ThinkPHP/Library/Think/
    //  BEHAVIOR_PATH ->  root/thinkphp_3.2.3_core/ThinkPHP/Library/Behavior/
    'core'      =>  array(
        THINK_PATH.'Common/functions.php',  //系统公公方法库
        COMMON_PATH.'Common/function.php',  //APP方法库
        CORE_PATH . 'Hook'.EXT, //ThinkPHP系统钩子实现
        CORE_PATH . 'App'.EXT,  //ThinkPHP 应用程序类 执行应用过程管理
        CORE_PATH . 'Dispatcher'.EXT, //完成URL解析、路由和调度
        //CORE_PATH . 'Log'.EXT,
        CORE_PATH . 'Route'.EXT,  //ThinkPHP路由解析类
        CORE_PATH . 'Controller'.EXT, //ThinkPHP 控制器基类 抽象类
        CORE_PATH . 'View'.EXT, //ThinkPHP 视图类
        BEHAVIOR_PATH . 'BuildLiteBehavior'.EXT,  // 创建Lite运行文件,可以替换框架入口文件运行,建议绑定位置app_init
        BEHAVIOR_PATH . 'ParseTemplateBehavior'.EXT,  //系统行为扩展：模板解析
        BEHAVIOR_PATH . 'ContentReplaceBehavior'.EXT, //系统行为扩展：模板内容输出替换
    ),
    // 行为扩展定义
    'tags'  =>  array(
        'app_init'     =>  array(
            'Behavior\BuildLiteBehavior', // 生成运行Lite文件
        ),
        'app_begin'     =>  array(
            'Behavior\ReadHtmlCacheBehavior', // 读取静态缓存
        ),
        'app_end'       =>  array(
            'Behavior\ShowPageTraceBehavior', // 页面Trace显示
        ),
        'view_parse'    =>  array(
            'Behavior\ParseTemplateBehavior', // 模板解析 支持PHP、内置模板引擎和第三方模板引擎
        ),
        'template_filter'=> array(
            'Behavior\ContentReplaceBehavior', // 模板输出替换
        ),
        'view_filter'   =>  array(
            'Behavior\WriteHtmlCacheBehavior', // 写入静态缓存
        ),
    ),
);
