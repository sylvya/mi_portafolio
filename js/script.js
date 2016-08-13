$(document).ready(function(){
	$(function(){
	$('#btn-contact').click(function(){

		var name = $('#name').val();
		var email = $('#email').val();
		var validacion_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;
		var subject = $('#subject').val();
		var message = $('#message').val();

		if (name == "") {
			$("#name").focus();
			return false;
		}else if (email == "" || !validacion_email.test(email)) {
			$("#email").focus();
			return false;
		}else if (subject == "") {
			$("#subject").focus();
			return false;
		}else if (message == "") {
			$("#message").focus();
			return false;
		}else{
			$('.ajaxgif').removeClass('hideAjax');
			
			$.ajax({
				data: $("#form-contacto").serialize(),
				type:"POST",
				url: "mail.php",
				success: function(response){
					//console.log(response);
					if (response == "El mensaje ha sido enviado correctamente") {
						$('.ajaxgif').hide();
						$('.msg').text('Mensaje Enviado Correctamente!').animate({'right':'130px'}, 300);
						$("#form-contacto").trigger('reset');
					}else{
						$('.ajaxgif').hide();
						$('.msg').text('Hubo un Error!').animate({'right':'130px'}, 300);
					}
				},
				error: function(){
					$('.ajaxgif').hide();
					$('.msg').text('Hubo un Error!').addClass('msg_error').animate({'right':'130px'}, 300);

				}
			});
			return false;
		}
	});
});
});