function addNav() {
	fm = document.add;
	if(fm.name.value == '') {
		alert('empty username.');
		fm.name.focus();
		return false;
	}
	if(fm.name.value.length < 2) {
		alert('导航不得小于2位.');
		fm.name.focus();
		return false;
	}
	if(fm.name.value.length > 4) {
		alert('导航不得大于4位.');
		fm.name.focus();
		return false;
	}	
	if(fm.info.value.length > 200) {
		alert('简介不得超过200个字符.');
		fm.info.focus();
		return false;
	}
	return true;
}

function updateNav() {
	fm = document.update;

	if(fm.info.value.length > 200) {
		alert('简介不得超过200个字符.');
		fm.info.focus();
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