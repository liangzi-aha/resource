var formidable = require('formidable');
//formidable 用于获取表单上的数据,或者是上传的文件
//安装 npm install formidable
var http = require('http');
var fs = require('fs');
var url = require('url');

var server = http.createServer(function(req,res){
    res.setHeader('Content-type','text/html;charset=utf-8');
    var urlobj = url.parse(req.url,true);
    if (urlobj.pathname == '/'){
        fs.readFile('./userinfo.html','utf-8',function(err,data){
            if (err){
                console.log('读取未遂')
            } else{
                res.end(data);
            }
        });
    }else if(urlobj.pathname == '/post'){
        //用户点击的提交按钮
        var form = new formidable.IncomingForm();
        form.parse(req,function (err, fields, files) {
            //parse 两个参数,第一个参数为req是前台传过来的信息 第二个参数为回调函数,回调函数有三个参数,第一个参数为错误信息,第二个参数为前台传过来的文字信息,第三个参数为前台传过来的文件信息
            if(err){
                console.log('上传失败');
            }else{
                console.log(fields);

                //临时存储路径，files.pic.path
                console.log(files.pic.path);
                //上传的文件的文件名
                console.log(files.pic.name);
                //判断是否存在image文件夹
                fs.exists('./image',function(bol){
                    if(!bol){
                        fs.mkdir('./image',"0777",function(err){
                            if(err){
                                console.log('创建未遂');
                            }else{
                                console.log('创建成功');
                            }
                        });
                    }
                });

                var rs = fs.createReadStream(files.pic.path);
                var ws = fs.createWriteStream('./image/'+files.pic.name);

                rs.pipe(ws);

                //用户传过来的用户名
                res.end(fields.username);
            }

        });

    }
});

server.listen(8080);
console.log('服务启动成功');