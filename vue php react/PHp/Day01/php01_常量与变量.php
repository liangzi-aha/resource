<?php
	/*
	 * php01_常量与变量
	 * 
	 * php里的变量:
	 * 1.关键字不再是var,是$
	 * 2.变量名自能由字母,数字,下划线组成,数字不能开头
	 * 3.变量名区分大小写
	 * 4.php与js一样,变量都是弱类型的,在定义时,不需要明确指出变量的数据类型,其数据类型由存入的值决定.
	 */
//	$name = "abc良12";
//	$age = 20;
//	/*
//	 * php里的输出方式
//	 * echo 输出语句,理解成函数
//	 * echo不区分大小写
//	 * echo可以一次输出多个值,中间用逗号隔开
//	 */
//	
//	echo $name,$age,1,2,3;
//	
//	/*
//	 * php里的加号做的是数字运算
//	 */
//	echo 20 + "120";
//	echo "12a3" + 20;
//	/*
//	 * php里,字符串拼接用.
//	 */
//	echo "100"."20";
//	echo "我的名字:".$name.",年龄".$age;
//	echo "<br>";
//	echo "hahaha";
//	/*
//	 * php里输出变量的数据类型 var_dump(变量)
//	 * 字符串: 汉字占3个字符 , 数字和字母占一个字符
//	 */
//	echo var_dump($name);
//	echo var_dump($age);
//	
//	echo "<br>";
//	/*
//	 * php里,输出布尔值,true打印1 false什么都不输出
//	 */
//	$isA = false;
//	var_dump($isA);
//	echo $isA;
//	
//	/*
//	 * 变量的赋值
//	 * 1.拷贝赋值
//	 * 2.引用赋值
//	 * 3.使用变量的值当做另外一个变量的名
//	 */
//	echo "<br>";
//	//拷贝赋值
//	$a = 10;
//	$b = $a;
//	$b = 20;
//	echo $a."----".$b;
//	
//	echo "<br>";
//	//引用赋值 &:取地址符
//	$m = 10;
//	$n = &$m;
//	echo $m."----".$n;
//	$n = 200;
//	echo $m."----".$n;
//	
//	echo "<br>";
//	//使用变量的值当做另外一个变量的名
//	$aName = "zhangsan";
//	$$aName = "abc";
//	echo $zhangsan;
	
	/*
	 * php里常用的输出方式
	 * 1.echo : 输出多个字符串或者变量或者数值,最常用
	 * 2.var_dump():  输出数据类型,调试用
	 * 
	 * 3.print: 一次只能输出一个值
	 * printf(): 格式化输出 需要占位符先把需要被替换的值的位置先占上,具体以后该位置上是什么值由后面的参数决定
	 * 占位符需要根据具体值的数据类型选取最合适的占位符
	 * %d -- 数值占位符
	 * %s -- 字符串占位符
	 * %f -- 浮点数占位符
	 * print_r(): 专门用来输出数组
	 */
//	print "哈哈";
//	echo "<br>";
//	printf("我的名字是:%s,年龄:%d",$name,$age);
//	echo "<hr>";
//	$arr = array(1,2,3,5,55,8);
//	print_r($arr)
	
	/*
	 * 超全局变量 php为我们准备好的变量,在任何地方都可以直接使用
	 * $_SERVER: 全局数组,存储所有的服务器信息
	 * $GLOBALS: 全局数组,存储所有的全局变量
	 * $_GET: 全局数组,存储所有get方式发起请求时的所有参数
	 * $_POST:全局数组,存储所有post方式发起请求时的所有参数
	 * $_COOKIE:全局数组,存储所有cookie的键值对
	 * $_REQUEST: 全局数组,存储所有的get或者post方式发起请求时的所有参数   request: 请求 [rɪ'kwest]
	 */
	
//	echo "<hr>";
//	print_r($_SERVER);
//	
//	echo "<hr>";
//	print_r($GLOBALS);
	
//	echo "<hr>";
//	print_r($_POST);
//	echo $_GET["username"],$_GET["password"]
//	$username = $_GET["username"];
//	$password = $_GET["password"];
//	if($username == "姓名" && $password == "张三"){
//		echo "登录成功";
//	}else{
//		echo "登录失败";
//	}

//	print_r($_COOKIE);

	//常量
	//宏定义 给常量起一个名字,用名字去代替该常量
//	"http://192.167.190.110:8080/abc/bbb/html/homepage.html"
	define("MAIN_URL","http://192.167.190.110:8080/abc/bbb/html/homepage.html");
	echo MAIN_URL;
	
	/*
	 * 魔术常量
	 * 调试代码时使用
	 * 1.__LINE__ : 代码所在行
	 * 2.__FUNCTION__ : 函数名
	 * 3.__FILE__ : 文件的完整路径
	 * 4.__CLASS__ : 类名
	 * 5.__MATHOD__ : 类的方法名
	 */
	echo "<br>";
	echo __LINE__;
	function hello(){
		echo "<br>";
		echo __FUNCTION__;
	}
	hello();
	
	echo "<br>";
	echo __FILE__;
?>

<?
	echo "<br>";
	echo "这是第二种PHP结构";
?>

<script language="php">
	echo "<br>";
	echo "这是第三种PHP结构";
</script>