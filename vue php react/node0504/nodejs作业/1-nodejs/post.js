var fs = require('fs');
var express = require("express");
var app = new express();
var http = require('http');
var bodyParser = require('body-parser');
// json解析
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:false}));

app.get('/',function(req,res){
    res.send('您可以输入ajax.html来进行操作');
});

var rs = fs.createReadStream('/Users/lanouhn/Desktop/天行九歌1.jpg');

var ws = fs.createWriteStream('1.jpg');

rs.on('data',function(chunk){
    ws.write(chunk,function(){
        console.log('写入成功');
    });
});

app.post('/post',function(req,res){
    var name = req.body.name;
    var password = req.body.password;

    res.send('用户名'+name+',密码是'+password);
});

app.get('*',function(req,res){
    res.sendFile(__dirname+req.path);
});

app.listen(8080);
console.log('服务启动成功');
