var fs = require('fs');

//修改参数
/*
writeFile 四个参数,
    第一个参数为,修改文件的路径,
    第二个参数为 修改的内容,
    第三个参数为 修改的规则
        flag:a 追加 接着往后写
        flag:w 覆盖 覆盖原先的内容
    第四个参数为 回调函数,有一个参数是错误信息, 如果修改错误则返回该信息
如果目录没有该路径,则先创建该路径,再加入内容
*/
fs.writeFile('./bb.txt','花谢花飞花满天',{flag:'a'},function(err){
    if(err){
        console.log('未遂');
    }else{
        console.log('写入成功');
    }
})

//读取a.txt的文本写入b.txt
fs.readFile('./aa.txt','utf-8',function (err, doc) {
    if (err){
        //console.error打印出来的是红色的字体.
        console.error('读取未遂')
    } else{
        fs.writeFile('./bb.txt',doc,{flag:'w'},function(err){
            if(err){
                console.log('未遂');
            }else{
                console.log('写入成功');
            }
        })
    }
});


//追加方法
fs.appendFile('./bb.txt','我不是归人',function(err){
    if(err){
        console.log('添加未遂');
    }else{
        console.log('添加成功');
    }
});