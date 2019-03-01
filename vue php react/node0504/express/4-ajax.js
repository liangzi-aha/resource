var express = require('express');
var app = new express();

var bodyParser = require('body-parser');
// json解析
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:false}));


app.get('/',function(req,res){
    res.send('您可以输入ajax.html来进行操作');
});


//get请求
app.get('/get',function(req,res){
    var name = req.query.name;
    var job = req.query.job;

    res.send('你好'+name+',你的工作是'+job);
});

//post请求
app.post('/post',function(req,res){
    var name = req.body.name;
    var job = req.body.job;

    res.send('你好'+name+',你的工作是'+job);
});

app.get('*',function(req,res){
    res.sendFile(__dirname+req.path);
});

app.listen(8080);
console.log('服务启动成功');