//Menu

$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
	//INICIA VENTANA MODAL WORK

 	//TERMINA VENTANA MODAL WORK
};

//VALIDAR FORMULARIO CON JQUERY

$(function(){
	$('#formularioEmail').submit(function(event){
		event.preventDefault();
		var nombre = $('#nombre').val();
		var empresa = $('#empresa').val();
		var email = $('#email').val();
		var ubicacion = $('#ubicacion').val();
		var mensaje = $('#mensaje').val();

		console.log(nombre);
		console.log(empresa);
		console.log(email);
		console.log(ubicacion);
		console.log(mensaje);
		if (nombre=="") {
			$('#nombre-contacto').empty();
			$('#nombre-contacto').append('Debes ingresar un Nombre.');		
		}else if(email==""){
			$('#email-contacto').empty();
			$('#email-contacto').append('Debes ingresar un email.');
		}else if(mensaje==""){
			$('#mensaje-contacto').empty();
			$('#mensaje-contacto').append('Debes ingresar un Mensaje.');
		}else{
			$.ajax({
				data: $('#formularioEmail').serialize(),
				url: 'mail.php',
				type: 'POST',
				beforeSend:function(){
					$('#respuesta-contacto').html('<img src="../static/img/loader.gif">');	
				},
				success:function(response){
					$('#respuesta-contacto').html(response);
				}
			});
		}
	});
	$("#nombre").click(function(){
		$('#nombre-contacto').empty();
	});
	$("#email").click(function(){
		$('#email-contacto').empty();
	});
	$("#mensaje").click(function(){
		$('#mensaje-contacto').empty();
	});
});

