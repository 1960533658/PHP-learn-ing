<?php
/**
 * 作用域就是变量的作用范围
 * 分为全局变量、局部变量
 * 
 * 定义再函数外部和来外部的变量就是全局变量
 * 定义再函数内部的变量就是局部变量
 * 
 * 
 * global
 * 函数内部不能直接使用全局变量 需要使用global声明之后才可以使用
 * 语法 function 函数名（参数列表） {global 全局变量； 代码}
 */
$name = 1;
$name2 = 2;
function func() {
  // echo $name;//Undefined variable '$name' 未定义变量 $name
  global $name;
  echo $name;
  $GLOBALS['name2'] = $GLOBALS['name'] + $GLOBALS['name2'];
}
func();
echo $name2;// 3
echo '<br />';

// function fn1($fn2) {
//   return $fn2;
// }
// function fn2($num1,$num2) {
//   return $num1 + $num2;
// }
// echo fn1(fn2(1,2));


?>