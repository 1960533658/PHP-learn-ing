# day04
## 查看当前的PHP配置
> phpinfo()

```php
<?php
  phpinfo()
?>
```
## 显示错误
> 通过php.ini中的display_error来配置是否显示错误。on 代表显示 off代表不显示
### 设置显示错误级别
- 在php.ini中的error_reporting设置显示那种界别的错误
- 提示和警告 error_reporting=E_NOTICE & E_WARNING
- 不显示是警告等级的错误，其他的都显示 error_reporting=~E_WARNING
- 显示所有错误 error_reporting=~E_ALL

### 显示错误级别的另一种方式
- 出了修改配置文件，我们还可以在程序中使用error_reporting 来设置显示的级别
error_reporting(0)

### 自定义错误提示信息函数
> https://www.php.net/manual/zh/function.set-error-handler
- 在实际开发中，不会直接让错误赤裸裸的展示给用户，但是不可能避免发现错误但是我们却不希望看到，又希望可捕捉到可以让后台程序员去修改
- 何以这只一个函数，当程序出现的错误的时候，php不显示错误信息
- 当我们调用这个哈桑农户出错，php就不会管，只调用这个函数
- 具体怎么处理这个错误由程序员决定

## 文件操作
> 需要有打开、读取、关闭 三步才能获取文件内容
### 打开文件
```txt
读取的文件
```
```php
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
  // 读取
  $content = fread($result,filesize("./02.readfile.txt"));
  // 取得统计信息
  $fstat = fstat($result)
  // 关闭
  fclose($result);

  var_dump($content);// string(17) "'读取的文件'"

  var
?>
```

### 写入文件
初始情况下没有03.write.txt文件
```php
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
```

### 修改指针
```php
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
```

### 文件目录操作
```php
// 创建文件夹
mkdir("helloword")
// 删除文件夹
rmdir("helloword")
```

## 案例官方文档

### php配置
> 1.1 查看当前 PHP 配置(https://www.php.net/manual/zh/function.phpinfo)
 * PHP中提供了phpinfo()函数可以查看当前PHP的配置项。
 * 语法: phpinfo();
 * 1.2 PHP 配置文件
 * php.ini 为 PHP 的配置文件，修改这个文件可以修改 PHP 的配置。这个文件所在的位置可以通过 phpinfo 函数来查看:
 * 语法: 搜索php.ini
 * 
 * 2.错误处理
 * 错误处理: 指的是系统(或者用户)在对某些代码进行执行的时候，发现有错误，就会通过错误处理的形势告知开发者。
 * 
 * 2.0 错误分类
 * 语法错误: 用户书写的代码不符合PHP的语法规范，语法错误会导致代码在编译过程中不通过，所以代码不会执行(Parse error)
 * 运行时错误: 代码编译通过，但是代码在执行过程中会出现一些条件不满足导致的错误(runtime error)
 * 逻辑错误: 程序员在写代码的时候，因为逻辑的不严密，出现了一些逻辑性的错误，导致代码虽然正常执行，但是得不到想要的结果
 * 
 * 
 * 2.1 错误级别
 * 系统错误: E_ERROR E_WARNing E_PARSE E_NOTICE
 * 用户错误: E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE
 * 其他: E_ALL代表所有错误
 * 
 * 2.2 显示错误
 * 可以通过 php.ini中的display_errors 来配置是否显示错误。on 代表显示，OFF 代表不显示
 * 
 * 2.3 设置显示错误的级别
 * 可以在 php.ini中的error_reporting设置显示哪种级别的错误:
 * 提示和警告 error_reporting=E_NOTICE & E_WARNING
 * 不显示警告级别的错误，其他都显示  error_reporting=~E_WARNING
 * 显示所有错误  error_reporting=~E_ALL
 * 
 * 2.4 设置显示错误级别的另一种方式
 * 除了修改配置文件，我们还可以在程序中使用 error_reporting 来设置显示的级别
 * error_reporting(0);
 * 
 > 2.5 自定义错误信息处理函数--> https://www.php.net/manual/zh/function.set-error-handler
 * 在实际开发中，不会直接让错误赤裸裸的展示给用户，但是不可能避免出现错误(测试没有发现的),这个时候不希望看到，
 * 但是有希望捕捉到可以让后台程序员去修改
 * 我们可以自己设置一个函数，当程序出错时，PHP 不显示错误信息，
 * 而是调用我们写的这个函数来处理出错信息。出错时 PHP 就不管了它只调用这个函数。
 * 具体怎么处理这个错误由程序员决定。
 */
 * 2.01 打开文件: fopen --> https://www.php.net/manual/zh/function.fopen
 * fopen — 打开文件或者 URL
 * √
 * 
### 文件打开方式
 > 2.03 读文件: fread --> https://www.php.net/manual/zh/function.fread
 * fread — 读取文件（可安全用于二进制文件）
 >  2.04 写文件: fwrite --> https://www.php.net/manual/zh/function.fwrite
 * fwrite — 写入文件（可安全用于二进制文件）
 > 2.05 重置文件指针: rewind --> https://www.php.net/manual/zh/function.rewind
 * rewind — 倒回文件指针的位置
 > 2.06 返回当前指针位置: ftell --> https://www.php.net/manual/zh/function.ftell
 * ftell — 返回文件指针读/写的位置
 > 2.07 移动文件指针: fseek --> https://www.php.net/manual/zh/function.fseek
 * fseek — 在文件指针中定位
> 2.08 获取文件信息: fstat --> https://www.php.net/manual/zh/function.fstat
 * fstat — 通过已打开的文件指针取得文件信息
 > 2.09 关闭文件: fclose --> https://www.php.net/manual/zh/function.fclose
 * fclose — 关闭一个已打开的文件指针
 > 2.10 删除文件: unlink --> https://www.php.net/manual/zh/function.unlink
 * unlink — 删除文件
 > 2.11 文件尺寸: filesize --> https://www.php.net/manual/zh/function.filesize
 * filesize — 取得文件大小


### 操作文件目录
> 2.01 打开文件: fopen --> https://www.php.net/manual/zh/function.fopen
 > 3.4 关闭目录 closedir  --> https://www.php.net/manual/zh/function.closedir
 * closedir — 关闭目录句柄

 > 3.5 创建目录 mkdir  --> https://www.php.net/manual/zh/function.mkdir
 * mkdir — 新建目录
 ><> 3.6 删除目录 rmdir --> https://www.php.net/manual/zh/function.rmdir