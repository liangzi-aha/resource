<?
 
 
 
 
 //查询语句
//select();
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
	
	$sql = "SELECT * FROM yhdz";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	

	$jsonArr = json_encode($arr);
	print_r($jsonArr);
	

	$xiaoxin->close();
	
	
}                          
 
 
 
function xiugai($obj){
$id1 = $_REQUEST["id"];  
 $dz1 = $_REQUEST["dz"];  
 $shr1 = $_REQUEST["shr"];  
 $dh1 = $_REQUEST["dh"];  
 $mr1 = $_REQUEST["mr"];  
 $yhzh1 = $_REQUEST["yhzh"]; 
	class Preson {                                
public $id;                          
public $dz;
public $shr;
public $dh;
public $mr;
public $yhzh;

}
$obj = new Preson();                
$obj->id = $id1;
$obj->dz = $dz1;
$obj->shr = $shr1;
$obj->dh = $dh1;
$obj->mr = $mr1;		
$obj->yhzh = $yhzh1;			
		
		

  $ald = new mysqli("10.90.81.243","wxy","123456","ald");
	if($ald->connect_error){
	//链接失败；
	exit("数据库链接失败");
	                   
} else{
	//链接成功；
//	echo "链接成功1";
};
//编码格式
$ald->set_charset("utf8");
//书写语句
$sql = "UPDATE `yhdz` SET `dz`='{$obj->dz}',`shr`='{$obj->shr}',`dh`=['{$obj->dh}',`mr`='{$obj->mr}' WHERE `id`='{$obj->id}'"


//echo $sql;

//执行sql语句
$res = $ald->query($sql);
if($res){
   	echo  "插入成功";
   }else{
// 	echo "插入失败";
   }
   $ald->close();

 } 
 
 
 
 
 



//insertInfo($obj);添加新数据
	function insertInfo($obj){
$id1 = $_REQUEST["id"];  
 $dz1 = $_REQUEST["dz"];  
 $shr1 = $_REQUEST["shr"];  
 $dh1 = $_REQUEST["dh"];  
 $mr1 = $_REQUEST["mr"];  
 $yhzh1 = $_REQUEST["yhzh"]; 
	class Preson {                                
public $id;                          
public $dz;
public $shr;
public $dh;
public $mr;
public $yhzh;

}
$obj = new Preson();                
$obj->id = $id1;
$obj->dz = $dz1;
$obj->shr = $shr1;
$obj->dh = $dh1;
$obj->mr = $mr1;		
$obj->yhzh = $yhzh1;			
		
		

  $ald = new mysqli("localhost","root","","ald");
	if($ald->connect_error){
	//链接失败；
	exit("数据库链接失败");
	                   
} else{
	//链接成功；
//	echo "链接成功1";
};
//编码格式
$ald->set_charset("utf8");
//书写语句
$sql = "INSERT INTO `yhdz`(`id`, `dz`, `shr`, `dh`, `mr`, `yhzh`) VALUES ('{$obj->id}','{$obj->dz}','{$obj->shr}','{$obj->dh}','{$obj->mr}','{$obj->yhzh}')";

//echo $sql;

//执行sql语句
$res = $ald->query($sql);
if($res){
   	echo  "插入成功";
   }else{
// 	echo "插入失败";
   }
   $ald->close();

 }
	
function deleteInfo($id){
  	 //链接数据库、
	$xiaoxin = new mysqli("localhost","root","","ald");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
//		myPrint("链接成功");
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "DELETE FROM `yhdz` WHERE id = {$id}";
	
	$res = $xiaoxin->query($sql);
	

if($res){
// 	myPrint("删除成功");
 }else{
// 	myPrint("删除失败");
 }	
	
	
?>