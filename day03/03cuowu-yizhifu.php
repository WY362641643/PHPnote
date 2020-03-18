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
// 错误抑制符

if(@mysqli_connect('localhost','root','123'))
{echo '成功';
}else{
    echo '失败,发生错误, 错误已被错误抑制符掩盖';
}
?>
</body>
</html>
