/*
express nodejs框架
express 可以说是nodejs的模块集合,没有新的模块只是集成了原生模块
express 需要安装 npm install express

*/

var express = require('express');
var app = new express();

//路由
app.get('/',function(req,res){
    console.log(req)
    res.send('中华民族万岁');

});

//get请求,两个参数,第一个参数为用户的接口路径或者接口地址,第二参数为,对该路径设置的相关的响应操作,也可以理解为 开发人员设置路由
app.get('/index.html',function(req,res){
    //req:指的是前台传过来的信息 name:前台发送过来的url--get请求后面拼接的键值对name的键值
    console.log(req.query.name)
    res.send('世界人民大团结万岁');

});

/*app.get('/home.html',function(req,res){
    //req.path  指的就是get的第一个参数的全拼,即为用户输入的url请求接口地址,或者资源路径
    console.log(req.path);
    res.sendFile(__dirname+req.path);
})

app.get('/aa.css',function(req,res){
    res.sendFile(__dirname+req.path);
})*/


app.get('/act',function(req,res){
    res.send(req.query.name)
})


//*通配符,指代的是全部,如果req.path:请求路径 指的是什么,那么*就代表什么,通常*都设置在最后一个位置上
app.get('*',function(req,res){
    res.sendFile(__dirname+req.path);
})


app.listen(8080);
console.log('启动服务成功');