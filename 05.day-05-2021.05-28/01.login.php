<?php
/**
 * 添加cookie setcookie('下标','值','有效时间','有效作用域/表示当前作用域下可以使用')
 * $_COOKIE获取到设置好的cookie中的值
header("Content-type:text/html;charset=utf-8");
 */
  header( "Content-type:text/html;charset=utf-8");
  var_dump($_POST);
  echo '<br />';
  echo $_POST['username'];
  echo '<br />';
  echo $_POST['psssword'];
  echo '<br />';
  // 判断用户名和密码是否条件符合
  if ($_POST['username']=='admin'&& $_POST['psssword'] == 123) {
    // 语法setcookie('下标','值','有效时间','有效作用域')
    setcookie("isLogin",true,time()+3000,'/');
    setcookie("username",$_POST['username'],time()+3000,'/');
    echo "3秒跳转";
    echo '<meta http_equiv="refresh" content="3, url=./01.index.php">';
} else {
    // 否则跳转到登录页
    echo '<script> location.href="./01.login.html";</script>';
  }
?>