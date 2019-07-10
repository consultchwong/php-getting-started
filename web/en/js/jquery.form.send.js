$(document).ready(function(){
	$("#sendmail").click(function(){
		var valid = '';
		var isr = ' is required.';
		var name = $("#name").val();
		var phone = $("#phone").val();
		var fax = $("#fax").val();
		var mail = $("#mail").val();
		var text = $("#text").val();
		
		if (name.length<1) {
			valid += '<br />Name'+isr;
		}
		
		if (phone.length<8) {
			valid += '<br />A valid phone'+isr;
		}
		
		if (fax.length<8) {
			valid += '<br />A valid fax'+isr;
		}
		
		if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += '<br />A valid Email'+isr;
		}
		
		if (text.length<1) {
			valid += '<br />Text'+isr;
		}
		
		if (valid!='') {
			$("#response").fadeIn("slow");
			$("#response").html("Error:"+valid);
		}
		else {
			var datastr ='name=' + name + '&phone=' + phone + '&fax=' + fax + '&mail=' + mail + '&text=' + text;
			$("#response").css("display", "block");
			$("#response").html("Sending message .... ");
			$("#response").fadeIn("slow");
			setTimeout("send('"+datastr+"')",2000);
		}
		return false;
	});
});
function send(datastr){
	$.ajax({	
		type: "POST",
		url: "include/mail.php",
		data: datastr,
		cache: false,
		success: function(html){
		$("#response").fadeIn("slow");
		$("#response").html(html);
		setTimeout('$("#response").fadeOut("slow")',2000);
	}
	});
}