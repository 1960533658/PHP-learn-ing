<?php
  // #region  GET方法接收请求的数据
  echo $_GET;
  var_dump($_GET);
  echo $_GET["getname"];
  echo $_GET["pwd"];
  // #endRegion

  echo "break";
  // #region  POST方法接收请求到的数据
  echo $_POST;
  var_dump($_POST["postname"]);
  var_dump($_POST["postpwd"]);
  // #endRegion
  
  echo "  BREAK REQUEST   ";
  
  // #region  REQUEST接收GET和POST请求
  var_dump($_REQUEST);
  // #endRegion

  
  // #region  关联数组
  $arr = array('a' => 1, 'b' => 2, 'c' => 3);// a*****1 b*****2 c*****3
  $arr2 = array(1,2,3);// 0*****1 1*****2 2*****3
  foreach ($arr as $key => $value) {
    echo $key.'*****'.$value.'<br />';
  }
  // #endRegion
  
?>