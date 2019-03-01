<?
 
 
 
 
 
 
 
 //查询语句
select();
function select(){
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
	
	$sql = "SELECT * FROM gwc";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	

	$jsonArr = json_encode($arr);
	print_r($jsonArr);
	

	$xiaoxin->close();
	
	
}                          
 
 
 
//function xiugai($obj){
//$id1 = $_REQUEST["id"];  
//$num1 = 1; 
//	
//		
//
//$ald = new mysqli("localhost","root","","ald");
//	if($ald->connect_error){
//	//链接失败；
//	exit("数据库链接失败");
//	                   
//} else{
//	//链接成功；
////	echo "链接成功1";
//};
////编码格式
//$ald->set_charset("utf8");
////书写语句
//$sql = "UPDATE `yhdz` SET `num`='{$obj->num}' WHERE `id`='{$obj->id}'"
//
//
////echo $sql;
//
////执行sql语句
//$res = $ald->query($sql);
//if($res){
// 	echo  "插入成功";
// }else{
//// 	echo "插入失败";
// }
// $ald->close();
//
// } 
// 
// 
// 
// 
// 
//
//
//
////insertInfo($obj);添加新数据
//	function insertInfo($obj){
//$name1 = $_REQUEST["name"];                            //定义类的属性（姓名，性别，年龄等等）
//// $id1 = $_REQUEST["id"];  
// $jg1 = $_REQUEST["jg"];  
// $yf1 = $_REQUEST["yf"];    
// $gs1 = $_REQUEST["gs"]; 
// $num1 = 1; 
// $src1 = $_REQUEST["src"]; 
// $fufei1= 0;
// $daoda1 = 0;  
// 
// $yhzh1 = $_REQUEST["yhzh"]; 
// 
//	class Preson {                                
//public $name;                          
////public $id;
//public $jg;
//public $yf;
//public $gs;
//public $num;                          
//public $src;
//public $fufei;
//public $daoda;
//public $yhzh;
//
//}
//$obj = new Preson();                
//$obj->name = $name1;
////$obj->id = $id1;
//$obj->jg = $jg1;
//$obj->yf = $yf1;
//$obj->gs = $gs1;	
//$obj->num = $num1;
//$obj->src = $src1;
//$obj->fufei = $fufei1;
//$obj->daoda = $daoda1;	
//$obj->yhzh = $yhzh1;			
//		
//		
//
//$ald = new mysqli("localhost","root","","ald");
//	if($ald->connect_error){
//	//链接失败；
//	exit("数据库链接失败");
//	                   
//} else{
//	//链接成功；
////	echo "链接成功1";
//};
////编码格式
//$ald->set_charset("utf8");
////书写语句
//$sql = "INSERT INTO `gwc`(`name`, `dj`, `num`, `yf`, `gs`, `src`, `fufei`, `daoda`, `yhzh`) VALUES ('{$obj->name}','{$obj->dj}','{$obj->num}','{$obj->yf}','{$obj->gs}','{$obj->src}','{$obj->fufei}','{$obj->daoda}','{$obj->yhzh}')";
//
////echo $sql;
//
////执行sql语句
//$res = $ald->query($sql);
//if($res){
// 	echo  "插入成功";
// }else{
//// 	echo "插入失败";
// }
// $ald->close();
//
// }
//	
//function deleteInfo($id){
//	 //链接数据库、
//	$xiaoxin = new mysqli("localhost","root","","ald");
//	if($xiaoxin->connect_error){
//		exit("000");
//	}else{
////		myPrint("链接成功");
//	}
//	//设置编码格式
//	$xiaoxin->set_charset("utf8");
//	
//	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
//	
//	$sql = "DELETE FROM `yhdz` WHERE id = {$id}";
//	
//	$res = $xiaoxin->query($sql);
//	
//
//if($res){
//// 	myPrint("删除成功");
// }else{
//// 	myPrint("删除失败");
// }	
//	
	
?>