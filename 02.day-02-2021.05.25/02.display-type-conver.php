<?php
// 1。浮点型 格式 （int或者integer）变量名 is_int()是不是数字 布尔值
  $num1 = 5.67;
  echo (int)$num1;
  var_dump(is_int((int)$num1)); 
  echo '<br />';
  // 2. 整型-浮点型 方法（float/double/real)浮点型和双浮点型所占空间不一样
  // is_int()是不是数字
  $num3 = 12;
  echo (float)$num3;
  var_dump((float)$num3);
  var_dump((double)$num3);
  var_dump((real)$num3);
  var_dump(is_float((float)$num3));
  echo '<br />';

  // 3.整型-字符串 方法 (string) 转换为字符串  is_string() 是不是字符串
  $num4 = 6;
  var_dump((string)$num4);
  var_dump(is_string((string)$num4));//  bool(true)
  echo '<br />';

  // 4.对象-数组 （array）对象名 is_array()是不是数组
  class Person {
    public $name="zs";
    public $age = 18;
  }
  $stu=  new Person();
  var_dump(is_object($stu));
  var_dump((array)$stu);
  var_dump(is_array((array)$stu)); // bool(true) 
  echo '<br />';

  // 5.数组-对象 方法 （object）变量名 is_object()是不是对象
  $users = array(array("1001" => "sss", "1002" => "kkk"));
  var_dump((object)$users);
  echo '<br />';

  // 6.其他类型转NULL
  // 转为null 7.2版本的方法低版本不可用 is_null() 是不是Null
  $num5 = 111;
  var_dump((unset)$num5); // NULL
?>