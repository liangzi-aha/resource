var fs = require('fs');

/*
//创建目录
mkdir 是哪个参数 ,第一个参数为要创建的目录
第二个参数为,设置权限
第三个参数为回调函数
设置权限 mode 一共有四个数字,
第一个数字 0 代表二进制
第二个数字代表 本用户权限
第三个数字代表 组用户权限
第四个数字代表 所有用户权限

权限数据 1 代表 执行
        2 代表 写入
        4 代表 读取
*/

/*
fs.mkdir('./text','0777',function(err){
    if (err){
        console.log('创建失败');
    } else{
        console.log('创建成功');
    }
})*/

//查看文件详情
fs.stat('./text',function(err,stat){
    if (err){
        console.log(err);
    } else{
        console.log(stat);
    }
});

//判断文件是否存在
fs.exists('./mm',function (chunk) {
    console.log(chunk);
})
