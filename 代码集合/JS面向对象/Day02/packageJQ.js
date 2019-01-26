//$方法
function $(arg) {
    return new CreateJq(arg);
}

//模拟创建jq对象的构造函数
function CreateJq(arg) {
    //声明一个属性, 该属性是一个数组, 存储找到的dom元素
    this.elements = [];
    //判断参数的数据类型, 决定下面的操作(是找元素还是直接放进数组)
    if(typeof arg == "string") {
        //先找元素, 再将元素放进数组
        //  	   this.elements = document.querySelectorAll(arg);
        this.elements = getElements(arg);
    } else {
        //直接将元素放进数组
        this.elements.push(arg);
    }
}

//定义查找元素的方法
function getElements(arg) {
    //"#div1 p span";
    //整理字符串
    arg = deleteSpace(arg);
    //将字符串按照空格进行分割得到每一个选择器
    var selectors = arg.split(" ");

    //声明一个数组存放每次查找时的父级元素
    var parents = [document];

    //声明一个数组存放每趟找到的子级元素
    var childs = [];
    for(var i = 0; i < selectors.length; i++) {
        //依次取出一个选择器
        var selector = selectors[i];
        for(var j = 0; j < parents.length; j++) {
            //依次取出每一个父级元素
            var parent = parents[j];
            //声明一个数组存储每一次找到的子元素
            var eleArr = [];
            //判断选择器的类型
            if(/^#/.test(selector)) {
                selector = selector.substr(1);
                eleArr.push(document.getElementById(selector));
            } else if(/^\./.test(selector)) {
                selector = selector.substr(1);
                eleArr = parent.getElementsByClassName(selector);
            } else {
                eleArr = parent.getElementsByTagName(selector);
            }
            //每循环完一次, 将本次找到的元素合并进child数组里.
            for(var k = 0; k < eleArr.length; k++) {
                childs.push(eleArr[k]);
            }
        }
        //将child里的元素全部放进parents里, 并清空child数组
        parents = [];
        for(var m = 0; m < childs.length; m++) {
            parents.push(childs[m]);
        }
        childs = [];
    }
    //将最终找到的数组返回
    return parents;
}

//删除空格的函数
function deleteSpace(arg) {
    //去除两端的空格
    var reg1 = /^\s+|\s+$/g;
    arg = arg.replace(reg1, "");
    //去除中间多余的空格
    var reg2 = /\s+/g;
    arg = arg.replace(reg2, " ");
    return arg;
}

//仿写jq 的css方法
CreateJq.prototype.css = function() {
    for(var i = 0; i < this.elements.length; i++) {
        //判断参数个数决定进一步的操作
        //js里, 每个函数里系统都会自动创建一个数组arguments, 该数组里存放了函数被调用时传入的所有实参.
        if(arguments.length == 1) {
            //参数个数1
            if(typeof arguments[0] == "string") {
                //获取样式
                return getStyle(this.elements[0], arguments[0]);
            } else {
                //设置样式
                for(var n in arguments[0]) {
                    setStyle(this.elements[i], n, arguments[0][n]);
                }
            }
        } else {
            //参数个数2, 设置样式
            setStyle(this.elements[i], arguments[0], arguments[1]);
        }
    }
}
//设置样式的函数
function setStyle(ele, styleName, styleValue) {
    ele.style[styleName] = styleValue;
}
//获取样式的函数
function getStyle(ele, styleName) {
    return getComputedStyle(ele)[styleName];
}

//仿写jq绑定事件的on方法
CreateJq.prototype.on = function(evenType, callback) {
    for(var i = 0; i < this.elements.length; i++) {
        this.elements[i].addEventListener(evenType, callback, false);
    }
}