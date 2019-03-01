<?php
	include_once "../Day02/tool.php";
	//获取从前端传入的值
	$username = $_REQUEST["un"];
	$password = $_REQUEST["pw"];
	
	//存入到数据库
		$mysqli = new mysqli("localhost","root","","lisir");
		//链接服务器
		if($mysqli->connect_error){
			//链接失败
			exit("数据库链接失败");
		}else{
			//链接成功
			myPrint("数据库链接成功");
		}
		//设置编码格式
		$mysqli->set_charset("utf8");
		
		$sql = "insert into user (username,password) values ('{$username}','{$password}')";
		
		$res = $mysqli->query($sql);
		if($res){
			myPrint("插入数据成功");
		}else{
			myPrint("插入数据失败");
		}
		$mysqli->close();
?>