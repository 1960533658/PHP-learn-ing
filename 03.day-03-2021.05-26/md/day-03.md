# day-03

## 文件包含
> include()
- 当使用include引用外部文件的时候，只有当代码执行到include代码段时，才会带入外部文件
- 当引入错误的是u后之后警告，而后面的代码会继续执行
> require()
- 在脚本执行期间包含并运行指定文件
- 只要程序一致性就会立刻调用外部文件


```php
<?php
  /**
   * ! 
   * * 
   * * 
   * 
   * ! include_once()
   * * 此行为域include()类似，不同的时include_once会先判断这个文件之前是否已经引用
   * * 如果引用则会不调用文件
   * 
   * ! require()
   * * 
   * * 
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
```
## 时间戳
```php
<?php
  // 设置默认时区 https://www.php.net/manual/zh/timezones.php
  date_default_timezone_get("UTC");

  // 当前时间戳(unix时间戳) --> https://www.php.net/manual/zh/function.time.php
  echo time(), "\n";// 1622034834 秒值
  // 将日期转换成时间戳 月/日/年 时/分/秒
  echo strtotime("5/26/2021 20:00:00")
  // data格式化一个本地时间/日期  https://www.php.net/manual/zh/function.date.php
  echo date("Y-m-d H:i:s");
?>
```
## 终止脚本
> die 终止脚本  https://www.php.net/manual/zh/function.die.php
> exit 终止脚本 https://www.php.net/manual/zh/function.exit.php
> sleep 睡眠脚本  https://www.php.net/manual/zh/function.sleep
```php
<?php
  echo 111;
  // 十秒后进入页面
  sleep(10);
  echo date('h:i:s')
?>
```

## 字符串方法
```php
<?php
  $str = " kangkang ";


/**
 * 5.字符串 --> https://www.php.net/manual/zh/book.strings.php
 * strlen 字符串长度。  --> https://www.php.net/manual/zh/function.strlen
 * trim 去掉字符串左右空格。 -->https://www.php.net/manual/zh/function.trim.php
 * ltrim 去掉字符串左空格。 --> https://www.php.net/manual/zh/function.ltrim
 * rtrim 去掉字符串右空格。 --> https://www.php.net/manual/zh/function.rtrim.php
 * str_replace 字符串替换。 --> https://www.php.net/manual/zh/function.str-replace
 * substr 字符串截取。 --> https://www.php.net/manual/zh/function.substr
 * mb_substr 考虑编码的字符串截取。 --> https://www.php.net/manual/zh/function.mb-substr.php
 * str_repeat 重复一个字符串。 --> https://www.php.net/manual/zh/function.str-repeat
 * strpos 获取一个字符串在另一个字符串中的位置。 --> https://www.php.net/manual/zh/function.strpos.php
 * strtoupper 字符串转换成大写字母。 --> https://www.php.net/manual/zh/function.strtoupper.php
 * strtolower 字符串转换成小写字母。 --> https://www.php.net/manual/zh/function.strtolower.php
 * md5 md5 算法加密。 --> https://www.php.net/manual/zh/function.md5
 * sha1 sha1 算法加密。 --> https://www.php.net/manual/zh/function.sha1
 */

  // 字符串长度
  echo strlen($str);// 10
  // 去除字符串前后空格
  echo trim($str);// kangkang
  echo '<br />';

  // 去除空格
  echo strlen(ltrim($str)); // 9
  // 去除右空格
  echo strlen(rtrim($str)); // 9
  echo '<br />';
  // 字符串替换 替换之前的值 替换之后的值 替换的目标字符串 
  echo str_replace("k", "g", $str);
  echo $str;

?>
```

## 数组方法
```php
<?php
// header("Content-Type: text/html;charset=utf-8");
/**
 * 6.数组  --> https://www.php.net/manual/zh/book.array.php
 * count 数组元素个数。 --> https://www.php.net/manual/zh/function.count
 * implode 数组转字符串。 --> https://www.php.net/manual/zh/function.implode
 * array_push 数组最后追加数据。 --> https://www.php.net/manual/zh/function.array-push.php
 * array_pop 弹出数组最后数据。--> https://www.php.net/manual/zh/function.array-pop.php
 * array_unshift 向数组最前追加数据。 --> https://www.php.net/manual/zh/function.array-unshift.php
 * array_shift 弹出数组最前数据。 --> https://www.php.net/manual/zh/function.array-shift
 * array_keys 返回数组中所有的键，组成新的数组。 --> https://www.php.net/manual/zh/function.array-keys.php
 * array_values 返回数组中所有的值，组成新的数组。--> https://www.php.net/manual/zh/function.array-values
 * array_merge 合并多个数组。 --> https://www.php.net/manual/zh/function.array-merge.php
 * array_search 在数组中搜索数据，并返回对应的键。 --> https://www.php.net/manual/zh/function.array-search.php
 * array_reverse 反转数组中的元素。 --> https://www.php.net/manual/zh/function.array-reverse
 * sort 排序数组中元素。 --> https://www.php.net/manual/zh/function.sort
 * rsort 反向排序数组中元素。 --> https://www.php.net/manual/zh/function.rsort
 * ksort 根据键值排序数组元素。--> https://www.php.net/manual/zh/function.ksort
 * asort 对数组进行排序并保持索引关系。 --> https://www.php.net/manual/zh/function.asort.php
 * 
 */

```

## 数学运算
```php
<?php


/**
 * 7.数学运算 --> https://www.php.net/manual/zh/book.math.php
 * round 对数字四舍五入。  --> https://www.php.net/manual/zh/function.round.php
 * rand 生成一个随机数。 --> https://www.php.net/manual/zh/function.rand
 * mt_rand 生成一个更好的随机数。--> https://www.php.net/manual/zh/function.mt-rand
 * pow 指数运算。 --> https://www.php.net/manual/zh/function.pow.php
 * sqrt 开平方运算。--> https://www.php.net/manual/zh/function.sqrt.php
 * 
 */
```