<?php
  // 设置时区 https://www.php.net/manual/zh/timezones.php
  date_default_timezone_get("UTC");

  // 当前时间戳(unix时间戳) --> https://www.php.net/manual/zh/function.time.php
  echo time(), "\n";// 1622034834 秒值
  // 将日期转换成时间戳 月/日/年 时/分/秒
  echo strtotime("5/26/2021 20:00:00");
  // data格式化一个本地时间/日期  https://www.php.net/manual/zh/function.date.php
  echo date("Y-m-d H:i:s");
?>