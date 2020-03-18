<?php
//  标量类型

   // 字符串类型
    //string;
    // 整数类型
    //integer, int;
    //浮点类型
    //double,float
    // 布尔类型
    boolean;
    bool;
    array(); // 数组类型
    null; // 空类型

// 类型判断
    gettype('变量');
    $v1 = 10;
    $r1 = gettype($v1);  // 结果为: 'integer'
    $v2 = 'abc';
    $r2 = gettype($v2);  // 结果为: 'string'
    $v3 = 1.23;
    $r3 = gettype($v3);  // 结果为: 'double'

// 设置变量类型
    settype('变量名','类型');
    $v1 = 10;
    settype($v1,'string'); // 此时, $v1字符串类型, 即其中的数据变成: "10"

// 判断是否为某种类型
    is_int();is_integer(); // 判断是否为整数类型
    is_float(); // 判断是否为浮点数类型
    is_string();
    is_array();
    is_numeric(); // 判断是否为'数字'类型,(含 整数, 小数,以及'纯数字字符串')
    is_object(); //

?>