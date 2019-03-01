<?
$type = $_GET['type'];
header("Content-type:text/json;charset=utf-8");
$mysqli = new mysqli("10.90.81.213", "hzh001", "123456", "hzhxqw");
$mysqli -> set_charset("utf8");
//判断链接是否成功
if ($mysqli -> connect_error) {
	//链接失败
	exit("数据库链接失败");
} else {
	//链接成功
//	echo("数据库链接成功");
//	echo $type;
	//	cx();
//	cx($mysqli);
}
//function cx($mysqli){
//	$sql = "select * from user";
//	$query = mysqli_query($mysqli, $sql);
//	$json = mysqli_fetch_all($query, MYSQLI_ASSOC);
//	//把数据转成关联数组
//	$jsonstr = json_encode($json);
//	echo $jsonstr;
//}
if($type==1){
	$phone = $_GET['phone'];
	$passWord = $_GET['password'];
	$sql = "select * from user where phone={$phone}";
	$res = $mysqli -> query($sql);
//	select * from student where name = ‘you’
	$n = mysqli_num_rows($res);
	if($n==0){
	$sql = "INSERT INTO `user`(`phone`, `password`) VALUES ({$phone},{$passWord})";
//	$res = $mysqli -> query($sql);
	$query = mysqli_query($mysqli, $sql);
	echo 0;
	}else{
		echo 1;
	}
}
if ($type == 2) {
	$phone = $_GET['phone'];
	$sql = "select * from user where phone = '{$phone}'";
	$res = $mysqli -> query($sql);
	$n = mysqli_num_rows($res);
	//	echo $n;
	if ($n == 0) {
		echo 0;
	} elseif ($n == 1) {
		$json = mysqli_fetch_all($res, MYSQLI_ASSOC);
		//把数据转成关联数组
		$jsonstr = json_encode($json);
		echo $jsonstr;
	}
}

if ($type == 3) {
	$phone = $_GET['phone'];
	$password = $_GET['password'];
	$sql = "select * from user where phone = '{$phone}'";
	$res = $mysqli -> query($sql);
	$n = mysqli_num_rows($res);
	//	echo $n;
	if ($n == 0) {
		echo 0;
	} elseif ($n == 1) {
		$sql = "UPDATE `user` SET `password`='{$password}' WHERE `phone`='{$phone}'";			
	//执行sql语句
		$res = $mysqli -> query($sql);
		echo 1;
	}
}
//关闭数据库
$mysqli -> close();
?>