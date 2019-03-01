<?
 $name1 = $_REQUEST["name"];                            //定义类的属性（姓名，性别，年龄等等）
// $id1 = $_REQUEST["id"];  
 $jg1 = $_REQUEST["jg"];  
 $yf1 = $_REQUEST["yf"];  
 $dq1 = $_REQUEST["dq"];  
// $th1 = $_REQUEST["th"];  
 $spxq1 = $_REQUEST["spxq"];  
 $gs1 = $_REQUEST["gs"]; 
// $pinpai1 = $_REQUEST["pinpai"]; 
// $guige1 = $_REQUEST["guige"]; 
// $chucun1 = $_REQUEST["chucun"]; 
// $baoqi1 = $_REQUEST["baoqi"]; 
 $num1 = $_REQUEST["num"]; 
 $src11 = $_REQUEST["src1"]; 
 $type1 = $_REQUEST["type"]; 



	class Preson {                                  //定义了一个Preson类
public $name;                            //定义类的属性（姓名，性别，年龄等等）
//public $id;
public $jg;
public $yf;
public $dq;
//public $th;
public $spxq;
public $gs;
//public $pinpai;
//public $guige;
//public $chucun;
//public $baoqi;
public $num;
public $src1;
public $type;


}
//new翻译是新的，意思就是创建一个新的人，并把这个新的对象赋值给$Preson1，这个就是实例化
$obj = new Preson();                 //实例化类
$obj->name = $name1;
//$obj->id = $id1;
$obj->jg = $jg1;
$obj->yf = $yf1;
$obj->dq = $dq1;
//$obj->th = $th1;
$obj->spxq = $spxq1;
$obj->gs =$gs1;
//$obj->pinpai = $pinpai1;
//$obj->guige = $guige1;
//$obj->chucun = $chucun1;
//$obj->baoqi = $baoqi1;
$obj->num = $num1;
$obj->src1 = $src11;
$obj->type = $type1;
//echo  $obj->name.'  '.$obj->id.'  '.$obj->chucun;



insertInfo($obj);
	function insertInfo($obj){

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
$sql = "INSERT INTO `shangpin`(`name`, `jg`, `yf`, `dq`, `spxq`, `gs`, `num`, `src1`, `type`) VALUES ('{$obj->name}','{$obj->jg}','{$obj->yf}','{$obj->dq}','{$obj->spxq}','{$obj->gs}','{$obj->num}','{$obj->src1}','{$obj->type}')";

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
	
	
	
	
?>