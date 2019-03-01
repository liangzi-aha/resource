<?php
	/*
	 * php03_循环结构
	 */
	for($i = 0; $i < 5;$i++ ){
		echo $i." ";
	}
	$a = 0;
	while ($a < 10){
		echo $a." ";
		$a++;
	}
	
	//php里的快速遍历 foreach
	$arr1 = array(1,2,3,4,5);
	$arr2 = array("name"=>"张三","age"=>20);
	
	echo "<br>";
	//遍历时既获取下标(key),又获取值(value)
	foreach($arr1 as $i=>$v){
		echo "下标是:{$i},值是:{$v}<br>";
	}
	
	echo "<br>";
	//遍历时既获取下标(key),又获取值(value)
	foreach($arr2 as $i=>$v){
		echo "key是:{$i},value是:{$v}<br>";
	}
	
	//遍历时只获取值(value)
	foreach($arr1 as $v){
		echo $v." ";
	}
?>