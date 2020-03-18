<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
$n2 = '';
$n1 = '';
$result = '';
// 使用 REQUEST 方式, 既可以接收post 也可以接收get参数
if(isset($_REQUEST['num1'])) {
    $n1 = $_REQUEST['num1'];
    $n2 = $_REQUEST['num2'];
    $fuh = $_REQUEST['select'];
    if($fuh == '+'){
        $result = $n1 + $n2;
    }elseif ($fuh == '-'){
        $result = $n1 - $n2;
    }elseif ($fuh == '*'){
        $result = $n1 * $n2;
    }elseif ($fuh == '/') {
        $result = $n1 / $n2;
    }
}
?>
<body>
<form action="" method="get">
    数字1<input type="text" name="num1" value="<?php echo $n1; ?>">
    <select name="select" size="1">
        <option value="+" >+</option>
        <option value="-" >-</option>
        <option value="*" >*</option>
        <option value="/" >/</option>
    </select>
    数字2<input type="text" name="num2" value="<?php echo $n2; ?>">
    <input type="submit" value="=">
    <input type="text" name="result" value="<?php echo $result; ?>">
</form>
</body>
</html>