<?php
	$name = $_GET['name'];
	$age = $_GET['age'];
	//函数名aa
	$cb = $_GET['callback'];
//	echo $cb;

	$str = '你好'.$name;
	
	//echo:返回函数aa(你好james)到前台
	echo $cb."('$str')";
	 
?>