//querystring 专门处理
//application/x-www-form-urlencoded  格式的数据
//格式的数据,格式行为:a=b&c=d&n=m
var querystring = require('querystring');

//解析数据  parse()所有的键值解析成一个数组
var str = 'a=b&c=d&n=m';
var obj = querystring.parse(str);
console.log(obj);

//如果键名相同,那么会把所有的键值解析成一个数组
var str1 = 'a=b&c=d&n=m&n=s&n=u&n=y';
var obj1 = querystring.parse(str1);
console.log(obj1);

//解析数据  stringify()所有的数组解析成键值对
var obj2 = {
    name:'curry',
    age:33,
    job:'ball'
};

var str2 = querystring.stringify(obj2);
console.log(str2);



var obj3 = {
    name:'curry',
    age:33,
    job:'ball',
    love:['girl','man','boy']
};

var str3 = querystring.stringify(obj3);
console.log(str3);


//自己设置分割符和连接符,第二个参数是分隔符,分割每一个键值对,第二个是某一个键值对的连接符
var obj3 = {
    name:'curry',
    age:33,
    job:'ball',
    love:['girl','man','boy']
};

var str4 = querystring.stringify(obj3,'%','#');
console.log(str4);