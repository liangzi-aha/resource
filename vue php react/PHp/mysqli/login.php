<?php
	include_once "../Day02/tool.php";
	$username = $_REQUEST["un"];
	$password = $_REQUEST["pw"];
	//存入到数据库
		$mysqli = new mysqli("localhost","root","","lisir");
		//链接服务器  mysqli_connect_error() 函数返回上一次连接错误的错误描述。如果没有错误发生则返回 NULL。
		if($mysqli->connect_error){
			//链接失败
			exit("数据库链接失败");
		}else{
			//链接成功
			myPrint("数据库链接成功");
		}
		
		//另外一种判断链接数据库的方法
//		$conn = mysql_connect($host,$user,$pwd);
//		//判断
//		if (!$conn) {
		//die() 函数输出一条消息，并退出当前脚本。该函数是 exit() 函数的别名。
//		die('连接数据库失败: ' . mysql_error());
// 		 }
//		echo "mysql 连接成功！";
		
		
		//设置编码格式
		$mysqli->set_charset("utf8");
		
		$sql = "select * from user where username = '{$username}'";
		$res = $mysqli->query($sql);
		$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
		if(count($arr) != 0){
			foreach($arr as $i=>$v){
				$ps = $arr[$i]["password"];
				if($ps == $password){
					myPrint("登录成功");
					exit;
				}
				myPrint("密码错误");
			}
		}else{
				myPrint("没有此用户");
			}
?>