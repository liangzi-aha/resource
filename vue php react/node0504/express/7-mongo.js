var express = require('express');

var app = new express;

var mongoose = require('mongoose');

mongoose.connect('mongodb://127.0.0.1:27017/aabb');

mongoose.connection.on('open',function(){
    console.log('连接数据库成功');
});
mongoose.connection.on('error',function(err){
    if (err){
        console.log('链接数据库失败');
    }
});

var aaSchema = new mongoose.Schema({
    name: {type: String},
    age: {type: Number, default: 0}
},{
    collection:'kuname'
});

var Model = mongoose.model('kuname',aaSchema);

app.get('/',function(req,res){
    res.send('请输入mongo.html进行数据库操作');
})

//设置查询所有数据的方法
function getAllData(res){
    Model.find({},function(err,doc){
        if(err){
         console.error('查询出错')
        }else{
            res.send(doc);
        }
    });
}


//用户访问总数据
app.get('/getAll',function(req,res){
    getAllData(res);
});

//删除
app.get('/del',function(req,res){
    var id = req.query.id;
    Model.remove({_id:id},function(err){
        if(err){
            console.error('删除失败');
        }else{
            getAllData(res);
        }
    })
})

//添加
app.get('/add',function(req,res){
    var name = req.query.name;
    var age = req.query.age;
    Model.create({name:name,age:age},function(err){
        if (err){
            console.log('添加错误');
        } else{
            console.log('添加成功');
        }
    });
});

//修改
app.get('/amend',function(req,res){
    var name1 = req.query.name1;
    var name2 = req.query.name2;
    var age1 = req.query.age1;
    var age2 = req.query.age2;

    Model.find({name:name1},function(err,doc){
        if (err){
            console.log('查找失败');
        } else{
            console.log('查找成功');
            Model.update({name:doc[0].name},{$set:{name:name2},},{multi:true},function(err,doc) {
                if (err){
                        console.error('更新未遂');
                    } else{
                        getAllData(res);
                    }
                });
        }
    });


    Model.find({age:age1},function(err,doc){
        if (err){
            console.log('查找失败');
        } else{
            console.log('查找成功');
            Model.update({age:doc[0].age},{$set:{age:age2},},{multi:true},function(err,doc) {
                if (err){
                    console.error('更新未遂');
                } else{
                    getAllData(res);
                }
            });
        }
    });
})


app.get('*',function(req,res){
    res.sendFile(__dirname+req.path);
});
app.listen(8080);
console.log('服务启动成功');

