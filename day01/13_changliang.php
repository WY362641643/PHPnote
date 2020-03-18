<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// 定义常量的两种形式
define('PI1',3.14);

const PI2=3.14159;

// 计算常量的两种方式
$s1 = PI1 * 2 * 2;
$s2 = PI2 * 2 * 2;
$s3 = constant('PI1') * 4*4;

echo '<br>面积1位:',$s1;
echo '<br>面积2位:',$s2;
echo '<br>面积3位:',$s3;



if ( !defined('PI1')){
    // 判断常量 PI1 是否存在, defined: 取布尔值
    define('PI1',3.14);
}
$s1 = PI1 *2 *2;
echo '<br>s1 = ',$s1;
?>



</body>
</html>