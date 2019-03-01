/**
 * Created by lanouhn on 18/8/13.
 */
var http = require('http');
//引入 url 模块
var url = require("url");

var server = http.createServer(function(req,res){
    res.setHeader('content-type','text/html;charset=utf-8');

    //使用url模块格式化req.url   url.parse:将一个URL字符串转换成对象并返回
    /*url.parse(urlStr, [parseQueryString], [slashesDenoteHost]);
    接收参数：
    urlStr                                       url字符串
    parseQueryString                   为true时将使用查询模块分析查询字符串，默认为false
    slashesDenoteHost
    默认为false，//foo/bar 形式的字符串将被解释成 { pathname: ‘//foo/bar' }
    如果设置成true，//foo/bar 形式的字符串将被解释成  { host: ‘foo', pathname: ‘/bar' }
    Eg:*/
    var obj = url.parse(req.url,true);
    console.log(obj);
    res.end('春色满园关不住');
});
server.listen(8080);
console.log('服务启动成功');