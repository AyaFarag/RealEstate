function submitFomforMSG() {
	var name = $("#contact-msg #name").val();
	var email = $("#contact-msg #email").val();
	var message = $("#contact-msg #message").val();

	$.ajax({
		type: "POST",
		url: "mailer.php",
		data:{
			    subject:"Contact Us",
				name:name,
				email:email,
				message:message,
				
			 },
//		data:"&name=" + name + "&email=" + email + "&message=" + message+ "&subject=Contact Us",
		success: function (text) {
			if (text == "success") {
				$("#msgSubmitcontact").addClass("show");
			}
		}
	});
}
