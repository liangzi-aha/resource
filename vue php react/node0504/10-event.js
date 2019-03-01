//events  事件模块
//又称,观察者模式,类似于JS中的绑定
//又称,发布订阅模式,类似JS中的监听
var events = require('events');

var util = require('util');

function Girl(name,res){
    this.name = name;
    this.res = res;
}

function Boy(name){
    this.name = name;
}

//使boy继承events的所有方法  inherits:继承
util.inherits(Boy,events);

//实例化一个boy
var baoyu = new Boy('贾宝玉');


//实例化两个girl
var daiyu = new Girl('林黛玉',function(){
    console.log('回归离恨天,泪洒相思地');
});

var baochai = new Girl('薛宝钗',function () {
    console.log('对镜贴花黄');
})

//设置最大监听数,要在事件监听之前,设置的是绑定某一个事件的最大数量,不是设置最大事件数量,而是设置某一个事件的最大响应数
baoyu.setMaxListeners(5);


//设置宝玉结婚🎎事件,on()方法监听事件:第一个参数是事件名,第二个参数是执行这个事件名的函数.
//addListener():添加监听事件和on()事件 效果一样  参数一样
// 如果事件执行了,则执行相对应的方法
baoyu.on('marry',daiyu.res);
baoyu.addListener('marry',baochai.res);
baoyu.on('marry',function(){
    console.log('赤条条来去无牵挂');
})
//once():监听事件只执行一次;
baoyu.once('chujia',function(){
    console.log('满纸荒唐言,一把辛酸泪');
})

//删除绑定事件,在事件绑定之后和事件执行之前,设置事件移除
baoyu.removeListener('marry',daiyu.res); //移除一个事件

//移除所有的marry事件
baoyu.removeAllListeners('marry');

//移除所有事件
baoyu.removeAllListeners();

//执行宝玉结婚事件
baoyu.emit('marry');
baoyu.emit('chujia');

baoyu.emit('marry');
baoyu.emit('chujia');