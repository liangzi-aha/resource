<?php
	/*
	 * php03_字符串操作函数
	 */
	include_once "tool.php";
	/*
	 * 1.strlen(字符串)  获取字符串字节数
	 * 字节:计算机里存储的最小单位  1b == 1字节
	 * php里,字母占一个字节,汉字占3个字节,标点占1个字节,数字占1个字节
	 * 1b = 8个二进制位
	 * 1kb = 1024b
	 * 1m = 1024kb
	 * 1g = 1024m
	 * 1t = 1024g
	 */
	$str1 = "123hello!你好";
	myPrint(strlen($str1));
	
	/*
	 * 2.strpos(原串,要查找的内容,查找的位置) 字符串查找
	 * 返回值:如果能找到,返回下标,找不到,返回false.
	 * 第三个参数不写,默认从头查找
	 */
	$str2 = "write the code,change the world!";
	myPrint(strpos($str2,"code"));
	
	/*
	 * 3.str_replace(查找的字符串,替换的字符串,原串,被替换的字符串的个数)
	 * 返回值:替换过后的新串
	 */
	
	$str3 = "how old are you!you you you";
	$newStr = str_replace("you","me",$str3,$count);
	myPrint($newStr);
	myPrint($count);
	
	/*
	 * 4.substr(原串,起始位置(字节数),长度(字节数)) 字符串截取
	 * 返回值:截取的子串
	 */
	$str4 = "ab张三cdef";
	$newStr = substr($str4,2,6);
	myPrint($newStr);
	
	/*
	 * 5.大写转换
	 * strtoupper(原串)  转成全大写
	 * strtolower(原串)  转成全小写
	 */
	
	$str5 = "china";
	$upStr = strtoupper($str5);
	myPrint($upStr);
	
	$lowerStr = strtolower($str5);
	myPrint($lowerStr);
	
	/*
	 * 6.字符串反转
	 * strrev(原串) 
	 */
	$str6 = "abcdef";
	$revStr = strrev($str6);
	myPrint($revStr);
	
	/*
	 * 7.htmlspecialchars(原串) 转义字符串里的html标签
	 */
	$str7 = "<div>这是div</div>";
	$res =  htmlspecialchars($str7);
	myPrint($res);
	
	/*
	 * strip_tags(原串) 去除字符串里的标签
	 */
	$str8 = "<p>唧唧复唧唧</p>";
	myPrint($str8);
	$newSrt8 = strip_tags($str8);
	myPrint($newSrt8);
	
	/*
	 * 9.strcmp(字符串1,字符串2) 字符串比较
	 * 
	 * 如果str1 > str2  值>0
	 * 如果str1 < str2  值<0
	 * 如果str1 == str2  值==0
	 */
	$scmp1 = "abc";
	$scmp2 = "adf";
	myPrint(strcmp($scmp1,$scmp2));
	
	/*
	 * 10.sprintf("占位符",转化的值将数字转换成对应的二进制,八进制,十六进制的字符串)
	 * %b 二进制
	 * %d 十进制
	 * %o 八进制
	 * %x 十六进制
	 * 返回值:转化后的数字
	 */
	$num = 125;
	$two = sprintf("%b",$num);
	myPrint($two);
?>