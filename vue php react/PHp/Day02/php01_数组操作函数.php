<?php
	/*
	 * php01_数组操作函数
	 */
	//1.获取数组长度  sizeof()  count()
	$arr = array(1,2,3,4,5);
	echo sizeof($arr)."------".count($arr);
	
	echo "<hr>";
	/*
	 * 2.range(min,max,step) 创建数组
	 * min : 取值的最小值
	 * max : 取值的最大值
	 * step : 每次取值的间隔
	 * 注意:max值不一定会反映到数组里
	 */
	$arr2 = range(0,20,5);
	print_r($arr2);
	
	/*
	 * 3.in_array(值,数组) 判断值是否在数组里出现过
	 * 返回值:true 或 false
	 */
	echo "<hr>";
	$arr1 = array(100,200,300,500);
	if(in_array(200,$arr1)){
		echo "存在";
	}else{
		echo "不存在";
	}
	
	/*
	 * 4.unset(值)  删除数组里的一个元素
	 * 删除之后不会引起下标的重新排列
	 */
	echo "<hr>";
	$arr3 = array(1,3,5,7,9);
	unset($arr3[2]);
	print_r($arr3);
	
	/*
	 * 5.以下两个方法都是删除数组里的元素,返回值都是被删除的元素,都会引起下标的重新排列.
	 * array_pop(数组)  删除数组尾部的元素
	 * array_shift(数组) 删除数组头部的元素
	 * 
	 */
	echo "<hr>";
	$arr4 = array(111,222,333,444,555);
	array_pop($arr4);
	print_r($arr4);
	echo "<br>";
	array_shift($arr4);
	print_r($arr4);
	
	/*
	 * 6.以下两个方法都是向数组里添加元素,返回值都是新数组的元数个数.可以一次添加多个元素.
	 * array_push(数组,值)  尾部添加
	 * array_unshift(数组,值)   头部添加
	 */
	echo "<hr>";
	$res1 = array_push($arr4,"abc");
	$res2 = array_unshift($arr4,"def");
	print_r($arr4);
	
	/*
	 * 7.array_splice() 向数组中添加  从数组中删除项目
	 * 参数:
	 * 1.要操作的数组
	 * 2.要是操作的位置
	 * 3.要删除的长度
	 * 4.以后,要添加的值
	 */
	echo "<hr>";
	$arr5 = array("a","b","c","d");
	array_splice($arr5,1,2,2000);
	print_r($arr5);
	
	/*
	 * 8.array_map(回调函数,数组) 遍历数组
	 */
	echo "<hr>";
    $arr6 = array("a", "b", "c", "d", "e", "f", "g");
    array_map(function($v){
       echo $v;
    }, $arr6);
	
	/*
	 * 9.array_filter(数组.回调函数)
	 */
	echo "<hr>";
	$arr7 = array(1,2,3,4,5,6,7,8,9,10);
	$newArr = array_filter($arr7,function($v){
		return $v % 2 == 0 ;
	});
	print_r($newArr);
	
	/*
	 * 10.array_search(值,数组) 查找值在数组里的位置,如果找的到,返回下标,找不到,返回false.
	 */
	echo "<hr>";
	$res = array_search(10,$arr7);
	echo $res;
	
	echo "<hr>";
	$arr8 = array("name" => "张三","age" => 20);
	$res8 = array_search(20,$arr8);
	echo $res8;
	
	/*
	 * 11.shuffle(数组)  数组洗牌
	 */
	echo "<hr>";
	$arr9 = array(1,2,3,4,5,6,7,8,9,10);
	shuffle($arr9);
	print_r($arr9);
	
	/*
	 * 12.array_unique(数组) 数组去重
	 */
	echo "<hr>";
	$arr10 = array(1,2,3,4,5,6,7,8,8,7,6,5);
	$uniqueArr = array_unique($arr10);
	print_r($uniqueArr);
	
	
	
?>