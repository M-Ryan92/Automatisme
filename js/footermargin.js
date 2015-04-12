function setFooterHeight(){
	var heigth = document.body.children[2].clientHeight + 40;
	document.body.style.marginBottom = heigth+"px";
};

$(document).ready(function() {
	setFooterHeight();
});
$(window).resize(function() {
	setFooterHeight();
});