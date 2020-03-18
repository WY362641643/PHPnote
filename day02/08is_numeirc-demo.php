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
if(isset($_POST['chengji']))
{
    $cj = $_POST['chengji'];
    if(is_numeric($cj)){

    if($cj >= 60){
        echo '及格了';
    }else{
        echo '不及格';
    }
}
    else{
        echo '请提交成绩';
    }

}
?>
<form action="" method="post">
    请输入成绩:
    <input type="text" name="chengji">
    <input type="submit" value="提交">
</form>
</body>
</html>
