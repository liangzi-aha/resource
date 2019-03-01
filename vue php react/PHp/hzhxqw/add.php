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
}
function cx($mysqli) {
	$sql = "select * from sp";
	$query = mysqli_query($mysqli, $sql);
	$json = mysqli_fetch_all($query, MYSQLI_ASSOC);
	//把数据转成关联数组
	$jsonstr = json_encode($json);
	echo $jsonstr;
}
$name = $_REQUEST["name"];
$yj = $_REQUEST["yj"];
$xj = $_REQUEST["xj"];
$jj = $_REQUEST["jj"];
$fl = $_REQUEST["fl"];
$cd = $_REQUEST["cd"];
$src = $_REQUEST["src"];
	$sql = "INSERT INTO `sp`(`name`, `yj`, `xj`, `jj`, `fl`, `cd`,`src`) VALUES ('{$name}',{$yj},{$xj},'{$jj}','{$fl}','{$cd}','{$src}')";
	$res = $mysqli -> query($sql);
	cx($mysqli);
//关闭数据库
$mysqli -> close();
?>
?>