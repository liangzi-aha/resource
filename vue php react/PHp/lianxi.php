<?php
//	$id = $_REQUEST["id"];
	
	$mysqli = new mysqli("10.90.81.243","wxy","123456","ald");
	
	//链接服务器  mysqli_connect_error() 函数返回上一次连接错误的错误描述。如果没有错误发生则返回 NULL。
		if($mysqli->connect_error){
			//链接失败
			exit("数据库链接失败");
		}else{
			//链接成功
			exit("数据库链接成功");
		};
//		//设置编码格式
//		$mysqli->set_charset("utf8");
//		//设置spl语句 : 查询的条件
//		$sql = "select * from shangpin where id = '{$id}'";
//		//执行spl语句 : 执行查询
//		$res = $mysqli->query($sql);
//		//mysqli_fetch_all() 函数从结果集中取得所有行作为关联数组，或数字数组，或二者兼有
//		$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
//	
////		 print_r($arr);
//		$jsonArr = json_encode($arr);
//		print_r($jsonArr);
		
		$mysqli->close();
?>