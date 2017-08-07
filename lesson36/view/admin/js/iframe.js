window.onload = function () {
	(window.onresize = function () {
		//acquire visable width
		var width = document.documentElement.clientWidth - 200;
		//acquire visable height
		var height = document.documentElement.clientHeight - 80;
		//如果有宽度，给值
		if(width >= 0) document.getElementById('main').style.width = width + 'px';
		if(height>= 0) {
			document.getElementById('sidebar').style.height = height + 'px';
			document.getElementById('main').style.height = height + 'px';			
		} 



	})()
};