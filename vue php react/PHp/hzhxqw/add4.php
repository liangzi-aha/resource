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
//	echo("数据库链接成功");
}
	$sql = "select * from dzgl";
	$res = mysqli_query($mysqli, $sql);
	$json = mysqli_fetch_all($res, MYSQLI_ASSOC);
	//把数据转成关联数组
	$jsonstr = json_encode($json);
	print_r($jsonstr);
//}
//$name = $_REQUEST["input1"];
//$sheng = $_REQUEST["input2"];
//$shi = $_REQUEST["input3"];
//$xian = $_REQUEST["input4"];
//$xxdx = $_REQUEST["input5"];
//$phone = $_REQUEST["input6"];
//$gddh1 = $_REQUEST["input7"];
//$gddh2 = $_REQUEST["input8"];
//  $sql = "INSERT INTO `dzgl`(`name`, `sheng`, `she`, `xian`, `xxdx`, `phone`, `gddh1`, `gddh2`) VALUES ('{$name}','{$sheng}','{$shi}','{$xian}','{$xxdx}','{$phone}','{$gddh1}','{$gddh2}')";
//	$res = $mysqli -> query($sql);
//关闭数据库
$mysqli -> close();
?>