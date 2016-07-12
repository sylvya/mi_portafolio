<?php 
	if (!empty($_POST['nombre']) && 
		!empty($_POST['email']) && 
		!empty($_POST['mensaje'])) 
		{
			$nombre = $_POST['nombre'];
			if (empty($_POST['empresa'])) {
				$empresa = "-------------------------";
			}else{
				$empresa = $_POST['empresa'];
			}
			$email = $_POST['email'];
			if (empty($_POST['ubicacion'])) {
				$ubicacion = "-------------------------";
			}else{
				$ubicacion = $_POST['ubicacion'];
			}
			$mensaje = $_POST['mensaje'];

			//echo "este es el nombre: ". $nombre;
			//echo "este es la empresa: ". $empresa;
			//echo "este es el email: ". $email;
			//echo "este es su ubicación: ".$ubicacion;
			//echo "Mensaje: ".$mensaje;

			if ($nombre=="" || $nombre==" ") {
				echo "Ingresa tu Nombre.";
			}else if ($email=="") {
				echo "Ingresa tu email";
			}else if ($mensaje=="" || $mensaje==" ") {
				echo "Ingresa un Mensaje";
			}else{
				//echo "todo bien.";
				$destinatario ="silvialoph@gmail.com";
				$asunto="Mensaje Portafolio Silvia";
				$contenido_mensaje='<!DOCTYPE html>
					<html lang="es">
					<head>
					    <meta charset="UTF-8">
					    <title>Document</title>
					    <style type="text/css">
					        table{background: #b8c0c1; width: 500px;border-spacing: 0px;}
					        strong {color:#1A2123;}
					        tr{}
					        td{color:#1A2123; font-weight: bold; padding: 10px; font-family: Arial; font-size:16px;}
					   		
					    </style>
					</head>
					<body>
					    <table border="1"> 
					    <tr>
					        <td colspan="2">
					           <center><strong>DATOS DE CONTACTO PORTAFOLIO SILVIA</strong></center>
					        </td>
					    </tr>
					    <tr>
					        <td>Nombre: </td>
					        <td>'.$nombre.'</td>
					    </tr>
					     <tr>
					        <td>Empresa: </td>
					        <td>'.$empresa.'</td>
					    </tr>
					    <tr>
					        <td>Correo: </td>
					        <td id="correo-color">'.$email.'</td>
					    </tr>
					    <tr>
					        <td>Ubicación: </td>
					        <td>'.$ubicacion.'</td>
					    </tr>
					    <tr>
					        <td>Mensaje: </td>
					        <td>'.$mensaje.'</td>
					    </tr>
					</table>

					    
					</body>
					</html>';

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= 'From: PortafolioSilvia <silvialoph@gmail.com>' . "\r\n";

			if (mail($destinatario, $asunto, $contenido_mensaje, $headers)) {
				echo "<b>Mensaje enviado.</b>";
			}else{
				echo "<b>Error de Envío</b>";
			}

		}

		}else{
			echo "<b>favor de verificar tu información.</b>";
		}
 ?>