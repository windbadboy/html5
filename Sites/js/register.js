window.onload = function () {
var faceimg = document.getElementById('faceimg');
var code = document.getElementById('code');
faceimg.onclick = function() {
	window.open('face.php','face','width=400,height=400,top=0,left=0');
}
code.onclick = function() {
	this.src='code.php?tm='+Math.random();
}

//表单验证
var fm = document.getElementsByTagName('form')[0];
fm.onsubmit = function() {
				//alert(fm.username.value.length);
	if(fm.username.value.length<2||fm.username.value.length>20) {
		alert('用户名长度不合法.');
		fm.username.value = '';
		fm.username.focus();
		return false;
	}
	if(/[<>\'\"\ \　"]/.test(fm.username.value)) {
		alert('用户名包含非法字符.');
		fm.username.value = '';
		fm.username.focus();
		return false;		
	}
}
};