function addManage() {
	fm = document.add;
	if(fm.user.value == '') {
		alert('empty username.');
		fm.user.focus();
		return false;
	}
	return true;
}

function updateManage() {
	fm = document.update;

	if(fm.pass.value != fm.repass.value) {
		alert('密码不一致。');
		fm.pass.focus();
		return false;
	}
	if(fm.level.value ==0) {
		alert('请选择一个角色。');
		return false;
	}
	
	return true;
}


function checkUser(){
    var user = document.getElementById("user");
    var flag = document.getElementById("flag");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?a=manage&m=isUser',
        data:"user="+user.value,
        success: function(msg) {
            if(msg==1){
                flag.value = 'true';
            } else {
                flag.value = '';
            }
        },
        failure: function(a) {
            alert(a);
        },
        soap:this
    });
}