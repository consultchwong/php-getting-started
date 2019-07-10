

function chLang(t,f) {
	var currentStr = window.location.href;
	currentStr = currentStr.replace("/" + t + "/", "/" + f + "/");
	window.location.href = currentStr;
}