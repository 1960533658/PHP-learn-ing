<?php
// 函数的定义
function func($num1,$num2=2) {
  return $num1 + $num2;
};
echo func(1);
echo '<br />';
// 按值传参
$sum  = 2;
function func2($num1, $num2 = 2){
  return $num1 + $num2;
};
echo func2($sum); // 4 
echo $sum; // 2


/* 按引用传参 */
function func3(&$sum)
{
  return ++$sum;
}
echo func3($sum); // 3
?>