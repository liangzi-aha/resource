var express = require('express');
var app = new express();
var bodyParser = require('body-parser');

// json解析  Parser:解析器
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:false}));


//post 和 get不一样;req.query获取的是get请求的数据,获取不到post的参数,post请求需要body-parser模块,然后使用json的中间➖件进行操作
// 路径传值,要把传的数据放在url上,后台设置路由的时候,把变量名设置在路径上面,使用/:name/:age/:job 的形式设置变量,通过req.params获取用户传入的实际变量
app.get('/act/:name/:age/:obj',function(req,res){
    console.log(req.params);
    res.send(req.params.name+'恨不抗日死');
})

app.post('/post',function(req,res){
    //req.body  可以获取用户post提交的数据
    console.log(req.body)
    res.send('去年今日哭台湾');
})

app.get('*',function(){
    res.sendFile(__dirname+req.path);
});


app.listen(8080);
console.log('服务器启动成功');
