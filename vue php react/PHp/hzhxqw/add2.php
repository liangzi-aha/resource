<?
header("Content-type:text/json;charset=utf-8");
$mysqli = new mysqli("10.90.81.213", "hzh001", "123456", "hzhxqw");
$mysqli -> set_charset("utf8");
//判断链接是否成功
if ($mysqli -> connect_error) {
	//链接失败
	exit("数据库链接失败");
} else {
	//链接成功
	echo("数据库链接成功");
	//		cx($mysqli);
}
function cx($mysqli) {
	$sql = "select * from grxx";
	$query = mysqli_query($mysqli, $sql);
	$json = mysqli_fetch_all($query, MYSQLI_ASSOC);
	//把数据转成关联数组
	$jsonstr = json_encode($json);
	echo $jsonstr;
}
$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$mm = $_REQUEST["mm"];
$dz = $_REQUEST["dz"];
$jf = $_REQUEST["jf"];
//$cd = $_REQUEST["cd"];
	$sql = "INSERT INTO `grxx`(`name`, `phone`, `mm`, `dz`, `jf`) VALUES ('{$name}','{$phone}','{$mm}','{$dz}','{$jf}')";
	$res = $mysqli -> query($sql);
	cx($mysqli);
//关闭数据库
$mysqli -> close();
?>
?>