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

//在函数代码中，使用特殊对象 arguments，开发者无需明确指出参数名，就能访问它们。
//例如，在函数 sayHi() 中，第一个参数是 message。用 arguments[0] 也可以访问这个值，即第一个参数的值（第一个参数位于位置 0，第二个参数位于位置 1，依此类推）。
/*function sayHi() {
    if (arguments[0] == "bye") {
        return;
    }
    alert(arguments[0]);
}
还可以用 arguments 对象检测函数的参数个数，引用属性 arguments.length 即可。*/

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

