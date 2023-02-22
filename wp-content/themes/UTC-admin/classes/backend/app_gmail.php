<?php
require __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/message.php';
include __DIR__ . '/get_env_values.php';
include __DIR__ . '/get_client.php';
include __DIR__ . '/get_phpmailer_provider.php';

session_start();

function send_email($full_name, $vacancy, $cv, $phone ) {
    $mail= phpmailer_provider();
    $client = getClient(get_env_values()[0], Google\Service\Gmail::GMAIL_SEND, get_env_values()[1]['access_token'], get_env_values()[1]['refresh_token'] );
    $message = return_message( $full_name,  $vacancy, $cv, $phone );
    $mailService = new Google\Service\Gmail($client);

    $mail->setFrom('muha010801@gmail.com', 'UTC@FILM'); 
    $mail->addAddress('muha010801@gmail.com');
    $mail->Subject = 'Запит на співбесіду';
    $mail->Body = $message;
    try{
            $mail->preSend();
            $rawMessage = base64_encode($mail->getSentMIMEMessage());
            $rawMessage = str_replace(['+', '/', '='], ['-', '_', ''], $rawMessage);
            $gMessage = new Google\Service\Gmail\Message();
            $gMessage->setRaw($rawMessage);
            
            $result = $mailService->users_messages->send('me', $gMessage);

    }catch (Exception $e) {
            //Error: Uncomment in case of error print_r($e);
            print_r($e);
    }       
}



?>