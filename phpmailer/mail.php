<?php
require_once('/wp-content/themes/mislavskiy/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$phone = $_POST['user_telephone_book'];
$email = $_POST['user_email_book'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                                                                                              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'psymislavsliy@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '123Qwe!@#'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->setFrom('psymislavsliy@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('savdeieva@gmail.com');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = 'Была оставлена заявка на зака книги. <br> Телефон: ' .$phone. '<br>Почта: ' .$email;
$mail->AltBody = '';
if(!$mail->send()) {
    header('Location: /wp-content/themes/mislavskiy/thank-you.html');
} else {
    header('Location: /wp-content/themes/mislavskiy/thank-you.html');
  
}
?> 