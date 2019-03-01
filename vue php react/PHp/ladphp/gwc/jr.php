<?
	
	
	$id = $_REQUEST["id"];
	
	
	select($id);
function select($id){
	//链接数据库、
	$xiaoxin = new mysqli("10.90.81.243","wxy","123456","ald");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
//	echo "链接成功1";
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "select * from gwc where id = '$id'";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	if(count($arr)==0){
//		echo  111;
		select2($id);
	}else{
     $num = $arr[0]['num'] + 1;
		$sql3 = "UPDATE `gwc` SET `num`={$num} WHERE id = '$id'";
	$res3 = $xiaoxin->query($sql3);
		if($res3){
   	echo  "修改成功";
   }else{
// 	echo "插入失败";
   }
	}
	$xiaoxin->close();
		
}
	
	
	
//	echo '链接成功';
	
	
	
function select2($id){
	//链接数据库、
	$xiaoxin = new mysqli("10.90.81.243","wxy","123456","ald");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
//	echo "链接成功1";
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "select * from shangpin where id = '$id'";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	//链接购物车表
	

$sql1 = "INSERT INTO `gwc`(`id`, `name`, `dj`, `num`, `yf`, `gs`, `src`, `fufei`, `daoda`, `yhzh`, `dq`) VALUES ({$arr[0]['id']},'{$arr[0]['name']}',{$arr[0]['jg']},1,{$arr[0]['yf']},'{$arr[0]['gs']}','{$arr[0]['src1']}',0,0,111,'{$arr[0]['dq']}')";

//echo $sql;

//执行sql语句
$res1 = $xiaoxin->query($sql1);
if($res1){
   	echo  "插入成功";
   }else{
// 	echo "插入失败";
   }

	


	$jsonArr = json_encode($arr);
//	print_r($jsonArr);


//echo $arr[0]['name'];
	//关闭数据库
	$xiaoxin->close();
	
	
}
	
	
	
?>