function setFooterHeight(){
	var heigth = document.getElementsByClassName('footer')[0].clientHeight + 60;
	document.body.style.marginBottom = heigth+"px";
};

$(document).ready(function() {
	setFooterHeight();
});
$(window).resize(function() {
	setFooterHeight();
});