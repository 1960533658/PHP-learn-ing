<?php
  $num1 = 100;
  $num2 = $num1;
  echo $num1;// 100
  echo $num2;// 100

  $num3 = 100;
  $num4 = &$num3;
  $num4 = 500;
  echo $num3;// 500
  echo $num4;// 500
?>