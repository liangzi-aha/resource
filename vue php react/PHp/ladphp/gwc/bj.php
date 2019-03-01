<?
	$id = $_REQUEST["id"];
	
	$type = $_REQUEST["type"];
	select($id,$type);
function select($id,$type){
	//链接数据库、
	$xiaoxin = new mysqli("10.90.81.243","wxy","123456","ald");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
//	echo "链接成功1";
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
		$sql = "select * from gwc where id = '$id'";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	
	if($type == 0){
	
	if(count($arr[0]['num'])==0){
//DELETE FROM `gwc` WHERE 1
$sql4 = "DELETE FROM `gwc` WHERE id = '$id'";
	$res4 = $xiaoxin->query($sql4);


	}else{
     $num = $arr[0]['num'] - 1;
		$sql3 = "UPDATE `gwc` SET `num`={$num} WHERE id = '$id'";
	$res3 = $xiaoxin->query($sql3);
		if($res3){
   	echo  "修改成功";
   }else{
// 	echo "插入失败";
   }
	}
	}
	if($type == 1){
     $num = $arr[0]['num'] + 1;
	$sql3 = "UPDATE `gwc` SET `num`={$num} WHERE id = '$id'";
	$res3 = $xiaoxin->query($sql3);
		if($res3){
   	echo  "修改成功";
   }else{
// 	echo "插入失败";
   }

	}
	
	
	
	
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
//	$sql = "select * from gwc where id = '$id'";
//	
//	$res = $xiaoxin->query($sql);
//	
//	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
//	if(count($arr)==0){
////		echo  111;
//		select2($id);
//	}else{
//   $num = $arr[0]['num'] + 1;
//		$sql3 = "UPDATE `gwc` SET `num`={$num} WHERE id = '$id'";
//	$res3 = $xiaoxin->query($sql3);
//		if($res3){
// 	echo  "修改成功";
// }else{
//// 	echo "插入失败";
// }
//	}
	$xiaoxin->close();
		
}
	
	
	
	
	
?>