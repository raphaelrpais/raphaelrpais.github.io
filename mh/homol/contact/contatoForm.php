<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['company']) 		||
   empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'raphaelrpais@gmail.com'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "[SITE] Uma mensagem sobre $subject chegou através do site.";
$email_body = "$name da empresa $company fez contato com a GT através do site e disse o seguinte:\n\n' $message '\n\nPara retornar o contato responda a este e-mail ou ligue para $phone.";
$headers = "From: contato@gtconsultoria.com.br\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>