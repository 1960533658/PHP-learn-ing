<?php
  header( "Content-type:text/html;charset=utf-8");
  $handle = fopen("./04.exit-porinter.txt","a");
  fwrite($handle,'a');
  echo ftell( $handle);
  ftell($handle);
  //重置指针
  rewind($handle);
  echo ftell($handle);
  fwrite($handle, 'm');
  fclose($handle);
?>