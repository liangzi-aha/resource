//util 引入工具模块
var util = require('util');

// 1.继承
// 2.验证类型
// 3.输出对象

function Zyz(name,age){
    this.name = name;
    this.age = age;
    this.so = function(){
        console.log('皇帝很累');
    }
}

Zyz.prototype.aa = function(){
    console.log(this.name);
}

function Zd(name,age,job){
    //等于把Zyz函数写在Zd里  call:调用
    Zyz.call(this);
    this.name = name;
    this.age = age;
    this.job = job;
}

//直接执行util的继承方法
util.inherits(Zd,Zyz);

var zd = new Zd('朱棣',70,'日理万机');
zd.aa();
zd.so();
//util只能继承原型上的方法,不能继承函数体内的方法