<?
      include_once "../Day02/tool.php";
	/*
	 * DataBase
	 * 1.数据库：
	 * 数据库存储的优点： 有专门的sql语句对数据进行快速方便的处理
	 * 
	 * 数据库根据自身的类型：
	 * 1，关系型数据库：由一张张表组成的
	 * 
	 * 2，对象数据库
	 * 
	 * SQL 语句：structured  Query Language 告诉数据库我们的意图
	 * 
	 * 数据库的操作流程 
	 * 1， 创建数据库
	 * 2. 链接数据库
	 * 3. 创建表(一张表只创建一次)
	 * 4. 增删改查
	 * 5. 关闭数据库
	 * 
	 */
	//甲骨文 oracle 
	
	/*
	 * 数据持久化: 数据永久的保存起来
1.文件
2.cookie
3.数据库

根据处理数据的能力, 可分为:
1.大型数据库: Oracle
2.中型数据库: MySQL, SQLServer
3.小型数据库: Access
4.轻量级数据库: SQLite

数据库的组成
1.一个数据库系统管理着多个数据库
2.一个数据库中可以存放多张表
3.每张表都有字段(比如姓名, 年龄)
4.表中会有一个特殊的字段(主键), 用于保证数据的唯一性

MySQL的管理系统: phpMyAdmin

通过代码操作数据库, 使用SQL(structure query language, 结构化查询语言)
CURD
1.增(insert)
2.删(delete)
3.改(update)
4.查(select)
注: SQL语句中的关键词, 不区分大小写

一.查询语句
1.查询所有数据
select * from 表名
例如: select * from student/SELECT * FROM student

2.查询所有数据, 只显示某些字段
select 字段1, 字段2, ..., 字段n from 表名
例如: select name, gender from student  

3.根据某个条件进行查找
select * from 表名 where 字段 = 值
例如: select * from student where gender = '女'

4.根据多个条件进行查找
select * from 表名 where 字段1 = 值1 and 字段2 = 值2
例如: select * from student where name = ‘you’ and age = 2

5.根据范围进行查找
select * from 表名 where 字段 > 值
例如: select * from student where age >= 18

select * from 表名 where 字段 between 值1 and 值2
例如: select * from student where age between 24 and 25

6.反向查找
select * from 表名 where 字段 not between 值1 and 值2
例如: select * from student where age not between 24 and 25

7.根据多个条件中的某个条件, 进行查找
select * from student where 字段1 = 值1 or 字段2 = 值2
例如: select * from student where name = ‘hou’ or age = 18

8.模糊查询, 以什么开头
select * from student where 字段 like 值%
例如: select * from student where name like '张%'

9.模糊查询, 以什么结尾
select * from student where 字段 like %值
例如: select * from student where name like '%张'

10.模糊查询, 包含某个内容
select * from student where 字段 like %值%
例如: select * from student where name like '%张%'

11.不重复查找
select distinct 字段 from 表名
例如: select distinct gender from student

12.限制查询的条数
select * from 表名 limit 条数
例如: select * from student limit 2

13.对查询的结果进行排序
升序: select * from 表名 order by 字段 asc
降序: select * from 表名 order by 字段 desc
例如: select * from student order by age asc

二: 插入语句
insert into 表名 (字段1, 字段2, ..., 字段n) values (值1, 值2, ..., 值3)
例如: insert into student (name, gender, age) values (‘keke’, '女', 38)

三: 修改语句
update 表名 set 字段1 = 值1, ..., 字段n = 值n where 主键 = 值
例如: update student set name = '经纪人' where id = 6

四.删除语句
delete from 表名 where 主键 = 值
例如: delete from student where id = 6

五.新建表
create table 表名(字段1 类型1, ..., 字段n 类型n)
例如: create table if not exists cat(id int primary key auto_increment, nickname text)

六.删除表
drop table 表名
例如: drop table cat
	 */
	
	
	//1. 创建表
//	create table 表名(字段1 类型1, ..., 字段n 类型n)
//例如: create table if not exists cat(id int primary key auto_increment, nickname text)

function creareTable (){
//	1.链接数据库 new mysqli(数据库地址，"用户名"，'密码'，"数据库名","端口号") 该方法连接数据库并得到一个 mysqli对象 对数据的所有操作都由该对象负责；
$mysqli = new mysqli("localhost","root","","xiaoxinSJK");
//判断链接是否成功 
if($mysqli->connect_error){
	//链接失败；
	exit("数据库链接失败");                   
} else{
	//链接成功；
	myPrint("链接成功");
}
 //2.设置编码格式
 $mysqli->set_charset("utf8");
 
 //书写sql语句
 
 $sql = "create table if not exists user(id int primary key auto_increment,username text,password text)";
 //执行对应的sql语句 返回值 1 或者 0 ；
  $res = $mysqli->query($sql);
 if($res){
 	myPrint("创建表成功");
 }else{
 	myPrint("创建表失败");
 }
 //4. 关闭数据库
 $mysqli->close();
 
 
}
creareTable ();	


//插入函数
 function insertInfo($name,$age,$sex,$num,$school){
// 	insert into student (name, gender, age) values (‘keke’, '女', 38)
  $xiaoxin1 = new mysqli("localhost","root","","xiaoxinSJK");
	if($xiaoxin1->connect_error){
	//链接失败；
	exit("数据库链接失败");
	                   
} else{
	//链接成功；
	myPrint("链接成功1");
};
//编码格式
$xiaoxin1->set_charset("utf8");
//书写语句
$sql = "insert into cat (name,age,sex,num,school) values ('{$name}',{$age},'{$sex}','{$num}','{$school}') ";
//执行sql语句
  $res = $xiaoxin1->query($sql);
  if($res){
 	myPrint("插入成功");
 }else{
 	myPrint("插入失败");
 }
 $xiaoxin1->close();

 }

//insertInfo("帅黄",22,"男","000","清华大学")
//查询语句

function select(){
	//链接数据库、
	$xiaoxin = new mysqli("localhost","root","","xiaoxinSJK");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
		myPrint("链接成功");
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "SELECT * FROM cat";
	
	$res = $xiaoxin->query($sql);
	
	$arr = mysqli_fetch_all($res,MYSQLI_ASSOC);
	
//	print_r($arr);
	$jsonArr = json_encode($arr);
	print_r($jsonArr);
	
	//关闭数据库
	$xiaoxin->close();
	//后台要发生数据传递，在拿到数据之后一般不会直接进行传输，会先把数据转化成通用的数据格式，在进行传输。
	//目前最常用的两种通用的数据格式是  ：json 和 xml
	//php里原始数据类型转成 ： 
//	原始数据类型————》json  方法是 json_encode(原始数据类型);
//  json-——>原始数据类型    方法 json_decode(json)
	
	//select name, gender from student
	
}
//select();

//删除数据
  function deleteInfo($id){
  	 //链接数据库、
	$xiaoxin = new mysqli("localhost","root","","xiaoxinSJK");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
		myPrint("链接成功");
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "delete from cat where id = {$id}";
	
	$res = $xiaoxin->query($sql);
	

if($res){
 	myPrint("删除成功");
 }else{
 	myPrint("删除失败");
 }
	
	//关闭数据库
	$xiaoxin->close();
	 
  }
  
//deleteInfo(1);


//修改数据
  function updateInfo(){
  	 //链接数据库、
	$xiaoxin = new mysqli("localhost","root","","xiaoxinSJK");
	if($xiaoxin->connect_error){
		exit("000");
	}else{
		myPrint("链接成功");
	}
	//设置编码格式
	$xiaoxin->set_charset("utf8");
	
	//执行sql语句 查询到的结果存放在$res 变量里，我们需要从中提取结果数组
	
	$sql = "update cat set name = '帅黄1111' where id = 2";
	
	$res = $xiaoxin->query($sql);
	

if($res){
 	myPrint("删除成功");
 }else{
 	myPrint("删除失败");
 }
	
	//关闭数据库
	$xiaoxin->close();
	 
  }

//updateInfo();







?>