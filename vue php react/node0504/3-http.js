/**
 * Created by lanouhn on 18/8/13.
 */
var http = require('http');
var server = http.createServer(function(req,res){
    res.setHeader('content-type','text/html;charset=utf-8');
    if(req.url=='/'){
        res.end('您访问的是根目录');
    }else if(req.url=='/index.html'){
        var html = '<link rel="stylesheet" href="aa.css"><h1>大黄</h1>';
        res.end(html);
    }else if(req.url=='/aa.css'){
        res.setHeader('content-type','text/html;charset=utf-8');
        var css = 'h1{color:#0f0;}';
        res.end(css);
    }else{
        res.end('404,非礼勿视哦');
    }
});
server.listen(8080);
console.log('服务器启动成功');