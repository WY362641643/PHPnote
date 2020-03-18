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
$year = 2000;
$is_runnian = ($year % 4 == 0 && $year%100!=0 || $year%400 ==0) ? '是闰年':'不是闰年';
echo "$year $is_runnian";
?>
</body>
</html>
