// express 也支持模板引擎
// ejs 模块引擎需要安装
var express = require('express');
var app = new express();

//设置模板引擎
app.set('view engine','ejs');
//设置模板引擎的位置
app.set('views',__dirname);

app.get('/',function(req,res){
    res.send('请输入ejs接口,访问模板');
});

//params 以路径拼接的方法 用params的方法获取
app.get('/ejs/:name/:age/:job',function(req,res){
    //使用render方法渲染模板
    //render方法两个参数,第一个参数为要渲染到哪一个模板,第二个参数为往模板里面注入数据的集合
    res.render('template',{
        name:req.params.name,
        age:req.params.age,
        job:req.params.job,
    });
});

app.listen(8080);
console.log('服务启动成功');
