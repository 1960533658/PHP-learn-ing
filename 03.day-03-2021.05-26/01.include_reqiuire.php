<?php
  /**
   * ! include()
   * * 当使用include引用外部文件的时候，只有当代码执行到include代码段时，才会带入外部文件
   * * 当引入错误的是u后之后警告，而后面的代码会继续执行
   * 
   * ! include_once()
   * * 此行为域include()类似，不同的时include_once会先判断这个文件之前是否已经引用
   * * 如果引用则会不调用文件
   * 
   * ! require()
   * * 在脚本执行期间包含并运行指定文件
   * * 只要程序一致性就会立刻调用外部文件
   * ! require_once()
   * * 与include_once 情况一样
   * 
   */
  include("./01.fileContainers.php");
  echo "include";
  include_once('./01.fileContainers.php');
  include_once('./01.fileContainers.php');
  echo "include_once";
  echo '<br />';
  $result = require("./01.fileContainers.php");
  echo "require";
  require_once("./01.fileContainers.php");
  require_once("./01.fileContainers.php");
  echo "require_once";
  var_dump($result);
  echo "require";
?>