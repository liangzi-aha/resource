<?php
$id = $_REQUEST["id"];
	
	select($id);
function select($id){
	//链接数据库、
	$xiaoxin = new mysqli("10.90.81.213", "hzh001", "123456", "hzhxqw");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
//	echo "链接成功1";
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
//	$sql = "select * from dzgl where id = '$id'";
//	
//	$res = $xiaoxin->query($sql);
//	
//	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	
	$sql4 = "DELETE FROM `dzgl` WHERE id = '$id'";
	$res4 = $xiaoxin->query($sql4);
	
	$sql = "select * from dzgl";
	$res = $xiaoxin->query($sql);
	$json = mysqli_fetch_all($res, MYSQLI_ASSOC);
	//把数据转成关联数组
	$jsonstr = json_encode($json);
	print_r($jsonstr);
	
	$xiaoxin->close();
}
?>