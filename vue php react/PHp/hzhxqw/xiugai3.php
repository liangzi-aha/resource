<?php
header("Content-type:text/json;charset=utf-8");
$hzhxqw = new mysqli("10.90.81.213", "hzh001", "123456", "hzhxqw");
//编码格式
$hzhxqw -> set_charset("utf8");
if ($hzhxqw -> connect_error) {
	//链接失败；
	exit("数据库链接失败");
} else {
	//链接成功；
//		echo "链接成功1";
};
//书写语句
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$sheng = $_REQUEST["sheng"];
$shi = $_REQUEST["shi"];
$xian = $_REQUEST["xian"];
$xxdz = $_REQUEST["xxdz"];
$phone = $_REQUEST["phone"];
$gddh1 = $_REQUEST["gddh1"];
$gddh2 = $_REQUEST["gddh2"];

$spl = "UPDATE `dzgl` SET `name`='{$name}',`sheng`='{$sheng}',`shi`='{$shi}',`xian`='{$xian}',`xxdz`='{$xxdz}',`phone`='{$phone}',`gddh1`='{$gddh1}',`gddh2`='{$gddh2}' WHERE id={$id}";

$res = $hzhxqw -> query($spl);

if ($res) {
	echo "修改成功";
} else {
	echo "插入失败";
}
$hzhxqw -> close();
?>