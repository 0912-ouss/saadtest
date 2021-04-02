function more() {
	var m=document.getElementById('more');
	var ul=document.getElementById('more');
	var mi=document.getElementById('mi');

	if (m.style.display=="none") {
		m.style.display="flex";
		ul.style.flexDirection="column";
		mi.style.transform="rotateZ(90deg)";
	}
	else{
		m.style.display="none";
	}
}
function hide() {
	var hidetag=document.getElementById('div');
	
	if (hidetag.style.display=="none") {
		hidetag.style.display="flex";
		
	}
	else{
		hidetag.style.display="none";
	}
}

