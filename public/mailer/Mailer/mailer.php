<?php
require 'Mailer/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
// $mail->SMTPDebug = 1; 

$name = $_POST["name"];
$email = $_POST["email"];
$tell = $_POST["phone"];
$qoutation = $_POST["qoutation"];
$countrycode = $_POST["countrycode"];
$budget = $_POST["budget"];



$mail->isSMTP();                                     
$mail->Host =  "smtp.gmail.com";  
$mail->SMTPAuth = true;                          
$mail->Username = 'global.web.sender@gmail.com';        
$mail->Password = 'global123456789';                 
$mail->SMTPSecure = 'tls';                       
$mail->Port = 587;                               
$mail->isHTML(true);   
$mail->Priority = 1; 

$to = 'peter_azer90@hotmail.com';
$mail->setFrom($email);

// Send Email tto user ####################################
$mail->addAddress('peter_azer90@hotmail.com');

$mail->Subject = "$qoutation";

$mail->replyTo = $email;


$Body = "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Budget Estimate: $ ";
$Body .= $budget;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $countrycode;
$Body .= $tell;
$Body .= "\n";
 
$Body = wordwrap($Body, 70);

$mail->Body    = $Body;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

// ini_set('SMTP', 'localhost');
// ini_set('smtp_port', '25');
// // ini_set('username', 'global.web.sender@gmail.com');
// // ini_set('password', 'global123456789');

// // $name = $_POST["name"];
// // $email = $_POST["email"];
// // $tell = $_POST["phone"];
// // $qoutation = $_POST["qoutation"];
// // $countrycode = $_POST["countrycode"];
// // $budget = $_POST["budget"];

// $name = "12312dasas";
// $email = "Asdasdasd";
// $tell = "123123123123";
// $qoutation = "zizoasdfioasfaio";
// $countrycode = "87435rhfg";
// $budget = "fghjk";


// $EmailTo = "m.abdulaziz@dp-itc.com";
// $Subject = "$qoutation";
 
// $Body = "Name: ";
// $Body .= $name;
// $Body .= "\n";
 
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";

// $Body .= "Budget Estimate: $ ";
// $Body .= $budget;
// $Body .= "\n";

// $Body .= "Phone: ";
// $Body .= $countrycode;
// $Body .= $tell;
// $Body .= "\n";
 
// $Body = wordwrap($Body, 70);
 
// $success = mail($EmailTo, $Subject, $Body, "From:".$email);
// var_dump($success);
// return "here";
// if ($success){
//    echo "success";
// }else{
//     echo "invalid";
// }

?>
