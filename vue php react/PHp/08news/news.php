<?php
	header("Content-type:text/json; charset=utf-8");
	
	//获取type
	$type = $_GET['type'];
	
 $con = mysqli_connect('127.0.0.1','root','','h0504');
	
	mysqli_set_charset($con,'utf8');
	
	//判断type
	if($type==0){
		$sql = "select * from news";
		$query = mysqli_query($con,$sql);
		$json = mysqli_fetch_all($query,MYSQLI_ASSOC); // 把数据转成关联数组
		$jsonstr = json_encode($json);
		echo $jsonstr;
	}elseif($type==3){
		$id = $_GET['id'];
		$sql = "select * from news where id={$id}";
		$query = mysqli_query($con, $sql);
		$json = mysqli_fetch_all($query,MYSQLI_ASSOC); // 把数据转成关联数组
		$jsonstr = json_encode($json);
		echo $jsonstr;
	}elseif($type==1){
		$id = $_GET['id'];
		$sql = "DELETE FROM `news` WHERE id={$id}";
		mysqli_query($con, $sql);
		
		echo "1";
	}elseif($type==2){
		$id = $_GET['id'];
		$tit = $_GET['tit'];
		$cont = $_GET['cont'];
		$sql = "UPDATE `news` SET `title`='{$tit}',`cont`='{$cont}' WHERE id={$id}";
		$query = mysqli_query($con, $sql);
		if($query){
			echo "1";
		}
	}
	
	
	
	
?>