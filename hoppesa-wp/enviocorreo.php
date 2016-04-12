<?php
date_default_timezone_set('Etc/UTC');
$msg = '<div style="width: 400px; padding: 15px 20px; height: auto; border-top: 1px solid #cccccc;border-bottom: 1px solid #cccccc;font-family: Arial, Tahoma, sans-serif;">
    <div style="font-size: 12px;font-weight: bold; color: #335373;padding: 20px 0px 15px 0px;">Formulario City Hopppesa</div>
	<div style="font-size: 13px;color: #555555;padding: 0px 0px 10px 0px;"><b>Nombre:</b> '.$_POST['nombre'].'</div>
	<div style="font-size: 13px;color: #555555;padding: 0px 0px 10px 0px;"><b>Tel&eacute;fono:</b> '.$_POST['telefono'].'</div>
    
	<div style="font-size: 13px;color: #555555;padding: 0px 0px 10px 0px;"><b>E-mail:</b> '.$_POST['email'].'</div>
     <div style="font-size: 13px;color: #555555;padding: 0px 0px 10px 0px;"><b>E-mail:</b> '.$_POST['desarrollo'].'</div>

     <div style="font-size: 13px;color: #555555;padding: 0px 0px 10px 0px;"><b>E-mail:</b> '.$_POST['asunto'].'</div>

	<div style="font-size: 13px;color: #555555;padding: 0px 0px 10px 0px;"><b>Mensaje:</b> '.$_POST['mensaje'].'</div>
    </div>';

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "secure.emailsrvr.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "sender@publicidadenlinea.com";
$mail->Password = "360UvVcK";
$mail->isHTML(true);
$mail->addAddress('majo@publicidadenlinea.com');
//$mail->addAddress('marco@publicidadenlinea.com');
$mail->addAddress('daniel.rojas@publicidadenlinea.com');
$mail->setFrom('info@hoppesa.com', 'CITY TOWERS GREEN');
$mail->FromName = $_POST['nombre'];
$mail->Subject = "CONTACTO HOPPESA";
$mail->Body = $msg;
$mail->AltBody = $msg;
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: http://localhost:8888/hoppesa/hoppesa-wp/gracias');
 }

?>