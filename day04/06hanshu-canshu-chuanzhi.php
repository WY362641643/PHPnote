<?php 
//函数参数的传值演示：

function f1($p1, &$p2)
{
	$p1++;
	$p2++;
	$result = $p1+$p2;
	return $result;
}
$v1 = 10;
$v2 = 20;
$s = f1($v1, $v2);
echo "<br>s=$s, v1=$v1, v2=$v2";

$v3 = 30;
$v4 = 40;
$s2 = f1($v3, $v4);	//这行可以
//$s2 = f1(30, 40);		//这行报错！40不能“引用方式”传给$p2
				//即：引用传递的形参，必须对应实参变量（不能实参数据）
echo "<br>s2=$s2, v3=$v3, v4=$v4";




 ?>