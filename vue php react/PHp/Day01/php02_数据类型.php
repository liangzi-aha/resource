<?php
	//php02_数据类型
	/*
	 * 基础数据类型
	 * 		整型,浮点型,bool型,字符串型,null型
	 * 复杂数据类型
	 * 		数组,对象,资源
	 */
	
	$a = 1;
	//打印数据类型  结构var_dump
	var_dump($a);
	//判断是否是int型  结构is_类型  真为1  加为0  
	echo is_int($a);
	
	echo "<br>";
	echo is_string("abc");
	var_dump("abc");
	
	echo "<br>";
	echo is_string(true);
	var_dump(true);
	
	echo "<br>";
	echo is_string(123);
	var_dump(123);
	
	echo "<br>";
	echo is_string(null);
	var_dump(null);
	
	/*
	 * 定界符
	 * PHP里,如果字符串里有特殊字符或者转义字符或者字符串的结果很复杂,量大,且有格式,此时可以使用定界符快速简单的书写字符串.
	 * 1.开头用<<<加标识符 字符串,定界符的结尾只允许出现定界符标识的分号,不允许出现其他任何字符.
	 * 2.如果在定界符里写变量,不会直接输出变量名,而是会输出变量的值.
	 */
	
	$name = "黄老师";
	$str1 = <<<b
		卡萨丁卷发梳;贷款纠纷45sa4f64646"".速度;.f'.a""?'/'."":>>:"@#$%^&*()_+"'
		!@#$%^&*()_+™£¢∞§¶•ªº–¡™£¢∞§¶•≠¡™£¢∞§¶•ªº–œ∑®†¥øπåß∂ƒ©˙∆˚¬…\\\\\\$name
		
		
b;
	echo "<br>";
	echo $str1;
	
	/*
	 * 单引号和双引号
	 * 1.双引号里会识别变量,单引号里不识别变量
	 * 2.双引号里放变量时,系统会尽可能的往后取名字,有可能把名字取错.解决办法:把变量名用{}括起来
	 */
	echo "<br>";
	$city = "郑州";
	echo "$city"."----".'$city';
	
	echo "<br>";
	$name = "张三";
	$age = "18";
	echo "你好,我是{$name}哈哈,我今年{$age}岁了";
	
	/*
	 * 复杂数据类型
	 * 1.数组 
	 * 		a.数值数组  与js的数组基本一致
	 * 		b.关联数组  数组里的每个值没有下标的改变,与每个值对应的是key值. 关联数组的key和value可以是任何数据类型.
	 */
	//数值数组
	$numArray = array("张三",20,true);
	print_r($numArray);
	
	echo $numArray[1];
	
	//关联数组
	echo "<br>";
	$array = array("username"=>"张三","password"=>"123");
	print_r($array);
	echo $array["username"];
	
	
	//创建一个类
	class Person {
		//属性 属性前面的是可见度
		//public $name = "张三";
		//protected $name = "张三";
		//private $name = "张三";
		var $name = "张三";
		//方法
		function sayHi(){
			echo "吃饭";
		}
	}
	echo "<hr/>";
	//用类创建对象
	$per1 = new Person();
	var_dump($per1);
	echo "<hr/>";
	
	//"r"	只读方式打开，将文件指针指向文件头。
	//"r+"	读写方式打开，将文件指针指向文件头。
	//"w"	写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
	//"w+"	读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
	//"a"	写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
	//"a+"	读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
	//"x"	创建并以写入方式打开，将文件指针指向文件头。如果文件已存在，则 fopen() 调用失败并返	回 FALSE，并生成一条 E_WARNING 级别的错误信息。如果文件不存在则尝试创建之。
	//这和给底层的 open(2) 系统调用指定 O_EXCL|O_CREAT 标记是等价的。
	//此选项被 PHP 4.3.2 以及以后的版本所支持，仅能用于本地文件。

	//"x+"	
	//创建并以读写方式打开，将文件指针指向文件头。如果文件已存在，则 fopen() 调用失败并返回 		FALSE，并生成一条 E_WARNING 级别的错误信息。如果文件不存在则尝试创建之。
	//这和给底层的 open(2) 系统调用指定 O_EXCL|O_CREAT 标记是等价的。
	//此选项被 PHP 4.3.2 以及以后的版本所支持，仅能用于本地文件。
	//资源类型  resource
	$file = fopen("book.txt","r");
	var_dump($file);
?>