<?php
use PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


function phpmailer_provider() {
    $mail = new PHPMailer\PHPMailer();
    $mail->CharSet = PHPMailer\PHPMailer::CHARSET_UTF8;
    $mail->Encoding = PHPMailer\PHPMailer::ENCODING_BASE64;
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPSecure = PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail-> isSMTP();
    $mail->isHTML(true);
    return $mail;
}
?>