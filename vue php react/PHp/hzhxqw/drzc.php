<?
header("Content-type:text/json;charset=utf-8");
$mysqli = new mysqli("10.90.81.213", "hzh001", "123456", "hzhxqw");
$mysqli -> set_charset("utf8");
$type = $_GET['type'];
//判断链接是否成功
if ($mysqli -> connect_error) {
	//链接失败
	exit("数据库链接失败");
} else {
	//链接成功
	//		echo("数据库链接成功");
	//		cx($mysqli);
}
function cx($mysqli) {
	$sql = "select * from user";
	$query = mysqli_query($mysqli, $sql);
	$json = mysqli_fetch_all($query, MYSQLI_ASSOC);
	//把数据转成关联数组
	$jsonstr = json_encode($json);
	echo $jsonstr;
}

if ($type == 1) {
//	$userName = $_GET['name'];
//	$passWord = $_GET['tel'];
	$tel = $_GET['phone'];
	$passWord = $_GET['passWord'];
	$sql = "INSERT INTO `user`(`tel`, `mm`) VALUES ('{$tel}','{$passWord}',)"    

	$res = $mysqli -> query($sql);
	cx($mysqli);
} elseif ($type == 2) {
	$tel = $_GET['tel'];
	$sql = "select * from user where tel = '{$tel}'";
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
}else if($type==3){
//		$id = $_GET['id'];
		$password = $_GET['password'];
		$tel = $_GET['tel'];
		$sql = "UPDATE `user` SET `tel`='{$tel}',`mm`='{$password}' WHERE id={$id}";
		$res = $mysqli -> query($sql);
		echo 1;
	}

//关闭数据库
$mysqli -> close();
?>