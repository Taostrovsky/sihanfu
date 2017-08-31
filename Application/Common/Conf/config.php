<?php
return array(
    //'配置项'=>'配置值'
    /*数据库配置*/
    'DB_TYPE'=>'mysqli',//数据库类型
    'DB_HOST'=>'localhost',//数据库服务器地址
    'DB_NAME'=>'figure',//数据库名
    'DB_USER'=>'root',//用户名
    //'DB_PWD'=>'root',//密码
    'DB_PORT'=>'',//d端口
    'TMPL_ENGINE_TYPE' => 'Think', // 默认模板引擎 以下设置仅对使用Think模板引擎有效
    'TMPL_L_DELIM' => '{', // 模板引擎普通标签开始标记
    'TMPL_R_DELIM' => '}', // 模板引擎普通标签结束标记
    'TMPL_CACHE_ON' => FALSE, // 是否开启模板编译缓存,设为false则每次都会重新编译
);