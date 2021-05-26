<?php
  $num;
  $name = "111";
  // 判断是否给某个变量设置了值
  var_dump(isset($name));// bool(true)
  var_dump(isset($num));// bool(false)
  // 判断变量是否为空
  echo '<br />';
  var_dump(empty($num));// bool(true)  为空时值为true
  var_dump(empty($name));// bool(false)
?>