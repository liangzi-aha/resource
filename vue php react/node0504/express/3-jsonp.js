var express = require('express');
var app = new express();

app.get('/jsonp',function(req,res){
   var name = req.query.name;
   var cb = req.query.cb;

   res.send(cb+'("'+name+'")');
});

app.listen(8080);
console.log('服务启动成功');