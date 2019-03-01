var util = require('util');

function So(){
    this.name = '杜十娘';
    this.age = 23;
}

var du = new So();


//验证类型
var bol = util.isObject(du);
console.log(bol);

//inspect 输出对象,输出的是一个字符串形式
var obj = util.inspect(du);
console.log(obj);

var num = 34;
if(util.isNumber(num)){
    console.log("是数字");
}else{
    console.log('不是数字');
}