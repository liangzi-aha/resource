var express = require('express');
var app = new express();
var formidable = require('formidable');
var fs = require('fs');
var bodyparser = require('body-parser');

// app.use(bodyparser.json());
// app.use(bodyparser.urlencoded({extended:false}));



app.post('/post',function (req,res) {
    // console.log(req.body)

    var form = new formidable.IncomingForm();
    form.parse(req,function (err,fields,files) {
        if(err){
            console.log("404")
        }else{
            console.log("链接成功11")
            fs.exists("./img",function (bol) {
                if(!bol){
                    fs.mkdir("./img",'0777',function (err) {
                        if(err){
                            console.log('创建失败')
                        }else{
                            console.log("创建成功")
                        }
                    })
                }
            });

            var rs = fs.createReadStream(files.pic.path);

            var ws = fs.createWriteStream("./img/"+files.pic.name);

            rs.pipe(ws);
            console.log(fields);
            //临时存储路径
            console.log(files.pic.path);
            //文件名
            console.log(files.pic.name);
            fs.writeFile('./xinxi.txt',fields.name+"="+fields.password+";",{flag:'a'},function (err) {
                if(err){
                    console.log('写入未遂');
                }else{
                    console.log('写入成功');
                }
            })

            var html = '<p>'+ fields.name+"="+fields.password+'</p><img src="'+"./img/"+files.pic.name+'">'

            res.send(html);

        }




    })


})

app.get('/',function (req,res) {
    res.send('请访问/post.html注册');
})
app.get('*',function (req,res) {
    res.sendFile(__dirname+req.path);

})

// app.get('*',function (req,res) {
//     console.log(req.path);
//     res.sendFile(__dirname + req.path);
// })
app.listen(8080);
console.log('服务器启动成功');