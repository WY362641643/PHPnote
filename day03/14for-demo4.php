<?php 

for($i = 1; $i < 4; $i++)
{
	echo "<br>";
	for($k = 1; $k < 6; $k++)
	{
		echo "$k,";
	}
}
echo "<hr>";

/*
输出如下数字形式：
1  2  3  4  5  6  7  8；
2  2  3  4  5  6  7  8；
3  2  3  4  5  6  7  8；
4  2  3  4  5  6  7  8；
 */
for($n1 = 1; $n1 <= 4; $n1++)
{
	echo "<br>$n1 ";
	for($n2 = 2; $n2<=7; $n2++)
	{
		echo "$n2 ";
	}
	echo "8；";
}

 ?>