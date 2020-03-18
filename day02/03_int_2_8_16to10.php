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
$n1 = '101010';
$n2 = '17';
$n3 = '1b';
echo '<br>二进制 101010 转换为10进制为 '.bindec($n1);
echo '<br>八进制 17 转换为10进制为 '.octdec($n1);
echo '<br>十六进制 1b 转换为10进制为 '.hexdec($n1);

?>
</body>
</html>