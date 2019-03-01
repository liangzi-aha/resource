<?php
	include_once "../Day02/tool.php";
	/*
	 * $_GET 和 $_POST里存储的只能是从前台提交的简单字段数据
	 * 复查数据存储,如文件,图片等会存储在$_FILES数组里
	 */
//	print_r($_FILES);
	
	//分别获取图片的信息
	$imgArr = $_FILES["headImg"];
	
	//图片名
	$imgName = $imgArr["name"];
	
	//图片类型
	$imgType = $imgArr["type"];
	
	//临时路径
	$imgPath = $imgArr["tmp_name"];
	
	//将图片从临时文件夹里移动到指定的路径下
	$newPath = $imgName;
	
	$res = move_uploaded_file($imgPath,$newPath);
	if($res){
		myPrint("上传成功");
	}else{
		myPrint("上传失败");
	}
	
?>