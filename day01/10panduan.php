<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['age'])){
        $age = $_POST['age'];
        if($age >= 18){
            echo '您可以上网';
        }else{
            echo '您年龄太小';
        }
    }
?>
<body>
<form action="" method="post">
    你贵庚:<input type="text" name="age">
    <input type="submit" value="提交">
</form>
</body>
</html>