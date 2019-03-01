<?
 $type = $_REQUEST['type'];
  
  if($type == 0 ){
//	echo "aaa";
$sjh = $_REQUEST["sjh"];
select($sjh);

//	insertInfo();
  }else if($type == 1){
//	echo '2326556456456';
  	$sjh = $_REQUEST["sjh"];
	$mm = $_REQUEST["mm"];
	
  	$xiaoxin = new mysqli("10.90.81.243","wxy","123456","ald");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
//	echo "链接成功1";
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "select * from yhxx where sjh = '$sjh'";
	
	$res = $xiaoxin->query($sql);
//	echo '$res';
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	
	if(count($arr) == 0){
		
		echo 0;
	}else{
		$jsonArr = json_encode($arr);
	      print_r($jsonArr);
	} 

	$xiaoxin->close();
	
  };
  
  
  
  
  
 
 
 //查询语句
//select();
function select($sjh){
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
	
	$sql = "select * from yhxx where sjh = '$sjh'";
	
	$res = $xiaoxin->query($sql);
//	echo '$res';
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	if(count($arr) != 0){
		
		echo 0;
	}else{
		insertInfo();
	}
	

//	$jsonArr = json_encode($arr);
//	print_r($jsonArr);
	

	$xiaoxin->close();
	
	
}                          
 
 
 
function xiugai(){
//$id1 = $_REQUEST["id"];  
 $yhm1 = $_REQUEST["yhm"];  
 $sjh1 = $_REQUEST["sjh"];  
 $mm1 = $_REQUEST["mm"];  
 
	class Preson {                                
//public $id;                          
public $yhm;
public $sjh;
public $mm;

}
$obj = new Preson();                
//$obj->id = $id1;
$obj->yhm = $yhm1;
$obj->sjh = $sjh1;
$obj->mm = $mm1;			
		
		

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
$sql = "UPDATE `yhdz` SET `dz`='{$obj->dz}',`shr`='{$obj->shr}',`dh`=['{$obj->dh}',`mr`='{$obj->mr}' WHERE `id`='{$obj->id}'";


//echo $sql;

//执行sql语句
$res = $ald->query($sql);
if($res){
   	echo  "插入成功";
   }else{
// 	echo "插入失败";
   }
   $ald->close();

 } ;
 
 
 
 
 



//insertInfo($obj);添加新数据
	function insertInfo(){
//$id1 = $_REQUEST["id"];  
 $yhm1 = $_REQUEST["sjh"];  
 $sjh1 = $_REQUEST["sjh"];  
 $mm1 = $_REQUEST["mm"];  
 
	class Preson {                                
//public $id;                          
public $yhm;
public $sjh;
public $mm;

}
$obj = new Preson();                
//$obj->id = $id1;
$obj->yhm = $yhm1;
$obj->sjh = $sjh1;
$obj->mm = $mm1;

		

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
$sql = "INSERT INTO `yhxx`(`yhm`, `sjh`, `mm`) VALUES ('{$obj->yhm}','{$obj->sjh}','{$obj->mm}')";

//echo $sql;

//执行sql语句
$res = $ald->query($sql);
if($res){
   	echo  1;
   }else{
// 	echo "插入失败";
   }
   $ald->close();

 }
	
function deleteInfo($id){
  	 //链接数据库、
	$xiaoxin = new mysqli("10.90.81.243","wxy","123456","ald");
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
}
	?>