<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;


$mail->isSMTP();                                     
$mail->Host =  "smtp.gmail.com";  
$mail->SMTPAuth = true;                          
$mail->Username = 'quotations@dp-itc.com';
$mail->Password = 'dp_Quota@2018';
$mail->SMTPSecure = 'tls';                       
$mail->Port = 587;                               
$mail->isHTML(true);   
$mail->Priority = 1; 
$mail->SMTPDebug  = 1;    
$to = 'info@dbridge-me.com';
$mail->setFrom($_POST["email"]);

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->addAddress($to);

if($_POST['qoutation']){
    $mail->Subject = $_POST['qoutation'];
}
else{
    $mail->Subject = $_POST['subject'];
}

$mail->replyTo = $email;

$Body='';
foreach($_POST as $k=>$v){
    $Body.=$k.": ";
    $Body .= $v;
    $Body .= "<br>";
}

$Body = wordwrap($Body, 70);

$mail->Body    = $Body;

if(!$mail->send()) {
    echo "invalid";
} else {
   echo "success";
}


?>
