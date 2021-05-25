<?php
  /**
   * 隐式类型转换
   * 
   * 1. 字符串转整型
   * 
   * 2. 布尔值转数字
   * 
   * 3. 数字转布尔值
   */
  // 字符换转整型（+字符串）
  echo +"123abc";
  echo +"abc123abc";

  echo "<br />";
  // 布尔转数字
  echo true +1;
  echo "<br />";
  echo false+1;
  echo "<br />";
  echo false;
  echo true;
  var_dump(true);
  var_dump(false);
  // 数字转布尔
  echo "<br />";
  echo 0 == false
?>