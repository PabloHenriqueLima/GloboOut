<?php

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = empty($_POST['phone']) ? 'Não informado' : $_POST['phone'];
$message = $_POST['message'];


    include_once("PHPMailerAutoload.php");

    $To = 'globoinformaticadirceu@gmail.com';
    $Username = 'noreply@globo-informatica.com';
    $Message = $_POST['message'];

    $Host = 'smtp.'.substr(strstr($Username, '@'), 1);
    $mail = new PHPMailer();
    $body = $Message;
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host = $Host; // SMTP server
    $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
    $mail->CharSet = 'utf-8';
// 1 = errors and messages
// 2 = messages only
    //--
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Port = 587; // set the SMTP port for the service server
    $mail->Username = $Username; // account username
    $mail->Password = 'Goku2415'; // account password
//--------------------------

$email_body = "Nome do Cliente: $name <br />".
    "Email: $email_address <br />".
    "Telefone: $phone <br />".
    "Mensagem:\n$message";

    $mail->SetFrom($Username, $name);
    $mail->Subject = 'Contato';
    $mail->MsgHTML($email_body);
    $mail->AddAddress($To, "");

    if(!$mail->Send()) {
        $mensagemRetorno = 'Erro ao enviar e-mail: '. $mail->ErrorInfo;
} else {
        $mensagemRetorno = 'E-mail enviado com sucesso!';
    }
