<?php
	/*
	 * php05_函数
	 */
	//php里的函数名不区分大小写
	function sayHi(){
		echo "hello!";
	}
	SayHi();
	
	//函数在使用过程中,形参与实参个数保持一致
	function f1($a,$b){
		echo $a."-----".$b;
	}
	f1(10,20);
	
	
	function f2($num,$arr){
		$num = 10;
		$arr[0] = 100;
		echo "<br>";
		echo "------以下是函数内的值------";
		echo $num;
		echo "<br>";
		print_r($arr);
	}
	
	$number = 1;
	$array = array(1,2,3);
	f2($number,$array);
	echo "<br>";
	echo "------以下是函数外的值------";
	echo $number;
	echo "<br>";
	print_r($array);
	
	
	//址传递&.在赋值的时候给变量加&是址传递;
	$a = 10;
	$b = 20;
	function change(&$a,&$b){
		$c = $a;
		$a = $b;
		$b = $c;
	}
	change($a,$b);
	echo $a."----".$b;
	//循环嵌套
	/*
	 * php里如果出现函数嵌套.里面的函数不是私有的,外部是可以访问的,但是需要先调用外部的函数,之后内部函数才可以被调用.
	 */
	function fun1(){
		echo "<br>";
		echo "这是外部函数f1";
		function fun2(){
			echo "<br>";
			echo "这是外部函数f2";
		}
	}
	fun1();
	fun2();
	
	//在函数内部,如果要访问全局变量,需要先用global关键字修饰全局变量,在进行访问;或者从超全局变量$GLIBALS数组里获取.
	$n1 = 10;
	function a(){
		$n2 = 20;
		global $n1;
		echo "<br>";
		echo $n1,$n2;
		echo $GLOBALS["n1"];
	}
	a();
?>