<?php
  echo "aaaa";
  $arr = array("aaa","bbb","ccc");
  $name = "康康";
  // 原样输出 Array数据类型
  echo($arr);
  echo ($name);// 搴峰悍array(3) 
  // 详细输出
  var_dump($arr);//array(3) { [0]=> string(3) "aaa" [1]=> string(3) "bbb" [2]=> string(3) "ccc" }
  var_dump($name); // string(6) "搴峰悍"
  
  /**
   * print() 
   * printf()
   * print_f()
   * 
   * 只有printf和print_r才能使用占位符
   */
  $name2 = "hello %d";// 占位符
  print($name2);
  printf($name2, "111");
  print_r($name2,"111");
  
  /**
   * die() exit() 是同一种东西 都会停止执行后面的代码
   */
  die($name2);
  exit($name);// 不会执行
  echo($arr);// 不会执行
?>