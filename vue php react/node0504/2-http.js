/**
 * Created by lanouhn on 18/8/13.
 */
//引入一个httP模块
var http = require('http');
//创建服务器 服务器地址为127.0.0.1 也是本地地址
var server = http.createServer(function(req,res){
    res.setHeader('content-type','text/html;charset=utf-8')

    //添加req的内容
    // console.log(req);
    console.log(req.url);

    if(req.url=='/'){
        res.end('您访问的是根目录');
    }else if(req.url=='/index.html'){
        res.end('离天三尺三');
    }else{
        res.end('404,非礼勿视哦');
    }


});

server.listen(8080);
console.log('服务启动成功');