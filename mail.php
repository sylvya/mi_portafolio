<?php 
	if (isset($_POST['name'])&&
		isset($_POST['email'])&&
		isset($_POST['subject'])&&
		isset($_POST['message']) ||
		empty($_POST['name'])&&
		empty($_POST['email'])&&
		empty($_POST['subject'])&&
		empty($_POST['message']))
	{
		//echo "todo bien";
		$name =$_POST['name'];
		$email =$_POST['email'];
		$subject =$_POST['subject'];
		$message =$_POST['message'];

		//echo "este es el nombre: ". $name.'<br>';
		//echo "este es el email: ". $email.'<br>';
		//echo "este es el subject: ".$subject.'<br>';
		//echo "Mensaje: ".$message.'<br>';

		if ($name == "" or $email == "" or $subject =="" or $message == "") {
			echo "Ingresa datos válidos";
		}else{
			//echo "todo bien bien";
			require('PHPMailer-master/PHPMailerAutoload.php');

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'silvialoph@gmail.com';                 // SMTP username
			$mail->Password = 'kasumy270809';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to
			// correo y nombre de la persona que envia el correo.
			$mail->setFrom('silvialoph@gmail.com', 'silvia lopez');
			$mail->addAddress('silvialoph@gmail.com', $name);     // Add a recipient

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Portafolio Profesional';
			/*$mail->Body    = 'Haciendo los primeros mensajes de prueba de portafolio <b>Silvia López</b><br><br>'.'Cuenta de correo: '.$correo.'<br><br>'.'Mensaje:'.$mensaje;*/
			$mail->Body = '<!DOCTYPE html>
								<html lang="es">
								<head>
								    <meta charset="UTF-8">
								    <title>Document</title>
								    <style type="text/css">
								        table{background: #00A3B2; width: 500px;border-spacing: 0px;}
								        strong {color:#fff;}
								        tr{}
								        td{color:#fff; font-weight: bold; padding: 20px; font-family: Arial; font-size:18px;}
								   		
								    </style>
								</head>
								<body>
								    <table border="1"> 
								    <tr>
								        <td colspan="2">
								           <center><strong>DATOS DE CONTACTO PORTAFOLIO PROFESIONAL</strong></center>
								        </td>
								    </tr>
								    <tr>
								        <td>Nombre: </td>
								        <td>'.$name.'</td>
								    </tr>
								    <tr>
								        <td>Correo: </td>
								        <td id="correo-color">'.$email.'</td>
								    </tr>
								    <tr>
								        <td>Asunto: </td>
								        <td>'.$subject.'</td>
								    </tr>
								    <tr>
								        <td>Mensaje: </td>
								        <td>'.$message.'</td>
								    </tr>
								</table>

								    
								</body>
								</html>';

			if(!$mail->send()) {
			    echo 'El mensaje no pudo ser enviado.';
			   // echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'El mensaje ha sido enviado correctamente';
			}
		}	

	}else{
		echo "Favor de verficar tu informción";
	}


 ?>