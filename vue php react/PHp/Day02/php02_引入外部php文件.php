<?php
	/*
	 * php02_引入外部php文件
	 * 
	 * 外部引入文件
	 * 1.include "文件路径"
	 * 2.require "文件路径"
	 * 以上两种方法,写多少遍,就引入多少次
	 * 
	 * 3.include_once "文件路径"
	 * 4.require_once "文件路径"
	 * 以上两种方法,无论写多少遍,只引入一次
	 */
	//引入外部文件
	include_once 'tool.php';
	include_once 'tool.php';
	include_once 'tool.php';
	include_once 'tool1.php';
	
	$a = 10;
	$arr = array(1,2,3);
	myPrint($a);
	myPrint($arr);
	
	/*
	 * include 和 require的区别:
	 * 外部引入文件时,如果因为路径问题或者加载原因导致引入错误,include不会影响后面代码的执行.而require会报错,后面的代码不会显示.
	 */
?>