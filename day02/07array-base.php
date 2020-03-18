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
// 定义数组
$info = array('name'=>'张三丰','age'=>18,'gender'=>'男');

// 给数组某项赋值
$info['age'] = 19;

// 使用数组
echo '姓名:'.$info['name'];
echo '年龄:'.$info['age'];

echo '<br><pre>';
print_r($info);
echo '</pre>';
$info2 = ['张无忌',18,'男'];
print_r($info2);
echo "<br>姓名:".$info2[0];
?>
</body>
</html>
