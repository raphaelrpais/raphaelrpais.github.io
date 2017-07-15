<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['company']) 		||
   empty($_POST['message'])	||
   empty($_POST['value'])	||
   empty($_POST['duration'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$message = $_POST['message'];
$value = $_POST['value'];
$duration = $_POST['duration'];
	
// create email body and send it	
$to = 'raphaelrpais@gmail.com'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "[SITE] Uma mensagem sobre FINANCIAMENTO chegou através do site.";
$email_body = "$name da empresa $company fez contato com a GT através do site sobre financiamento e o objeto do seu projeto é o seguinte:\n\n' $message '\nValor: $value\nDuração: $duration\n\nPara retornar o contato responda a este e-mail ou ligue para $phone.";
$headers = "From: contato@gtconsultoria.com.br\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>