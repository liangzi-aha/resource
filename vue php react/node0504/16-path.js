//path 模块,处理文件路径的模块
var path = require('path');

//格式化文件路径
var p1 = './aa/../ss../sadf/';
var str1 = path.normalize(p1);
console.log(str1);

//文件路径的拼接  将多个参数组合成一个 path路径的样子
var str2 = path.join('/a','/b','/c','/d');
console.log(str2);

//返回当前路径的绝对路径 __dirname
console.log(__dirname);

var str3 = path.join(__dirname+'/userinfo,html');

//判断是否是绝对路径
var bol1 = path.isAbsolute(str3);
console.log(bol1);

//把相对路径拼接成绝对路径,默认根目录为起点
var str4 = path.resolve('../aa','bb');
console.log(str4);

//获取绝对路径a 到 绝对路径b 的绝对路径
var str5 = path.relative(str3,str4)
console.log(str5);

//获取当前文件所在的目录
var str6 = path.dirname('./userinfo.html');
console.log(str6);

//获取路径的最后一部分内容
var str7 = path.basename('./aa/bb/cc/dd/userinfo.html');
console.log(str7);

//获取文件的文件名
var str8 = path.basename('./aa/bb/cc/dd/userinfo.html','.html');//如果写第二个参数,文件名后缀名,那么返回的就是单纯的文件名
console.log(str8);

//获取文件的后缀名
var str9 = path.extname('./aa/bb/cc/dd/userinfo.html');
console.log(str9);

//解析路径  (把字符串解析为对象)
var obj1 = path.parse('./aa/bb/cc/dd/userinfo.html');
console.log(obj1);

//对象转字符串
var str10 = path.format(obj1);
console.log(str10);
