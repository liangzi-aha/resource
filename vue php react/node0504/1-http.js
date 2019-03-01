/**
 * Created by lanouhn on 18/8/13.
 */
//创建一个http服务
// 引入http模块,nodejs实际上是模块操作,nodejs官方给出的一些模块,可以直接引用,引入模块使用require方法直接引用模块
var http = require('http');
// 创建服务器,使用httP模块的createServer方法
var Server = http.createServer(function(req,res){
    //req:request 指的是前台传过来的信息 (请求)
    //res:resPonse 指的是后台传给前台的信息 (响应)

    //设置编码格式为utf-8
    res.setHeader('content-type','text/html;charset=utf-8');
    //write方法输出内容也是在浏览器上显示后台发送的内容
    res.write('神龟虽寿');
    //end 方法和write一致 不同的是end方法只能坐位最后的输出并且end方法的参数只能是字符串 如果在end方法后面写代码则报错
    res.end('落霞与孤鹜齐飞');
    // res.write('穷且益坚');
});

//创建连接端口
Server.listen(8080);
console.log('服务器启动成功');
