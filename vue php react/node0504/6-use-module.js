var mo = require('./mymodule');

console.log(mo.ss);

mo.bb();
mo.cc('早上不吃早餐');
console.log(mo.sum(1,1,6,13,6,31));
//如果要把自定义模块放在文件夹里面,默认执行的是该文件夹里面的index.js,如果不想使之执行index.js,则需要配置文件夹内容