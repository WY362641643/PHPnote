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
//    $_SERVER; // 代表任何一次请求中, 客服端或服务器端的一些'基本信息' 或系统信息
//        // 常用的有:
//        PHP_SELF; // 表示当前请求的网页地址
//        SERVER_NAME; // 表示当前请求的服务器名
//        SERVER_ADDR; // 表示当前请求的服务器 IP 地址
//        DOCUMENT_ROOT; // 表示当前请求的网站物理路径(apache设置站点时那个)
//        REMOTE_ADDR; // 表示当前请求的客服端IP
//        SCRIPT_NAME; // 表示当前请求的网页地址
echo "您的IP为",$_SERVER['REMOTE_ADDR'];

echo "<br>您访问的网站为的为",$_SERVER['SERVER_NAME'];
echo "<br>您访问的网页地址为的为",$_SERVER['PHP_SELF'];
echo "<br>您访问的网站物理路径为的为",$_SERVER['DOCUMENT_ROOT'];
echo "<br>您访问的网站客服端IP为的为",$_SERVER['REMOTE_ADDR'];
echo "<br>您访问的网页地址为的为",$_SERVER['SCRIPT_NAME'];
$IP = $_SERVER['REMOTE_ADDR'];
file_put_contents('$IP.txt',$IP)
?>
</body>
</html>