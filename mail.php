<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'arturiothebest1337228@gmail.com';
$mail->Password = 'Arturchikio170000'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('arturiothebest1337228@gmail.com'); 
$mail->addAddress('arturnikolaichuk23@gmail.com');     
$mail->isHTML(true);                               

$mail->Subject = 'Заявка с сайта UBER';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>