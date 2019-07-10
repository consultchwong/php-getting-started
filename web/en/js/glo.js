function chLang(t,f) {
	var currentStr = window.location.href;
	currentStr = currentStr.replace("/" + t + "/", "/" + f + "/");
	window.location.href = currentStr;
}

$(function(){
	$('#header_logo').click(function(){
		window.location.href = "index.htm";	
	});
});

document.documentElement.style.overflowX = 'hidden';