<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

use PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;

use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Grant\RefreshToken;

session_start();


function get_env_values() {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $credentials_env = json_decode($_ENV['CLIENT_KEY'], true);
    $token_env = json_decode($_ENV['TOKEN'], true);

    return [$credentials_env, $token_env];
}
     
function google_oauth2_provider() {
    $provider = new Google([
            'clientId' => get_env_values()[0]['client_id'],
            'clientSecret' => get_env_values()[0]['client_secret'],
            'redirect_uris' => get_env_values()[0]['redirect_uris'][0],
            // 'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
            // 'token_uri' => 'https://accounts.google.com/o/oauth2/token',
            ]);
    $grant = new RefreshToken();
    $token = $provider->getAccessToken($grant, ['refresh_token' => get_env_values()[1]['refresh_token']]);
        
    return $provider;
}

function phpmailer_connect() {
    $email = 'muha010801@gmail.com';
    $mail = new PHPMailer\PHPMailer(true);
    $mail->CharSet = PHPMailer\PHPMailer::CHARSET_UTF8;
    $mail-> isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->AuthType = 'XOAUTH2';
    $mail->setOAuth(new OAuth([
        'provider' =>  google_oauth2_provider(),
        'clientId' =>  get_env_values()[0]['client_id'],
        'clientSecret' =>  get_env_values()[0]['client_secret'],
        'refreshToken' => get_env_values()[1]['refresh_token'],
        'access_type' => 'offline',
        'userName' => $email,

    ]));
    return $mail;
}
 
function send_email() {
    $mail = phpmailer_connect();
    $mail->setFrom('muha010801@gmail.com', 'Slesar 6-go razriada'); 
    $mail->addAddress('K0Nz1dd@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Запит на співбесіду';
    $mail->Body = '
                    <!DOCTYPE html>
                    <html>
                    <head>
                    <style type="text/css">
                        .tg  {border-collapse:collapse;border-spacing:0;margin:0 auto; color: black;}
                        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                        overflow:hidden;padding:15px 12px;word-break:normal;}
                        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                        font-weight:normal;overflow:hidden;padding:15px 12px;word-break:normal;}
                        .tg .tg-7ya9{background-color:#c0c0c0;border-color:inherit;font-family:"Times New Roman", Times, serif !important;font-size:24px;
                        font-weight:bold;text-align:left;vertical-align:top}
                        .tg .tg-ytfs{border-color:inherit;font-family:"Times New Roman", Times, serif !important;font-size:24px;text-align:left;
                        vertical-align:top}
                        .title{color: black; background-color: white; font-weight:bold; font-family:"Times New Roman", Times, serif !important; font-size:36px; text-align:center; margin-bottom:20px}
                    </style>
                    </head>
                    <body>
                    <div class="title">Запит на співбесіду</div>
                    <table class="tg">
                    <thead>
                    <tr>
                        <th class="tg-7ya9">П.І.Б.</th>
                        <th class="tg-ytfs">fggggggggggggggg</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tg-7ya9">Вакансія</td>
                        <td class="tg-ytfs">dgfgdgd</td>
                    </tr>
                    <tr>
                        <td class="tg-7ya9">Посилання на CV</td>
                        <td class="tg-ytfs"><a href=""></a></td>
                    </tr>
                    <tr>
                        <td class="tg-7ya9">Номер телефону</td>
                        <td class="tg-ytfs">GAY</td>
                    </tr>
                    </tbody>
                    </table>
                    </body>
                    </html>
                ';

    if (!$mail->send()) {
        $output =  $mail->ErrorInfo; 
    } else {
        $output = 'Message sent!';  
    }
    return $output;
    
}

?>