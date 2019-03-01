//中间件:控制流程是否执行
// 中间件 req和res都指向同一个信息
// 中间件如果没有停止,他将会永远传递
//中间件如果错,会交给错误处理中间件进行处理
// 关键字:use
var express=require("express")
var app=new express()
app.use(function (req,res,next) {
    //中央
    req.money=10000
    next()
})
app.use(function (req,res,next) {
    //省
    req.money-=5000
    next()
})
app.use(function (req,res,next) {
    //市
    req.money-=2000
    next()
})
app.use(function (req,res,next) {
    //县
    req.money-=1000
    next()
})
app.use(function (req,res,next) {
    //乡
    req.money-=500
    next()
})
//all停止中间件
app.all("*",function (req,res) {
    //发放
    res.send("中央发钱了,发了"+req.money+"元")
})
app.listen(8080)
console.log("服务器启动成功")