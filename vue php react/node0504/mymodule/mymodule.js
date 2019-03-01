/**
 * Created by lanouhn on 18/8/13.
 */
//node模块,分为原生模块和文件模块
//原生模块:是指nodejs官方定义的模块
//文件模块:是指开发者自定义的模块
var str = '莫愁前路无知己';

function say() {
    console.log('大黄汪汪汪');
}

function lang(str) {
    console.log(str+'自挂东南枝');
}

function sum() {
    var sum = 0;
    for(var i=0;i<arguments.length;i++){
        sum+=arguments[i];
    }
    return sum;
}
//导出模块
module.exports = {
    ss:str,
    bb:say,
    cc:lang,//虽然传参,但是在设置的时候还是可以不用写任何的形式
    sum //如果键名和键值相同的话,可以简写一个即可,sum:sum 可以简写为 sum,

};

//如果要把自定义模块放在文件夹里面,默认执行的是该文件夹里面的index.js,如果不想使之执行index.js,则需要配置文件夹内容


//一般,如果创建文件模块,当引用该模块的时候,他会查找声明该模块的位置,如果当前目录里面没有改模块,则会node_modules文件夹里面去查询该模块.如果在node_modules里面也无法找到,则该模块没有安装或者创建

//安装模块 一般使用npm 指令安装模块
//安装模块指令 npm listall 模块名
//(如果全局安装,在后面添加 -g)
//卸载模块指令 npm uninstall 模块名

//npm 包管理工具,还可以理解为模块管理工具

//sudo 可以理解为权限,是管理员安装

//REPL
// repl (交互式解释器)
// r:read 读取
// e:eval 执行
// p:print 打印
// l:loop 循环