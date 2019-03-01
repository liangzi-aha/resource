<?php
	include_once 'tool.php';
	/*
	 * php04_file
	 * 文件管理的作用
	 * 创建文件 复制文件 读取文件内容 向文件中写内容
	 * 
	 */
	
	/*
	 * 1.判断文件是否存在
	 * file_exists(文件路径)
	 * 返回值:true 或者 false
	 */
	$filename = "file/书.txt";
	if(file_exists($filename)){
		myPrint("文件存在");
	}else{
		myPrint("文件不存在");
	}
	
	/*
	 * 2.获取文件大小
	 * filesize(文件大小)
	 * 返回值:文件的字节数
	 */
	myPrint(filesize($filename));
	
	/*
	 * 3.文件复制
	 * copy("被复制的文件路径","新文件的路径");
	 * 返回值: true 或者 false
	 */
	$desPath = "newBook.txt";
	if(copy($filename,$desPath)){
		myPrint("拷贝成功");
	}else{
		myPrint("拷贝失败");
	}
	
	/*
	 * 4.重命名文件
	 * rename("老名字","新名字");
	 * 返回值:true 或者 false
	 */
	if(rename("file/text.txt","file/书.txt")){
		myPrint("重命名成功");
	}else{
		myPrint("重命名失败");
	}
	
	/*
	 * 5.删除文件
	 * unlink("要删除的文件路径");
	 */
	if(unlink("newBook.txt")){
		myPrint("删除成功");
	}else{
		myPrint("删除失败");
	}
	
	/*
	 * 打开文件
	 * fopen("文件路径","文件打开的方式");
	 * 对文件内容做任何操作都要先打开文件
	 * 文件的打开方式:
	 * r:只读,句柄(handle)在开头位置
	 * r+:读写,句柄(handle)在开头位置
	 * w:只读,句柄(handle)在开头位置,会覆盖原来的内容,如果文件不存在,系统会自动创建一个
	 * w+:读写,句柄(handle)在开头位置,会覆盖原来的内容,如果文件不存在,系统会自动创建一个
	 * a:只读,句柄(handle)在尾部,写的内容会往后拼接,如果文件不存在,系统会自动创建一个
	 * a+:读写,句柄(handle)在尾部,写的内容会往后拼接,如果文件不存在,系统会自动创建一个
	 * r和r+要求文件需要实现存在.
	 */
	
	//fopen("文件路径","文件打开的方式");
	$filename = "file/书.txt";
	$handle = fopen($filename,"r+");
	
	//读取文件里的内容
	//1.fread(句柄对象,要读取的字节长度);
	$content = fread($handle,filesize($filename));
	myPrint($content);
	
	//2.file_get_content(文件路径);
	$fContent = file_get_contents($filename);
	myPrint($fContent);
	
	//php里,文件写入有哪些方法???
?>