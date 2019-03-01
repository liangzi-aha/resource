<?php
	//输出值得方法
	function myPrint($v){
		if(is_array($v)){
			print_r($v);
			echo "<hr>";
		}else{
			echo $v."<hr>";
		}
	}
?>