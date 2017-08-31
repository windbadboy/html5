function adminLogin() {
	fm = document.login;
	if(fm.user.value == '') {
		alert('用户名不能为空.');
		fm.user.focus();
		return false;
	}
	if(fm.pass.value == '') {
		alert('密码不能为空.');
		fm.pass.focus();
		return false;
	}
	if(fm.code.value == '') {
		alert('验证码不能为空.');
		fm.code.focus();
		return false;
	}
	return true;
}

