<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';


$phone = $_POST['user_phone'];
$height = $_POST['user_height'];
$thickness  = $_POST['user_thickness'];
$length = $_POST['user_length'];
$width = $_POST['user_width'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.beget.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'oleksandrtymkiv463@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'mashagolova'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('oleksandrtymkiv463@gmail.com); // от кого будет уходить письмо?
$mail->addAddress('oltymtwo@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта лестниц';
$mail->Body    = 'Телефон: ' .$phone . '<br>Высота: ' .$height . ' Толщина: ' .$thickness . '<br>Длина: ' .$length . ' Ширина: ' .$width;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>