//引入文件模块
var fs = require('fs');

//读取文件,使用readFile方法,该方法有三个参数,第一个参数为要读取的文件路径,第二个是文件的格式,也可以不写,第三个参数为回调函数,回调函数有两个参数,第一个参数为错误信息,第二个参数为读取内容.
fs.readFile('./aa.txt','utf-8',function (err, doc) {
    if (err){
        //console.error打印出来的是红色的字体.
        console.error('读取未遂')
    } else{
        console.log(doc);
    }
});

//同步操作

var doc = fs.readFileSync('./aa.txt','utf-8');
console.log(doc+'111');


