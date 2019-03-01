<?php
	//这个文件最终会被一个被浏览器访问的那个文件所加载，所以这个是必须的。
	//另外，php文件的最终目的，不就是要让它在浏览器里显示想要的各种信息的吗
	//它的意思是本页面的类型为文本形式的json文件，编码格式是utf-8。
	header("Content-type:text/json;charset=utf-8");
	//链接服务器
	$con = mysqli_connect("w.rdc.sae.sina.com.cn","z3o1mjy0k0","4252yk53y2iz3113hy1iljy5iwxiwl53jk2ykz5x","app_liangziaha","3306");
		//修改数据库连接字符集为 utf8
		mysqli_set_charset($con,"utf8");
		//sql语句 从user表单里选择age
		$sql = "select * from user order by age desc limit 1,3";
		//从服务器里的user表单里查询$sql↑  将返回一个 mysqli_result 对象:结果集;
		$query = mysqli_query($con,$sql);
		
		//mysqli_fetch_all函数从结果集中取得所有行作为关联数组，或数字数组，或二者兼有。
		$json = mysqli_fetch_all($query,MYSQLI_ASSOC);
		
		//json对象转json字符串 使用json_encode
		$str = json_encode($json);
		echo $str;
		
		
		//json对象转json字符串 使用json_encode
		//json_encode — 对变量进行 JSON 编码 返回 value 值的 JSON 形式 
		
		//json字符串转json对象 使用json_decode
		//json_decode — 对 JSON 格式的字符串进行编码  接受一个 JSON 格式的字符串并且把它转换为 PHP 变量 
		
		//json字符串转二维数组 使用json_decode,并且第二个参数设置为true
		
?>