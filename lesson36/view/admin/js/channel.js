function channel(j) {
	//获取所有dl标签
	var _dl = document.getElementsByTagName('dl')
	for(i=0;i<_dl.length;i++) {
		_dl[i].style.display = 'none';
	}
	_dl[j].style.display = 'block';
}