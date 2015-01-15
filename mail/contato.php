<?php
// Check for empty fields
//if(empty($_POST['name'])  		||
//   empty($_POST['email']) 		||
//   empty($_POST['phone']) 		||
//   empty($_POST['message'])	||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//	echo "No arguments Provided!";
//	return false;
//   }

//$name = $_POST['name'];
//$email_address = $_POST['email'];
//$phone = $_POST['phone'];
//$message = $_POST['message'];



    $destinatarios = 'globoinformaticadirceu@gmail.com;pabllobeg@hotmail.com';

     $nomeDestinatario = 'Globo Informática';

     $usuario = 'noreply@globo-informatica.com';

     $senha = 'Goku2415';

    $nomeRemetente = 'Pablo';// $_POST['nomeRemetente'];
    $assunto = 'Qualquer';//    $_POST['assunto'];
    $_POST['mensagem'] = 'Teste de mensagem'; //nl2br('E-mail: '. $_POST['email'] ."

//". $_POST['mensagem']);


    /*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/

    include_once("PHPMailerAutoload.php");

    $To = $destinatarios;
    $Subject = $assunto;
    $Message = $_POST['mensagem'];

    $Host = 'smtp.'.substr(strstr($usuario, '@'), 1);
    $Username = $usuario;
    $Password = $senha;
    $Port = "587";

    $mail = new PHPMailer();
    $body = $Message;
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host = $Host; // SMTP server
    $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Port = $Port; // set the SMTP port for the service server
    $mail->Username = $Username; // account username
    $mail->Password = $Password; // account password

$mail->CharSet = 'utf-8';

    $mail->SetFrom($usuario, $nomeDestinatario);
    $mail->Subject = $Subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($To, "");

    if(!$mail->Send()) {
        $mensagemRetorno = 'Erro ao enviar e-mail: '. $mail->ErrorInfo;
} else {
        $mensagemRetorno = 'E-mail enviado com sucesso!';
    }




//$name = 'Pablo';
//$email_address = 'pabllobeg@hotmail.com';
//$phone = '8633663366';
//$message = 'teste de mensagem';
//
//// Create the email and send the message
//$to = 'globoinformaticadirceu@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$email_subject = "Contato do cliente Globo -  $name";
//$email_body = "Nome do Cliente: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
//$headers = "From: pabllobeg@hotmail.com\r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";
//if(mail($to,$email_subject,$email_body,$headers)) return true;
