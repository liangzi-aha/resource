<?
$hzhxqw = new mysqli("10.90.81.213", "hzh001", "123456", "hzhxqw");
if ($hzhxqw -> connect_error) {
	//链接失败；
	exit("数据库链接失败");
} else {
	//链接成功；
		echo "链接成功1";
};
//编码格式
$hzhxqw -> set_charset("utf8");
//书写语句
$name = $_REQUEST["name"];
//定义类的属性（姓名，性别，年龄等等
$id = $_REQUEST["id"];
$yj = $_REQUEST["yj"];
$xj = $_REQUEST["xj"];
$jj = $_REQUEST["jj"];
// $th1 = $_REQUEST["th"];
$fl = $_REQUEST["fl"];
$cd = $_REQUEST["cd"];
$src = $_REQUEST["src"];
$sql= "UPDATE `sp` SET `name`='{$name}',`yj`='{$yj}',`xj`='{$xj}',`jj`='{$jj}',`fl`='{$fl}',`cd`='{$cd}',`src`='{$src}' WHERE id={$id}";
//执行sql语句
$res = $hzhxqw -> query($sql);
if ($res) {
	echo "修改成功";
} else {
	// 	echo "插入失败";
}
$hzhxqw -> close();
?>