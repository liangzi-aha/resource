<?php
	include_once "../Day02/tool.php";
	/*
	 * DataBase
	 * 1.数据库:
	 * 优点:有专门的sql语句对数据库进行快速方便的处理
	 * 
	 * 数据库根据自身的类型:
	 * 1.关系型数据库:由一张张表组成的
	 * 2.对象型数据库   //甲骨文 oracle
	 * ...
	 * 
	 * SQL语句:Structured Query Language ,告诉数据库我们的意图
	 * 
	 * 数据库的操作流程
	 * 1.创建数据库---
	 * 2.链接(打开)数据库
	 * 3.创建表(一张表是创建一次)
	 * 4.增删改查
	 * 5.关闭数据库
	 */
	
	/*
	 * 1.创建表
	 * create table 表名(字段1 类型1, ..., 字段n 类型n)
例如: create table if not exists(存在) cat(id int primary key auto_increment, nickname text)
	 */
	function createTable(){
		/*
		 * 1.链接数据库
		 * new mysqli("数据库地址","用户名","密码","数据库名","端口号") 
		 * 该方法链接数据库并得到一个mysqli的对象,对数据库的所有操作,都有该对象负责
		 */
		$mysqli = new mysqli("localhost","root","","lisir");
		//判断链接是否成功   //php访问对象下面的属性的时候用  ->  
		//mysqli_connect_error() 函数返回上一次连接错误的错误描述。如果没有错误发生则返回 NULL。
		if($mysqli->connect_error){
			//链接失败
			exit("数据库链接失败");
		}else{
			//链接成功
			myPrint("数据库链接成功");
		}
		//2.设置编码格式
		$mysqli->set_charset("utf8");
		
		//3.书写SQL语句 创建表spl语句
		$sql = "create table if not exists user(id int primary key auto_increment, username text,password text)";
		
		//执行sql语句  返回值1或者0
		$res = $mysqli->query($sql);
		if($res){
			myPrint("创建表成功");
		}else{
			myPrint("创建表失败");
		}
		//4.关闭数据库
		$mysqli->close();
		
	}
//	createTable();
	
	//插入数据
	function inserInfo($name,$age,$sex,$num,$school){
		$mysqli = new mysqli("localhost","root","","lisir");
		//链接服务器
		if($mysqli->connect_error){
			//链接失败
			exit("数据库链接失败");
		}else{
			//链接成功
			myPrint("数据库链接成功");
		}
		//设置编码格式
		$mysqli->set_charset("utf8");
	
	//3.书写SQL语句
	/*
	 *插入语句
insert into 表名 (字段1, 字段2, ..., 字段n) values (值1, 值2, ..., 值3)
例如: insert into student (name, gender, age) values ('keke', '女', 38)
		易错点: text类型 ,填写值时  加''
	 */
	$sql = "insert into student (name,age,sex,num,school) values ('{$name}',{$age},'{$sex}',{$num},'{$school}')";
		//执行sql语句
		$res = $mysqli->query($sql);
		if($res){
			myPrint("插入数据成功");
		}else{
			myPrint("插入数据失败");
		}
		//4.关闭数据库
		$mysqli->close();
	}
//		inserInfo("王先生",18,"男",123,"北大");

		function selectInfo(){
			$mysqli = new mysqli("localhost","root","","lisir");
			if($mysqli->connect_error){
			//链接失败
				exit("数据库链接失败");
			}else{
			//链接成功
				myPrint("数据库链接成功");
			}
			$mysqli->set_charset("utf8");
			
			$sql = "SELECT * FROM student";
			
			//执行sql语句  查询到的结果存放在$res变量里,我们需要从中提取结果数组
			$res = $mysqli->query($sql);
			//mysqli_fetch_all() 函数从结果集中取得所有行作为关联数组，或数字数组，或二者兼有
			$arr = mysqli_fetch_all($res, MYSQLI_ASSOC);
			
			print_r($arr);
			//如果前后台要发生数据的传递,在拿到数据之后一般不会直接进行传输,会先把数据转化成通用的数据格式,再进行传输.目前最常用的两种通用的数据格式是:json 和 xml
			/*
			 * php里
			 * 原始数据-->json  json_encode(原始类型)  encode:编码
			 * json-->原始数据  json_decode(json)   decode:解码
			 *
			 */
			$jsonStr = json_encode($arr);
			print_r($jsonStr);
			//关闭数据库
			$mysqli->close();
		}
//		selectInfo();

		//删除数据  delete from 表名 where 主键 = 值  例如: delete from student where id = 6
		function deleteInof($id){
			$mysqli = new mysqli("localhost","root","","lisir");
			//判断链接是否成功   //php访问对象下面的属性的时候用  ->  
			if($mysqli->connect_error){
			//链接失败
				exit("数据库链接失败");
			}else{
			//链接成功
				myPrint("数据库链接成功");
			}
			//2.设置编码格式
			$mysqli->set_charset("utf8");
			$sql = "delete from student where id = {$id}";
			//执行sql语句
			$res = $mysqli->query($sql);
			if($res){
				myPrint("删除数据成功");
			}else{
				myPrint("删除数据失败");
			}
			//关闭数据库
			$mysqli->close();
		}
//		deleteInof(2);

		//修改数据   update 表名 set 字段1 = 值1, ..., 字段n = 值n where 主键 = 值    例如: update student set name = '经纪人' where id = 6
		function updateInfo(){
			$mysqli = new mysqli("localhost","root","","lisir");
			//判断链接是否成功   //php访问对象下面的属性的时候用  ->  
			if($mysqli->connect_error){
			//链接失败
				exit("数据库链接失败");
			}else{
			//链接成功
				myPrint("数据库链接成功");
			}
			//2.设置编码格式
			$mysqli->set_charset("utf8");
			$sql = "update student set age = 20 where id = 1";
			//执行sql语句
			$res = $mysqli->query($sql);
			if($res){
				myPrint("修改数据成功");
			}else{
				myPrint("修改数据失败");
			}
			//关闭数据库
			$mysqli->close();
		}
		updateInfo();
		
?>

<!--php里有两种数组  关联数组 ,和  数值数组 -->