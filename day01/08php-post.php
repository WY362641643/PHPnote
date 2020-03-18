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
if(isset($_POST['num1'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $fuh = $_POST['select'];
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
<form action="" method="post">
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