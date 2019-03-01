// 操作MongoDB数据库,使用mongoose模块
// mongoose,需要下载, 在terminal:['tɜːmɪn(ə)l]终端里  sudo npm install mongoose
// mongoose 是基于node-Mongodb-native开发的mongdb的nodejs驱动

var mongoose = require('mongoose');

//链接mongodb ,如果不写数据库名,则默认链接test数据库
mongoose.connect('mongodb://127.0.0.1:27017/aabb');

mongoose.connection.on('open',function(){
    console.log('数据库链接成功');
});
//connect 连接 connection 连接
mongoose.connection.on('error',function(){
    if (err){
        console.log('数据库链接未遂');
    }

});

//schema: 一种以文件形式存储的数据模型骨架
var aaSchema = new mongoose.Schema({
    name:{type:String},
    age:{type:Number,default:0}},{ //default:[dɪ'fɔlt] 默认的
    //collection:集  [kə'lekʃ(ə)n]
    collection:'kuname'
});

//model : 是由schema构造生成的数据模型
var Model = mongoose.model('kuname',aaSchema);

//================================================
var doc = new Model({
    name:'吕布',
    age:'23'
});

/*doc.save(function(err,doc){
    if(err){
        console.error('保存未遂');
    }else{
        console.log(doc);
    }
});*/

//可以直接创建
/*Model.create([{name:'郭嘉',age:'33'},{name:'张飞',age:'30'}],function(err,doc){
    if (err){
        console.log('添加错误');
    } else{
        console.log(doc);
    }
});*/


//跟新数据
/*Model.update({name:'张飞'},{$set:{name:'徐庶'}},{multi:true},function (err,doc) {
    if (err){
        console.error('更新未遂');
    } else{
        console.log(doc);
    }
});*/

//删除
/*Model.remove({name:'徐庶'},function(err){
    if (err){
        console.log(err);
    } else{
        console.log('删除成功');
    }
});*/

//整体查找  查找的结果是一个数组 {}为查找全部
/*Model.find({},function(err,doc){
    if (err){
        console.log('查找失败');
    } else{
        console.log(doc);
    }
});*/

//查找单条

/*
Model.findOne({},function(err,doc){
    if (err){
        console.log('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});

Model.find({name:'郭嘉'},function(err,doc){
    if (err){
        console.log('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});
*/

//根据ID查找
/*Model.findById("5b752a8cbf73ad0484966ad5",function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/

//查询大于  $gt
/*Model.find({age:{$gt:30}},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/

//查询小于  $lt
/*Model.find({age:{$lt:30}},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/


//查询不等于  $ne
/*Model.find({age:{$ne:30}},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/

//或者  $or
/*
Model.find({$or:[{age:33},{name:'吕布'}]},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});
*/

//限制返回条数
/*Model.find({},null,{limit:2},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/

//跳过条数
/*Model.find({},null,{skip:1},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/

/*var hero = [
    {name:'诸葛亮',age:'34'},
    {name:'马超',age:'24'},
    {name:'周瑜',age:'18'},
    {name:'黄天华',age:'19'},
    {name:'周杰伦',age:'30'},
    {name:'黄飞虎',age:'55'}
];

Model.create(hero,function(err,doc){
    if (err){
        console.error('添加失败');
    } else{
        console.log('=========================');
        console.log(doc);
    };
});*/


//skip跳过几条  limit查询第几条 混用
/*Model.find({},null,{skip:2,limit:2},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});*/

//排序 sort 指定排序规则,1 为升序,-1 位降序
Model.find({},null,{sort:{age:-1}},function(err,doc){
    if (err){
        console.error('查找失败');
    } else{
        console.log('=========================');
        console.log(doc);
    }
});





