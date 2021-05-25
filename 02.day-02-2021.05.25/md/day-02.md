# day02
## 数据类型转换
### 隐式类型转换
#### 字符串转整型
> 语法： +"字符串" 只会截取字符串前边的数字，不会转换文字，当开头为字符时转换为0
```php
<?php 
  echo +"123abc"; // 123
  chho +"abc123abc";//0
?>
```

#### 布尔值转数字

```php
<?php 
  echo true + 1; // 2
  echo false + 1; // 1
  echo false; // 0
  echo true; // 1
  var_dump(true);// bool(true) 
  var_dump(true);// bool(false)
?>
```

#### 数字转布尔值
```php
<?php 
  echo 0 == fasle
?>
```

### 显示类型转换

#### 浮点转整型
> 方法一：(int)变量名
> 方法二：(integer)变量名

```php
<?php
  $num1 = 5.67;
  echo((int)$num1) // 5
  // 判断值是否为整型
  var_dump(is_int((int)$num1))// bool(true) 
?>
```

#### 整型转浮点型
> 方法一：(float)变量名
> 方法二：(double)变量名
> 方法二：(reak)变量名
- float浮点型 double双浮点型 real双浮点 所占的空间不一样 但是这个空间还平台有关系

```php
<?php
  var_dump((float)$num3);// float(12) 
  var_dump((double)$num3);// float(12)
  var_dump((real)$num3);// float(12) php7.2的方法
  // 判断值是否为布尔值
  var_dump(is_float((float)$num3));// bool(true)
?>
```

#### 整型转字符串
> 方法：(string)变量名
```php
<?php
  $num4 = 6;
  var_dump((string)$num4);// string(1) "6"
  // 判断值是不是字符串
  var_dump(is_string((string)$num4));//  bool(true)
?>
```

#### 对象转数组
> 方法：(array)变量名

```php
<?php
  class Person {
    public $name = "zs";
    public $age = 12;
  }
  $stu = new Person();
  // 判断创建的实例是不是一个对象
  var_dump(is_obkect($stu));// bool(true) 
  var_dump((array)$num4);// array(2) { ["name"]=> string(2) "zs" ["age"]=> int(18) }
  // 判断是不是一个数组
  var_dump(is_array((array)$stu)); // bool(true) 
?>
```

#### 数组转对象
```php
<?php
  $users = array(array("1001" => "sss", "1002" => "kkk"));
  var_dump((object)$users);// object(stdClass)#2 (1) { [0]=> array(2) { [1001]=> string(3) "sss" [1002]=> string(3) "kkk" } }
  
?>
```
#### 其他类型转NULL
```php
<?php
  $num5 = 111;
  var_dump((unset)$num5); // NULL 7.2版本的方法低版本不可用 is_null() 是不是Null
?>
```

## 函数

### 什么是函数
- 将重复使用的代码起个名字，就叫做函数
- 函数可以避免代码的重复编写，对将来的维护非常方便
- 每一个函数都是一个独立的小功能 

### 函数的定义
> 语法：
- function 函数名() {代码块}
```php
<?php
  function func() {
    echo 111
  }
?>
```
### 函数的调用
> 语法：
- 函数名()
```php
<?php
  function func() {
    echo 111
  }
  func()
?>
```

### 函数的参数
> 语法：
- function 函数名(参数1，参数2，参数3...) {代码块}
```php
<?php
  function func($num1,$num2) {
    echo $num1+$num2;
  }
  func(1,2)
?>
```

### 函數參數的默认值
```php
function func($num1,$num2=3) {
    echo $num1+$num2;//4
  }
  func(1)
```

### 函数的返回值
```php
  function func($num1,$num2) {
    return $num1+$num2;
  }
  echo func(1,2) // 3
```
### 函数按值传参和按引用传参
```php
<?php
/* 按值传参 */
  $sum  = 2;
  function func2($num1, $num2 = 2){
    return $num1 + $num2;
  };
  echo func2($sum); // 4 
  echo $sum;// 2
  /* 按引用传参 */
  function func3(&$sum) {
    return ++$sum;
  }
  echo func3($sum); // 3
?>
```
## 作用域
> 变量的作用域
- 作用域分为全局作用域和局部作用域
- 作用域就是变量起作用的范围（能够被访问的范围）。
> 全局变量
- 所有定义再函数、类等外部的都是全局变量
> 局部变量
- 定义在函数内部的就是局部变量，只在定义的函数内部有效
### global
- 函数内部不能使用全局不良，需要先使用global才可以使用
 - 语法： function 函数名() {global 全局变量； 代码}
```php
  $name = 1;
  function func() {
    global $name;
    echo $name;// 1
  }
  func();
```
> $GLOBALS
- $GLOBALS是一个超全局变量，保存了PHP种全部的全局变量，可以在任何位置使用$GLOBAL
 - 语法： $GLOBALS["全局变量名"];
  - 注意！$GLOBALS["val"]是外部的全局变量$val的本身。而global是引用
```php
  $name = 1;
  $name2 = 2;
  function func() {
    $GLOBALS['name2'] = $GLOBALS['name'] + $GLOBALS['name2'];
  }
  func();
  echo $name2;// 3
```