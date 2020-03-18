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
$m1 = 10;
$m2 = 10;
$s1= $m1++;
$s2 = ++$m2;
echo '<br>此时,m1 为: $m1',',s1为:$s1';
echo '<br>此时,m2 为: $m2',',s2为:$s2';
echo '<br>m1:',$m1++ + 5;
echo '<br>m2:',++$m2 + 5;

echo "<br>";
echo "<br>m1:$m1";
echo "<br>m2:$m2";

?>
</body>
</html>
