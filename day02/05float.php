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
$v1 = 0.1;
$v2 = 0.2;
$v3 = 0.3;
if( $v3 == $v1 + $v2){
    echo '相等';
}else{
    echo '不相等';
}
echo '<h1>对浮点数做正确的比较形式,分别乘以10的倍数, 转换为整数</h1>';
if ( round($v3*10) == round($v1*10 + $v2*10)){
    echo '处理后相等值为'.$v3;
}else{
    echo '处理后值不相等,$v3= '.$v3,', $v2= ',$v2,', $v1= ',$v1;
}
?>
</body>
</html>
