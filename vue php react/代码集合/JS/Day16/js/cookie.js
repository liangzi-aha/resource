//判断当前cookie里是否有对应的key(有参:key ,有返: true或者false)    //key 键
function hasKey(Key) {
	var arr1 = document.cookie.split("; ");
	for(var i = 0; i < arr1.length; i++) {
		var arr2 = arr1[i].split("=");
		if(arr2[0] == Key) {
			return true;
		}
	}
	return false;
}

//查找cookie(有参:key ,有返:key对应的value)
function getValueByKey(key) {
	var arr1 = document.cookie.split("; ");
	for(var i = 0; i < arr1.length; i++) {
		var arr2 = arr1[i].split("=");
		if(arr2[0] == Key) {
			return arr2[1];
		}
	}
}

//添加cookie 有参(key ,value , time),无返
function addCookie(key, value, time) {
	if(typeof time == "number") {
		//数字类型 max-age
		document.cookie = key + "=" + value + ";max-age =" + time;
	} else if(typeof time == "string") {
		//字符串类型 expires
		document.cookie = key + "=" + value + ";expires" + time;
	} else {
		//对象类型 先toString 再expires
		document.cookie = key + "=" + value + ";expires" + time.toString();
	}
}

//删除cookie (有参: key,无返)
function deleteCookie(key) {
	document.cookie = key + "=;max-age=-1";
}