//stream 流: 专门处理比较大的数据

var fs = require('fs');

//创建一个可读流
var rs = fs.createReadStream('/Users/lanouhn/Desktop/李勇良作业/canvas03/video/HTML5的前世今生.mp4');

//创建一个可写流
var ws = fs.createWriteStream('./b.mp4');

//可读流绑定data事件,data事件是一个循环事件,他把可读流也就是需要复制的内容,分割成大约64kb的形式,逐块一一写入到可写流,本质上循环复制
var timmer = 0;
rs.on('data',function(chunk){
    timmer++;
    ws.write(chunk,function(){
        console.log('写入成功'+timmer);
    });
});
//流的终极操作
rs.pipe(ws);