<?php
// Файл, в котором будут храниться токены
use Google\Client;
// Подключение библиотеки Google API для PHP

function getClient($authConfig, $setScopes){
    $token_file = 'tokens.json';
    // Создание клиента и установка параметров
    $client = new Google\Client();
    $client->setScopes($setScopes);
    $client->setAuthConfig($authConfig);
    $client->setIncludeGrantedScopes(true);
    $client->setAccessType('offline');
    $client->setPrompt('none');

    $refreshToken = getTokenFromFile('refresh_token', $token_file);
    $client->fetchAccessTokenWithRefreshToken($refreshToken);

    $newAccessToken = $client->getAccessToken()['access_token'];
    $newRefreshToken = $client->getRefreshToken();
    
    saveTokensToFile($newRefreshToken, $newAccessToken, $token_file);

    $client->setAccessToken($newAccessToken);
    
    
    return $client;
}
    
function saveTokensToFile($refreshToken, $accesToken, $token_file) {
    $tokens = "{access_token:'" . $accesToken . "',refresh_token:'" . $refreshToken . "'}";
    file_put_contents($token_file, json_encode($tokens));
}
    
function getTokenFromFile($token_name , $token_file) {
    if (file_exists($token_file)) {
        $tokens = json_decode(file_get_contents($token_file), true);
        return $tokens[$token_name];
    }
}





?>