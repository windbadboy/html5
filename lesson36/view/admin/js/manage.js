function addManage() {
	fm = document.add;
	if(fm.user.value == '') {
		alert('empty username.');
		fm.user.focus();
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
        url:'index.php?a=manage&m=ajax',
        data:"user="+user.value,
        success: function(msg) {
            if(msg==1){
            	alert('1');
                flag.value = 'true';
            } else {
            	alert('2');
				flag.value = '';
			}
        },
        failure: function(a) {
            alert(a);
        },
        soap:this
    });
}