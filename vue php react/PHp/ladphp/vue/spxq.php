<?
	$id = $_REQUEST["id"];
	
	
	
	
	
//	echo '链接成功';
	
	
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
	
	$sql = "select * from shangpin where id = '$id'";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	
//	print_r($arr);
	$jsonArr = json_encode($arr);
	print_r($jsonArr);
	
	//关闭数据库
	$xiaoxin->close();
	//后台要发生数据传递，在拿到数据之后一般不会直接进行传输，会先把数据转化成通用的数据格式，在进行传输。
	//目前最常用的两种通用的数据格式是  ：json 和 xml
	//php里原始数据类型转成 ： 
//	原始数据类型————》json  方法是 json_encode(原始数据类型);
//  json-——>原始数据类型    方法 json_decode(json)
	
	//select name, gender from student
	
}
	
	
	
	
	
	
	
	
	
	
	
?>