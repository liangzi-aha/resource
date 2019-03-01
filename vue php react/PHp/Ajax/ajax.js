//Ajax({
//	type:请求类型,
//	url:请求接口,
//	data:提交的数据,
//},callback:回调函数,处理返回的数据)

function Ajax(obj, callback) {
	//获取用户设置的请求方式
	var type = obj.type?obj.type:'GET';
	var Type = type.toUpperCase();

	//获取接口
	var url = obj.url;

	//获取数据
	var data = obj.data;

	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {
		if(this.readyState == 4) {
			if(this.status == 200 || this.status == 304) {
				//把返回成功的数据,传给回调函数.
				callback(this.responseText);
			}
		}
	}
	
	//转化数据
	var arr = [];
	for(var a in data){
		arr.push(a+'='+data[a]);
	}
	//split 它是把字符串转化为数组
	//join 是把数组转化为字符串
	var data = arr.join('&');
	//判断请求方式
	if(Type=='GET') {
		xhr.open('GET',url+'?'+data);
		xhr.send();
	} else {
		xhr.open('POST','url');
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.send(data);
	}
	
	
}