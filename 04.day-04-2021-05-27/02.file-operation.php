<?php
header("Content-type:text/html;charset=utf-8");
/**
 * php读取文件
 * 1. 打开
 * 2. 读取
 * 3. 关闭
 */
  // 打开
  $result = fopen("./02.readfile.txt", 'r');
  var_dump($result);
  // 获取文件统计信息
  $fstat = fstat($result);
  // 移动指针
  // fseek($result, 3);
  // 读取
  $content = fread($result,filesize("./02.readfile.txt"));
  echo '<br />';
  // 关闭
  fclose($result);

  var_dump($content);// string(17) "'读取的文件'"
  echo '<br />';
  var_dump($fstat);
?>