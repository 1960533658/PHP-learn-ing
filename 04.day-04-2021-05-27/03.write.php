<?php
header( "Content-type:text/html;charset=utf-8");
  // 1. 打开
  $handle = fopen('./03.write.txt','w');
  // 2. 写入
  fwrite($handle,"写入文件");
  fwrite($handle, "写入文件2");

  // 3. 关闭
  fclose($handle);
?>