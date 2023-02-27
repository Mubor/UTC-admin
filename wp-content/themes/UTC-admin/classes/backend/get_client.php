<?php
use Google\Client;

function getClient($authConfig, $setScopes, $accessToken, $refreshToken){
    $client = new Google\Client();
    // $client->setApplicationName('Gmail API PHP');
    $client->setScopes($setScopes);
    $client->setAuthConfig($authConfig);
    $client->setIncludeGrantedScopes(true);
    $client->setAccessType('offline');
    // $client->setPrompt('none');
    if ($accessToken) {
        $client->setAccessToken($accessToken);
    }
    if ($client->isAccessTokenExpired()) {
         $client->fetchAccessTokenWithRefreshToken($refreshToken);
         $newAccessToken = $client->getAccessToken();
         $client->setAccessToken($newAccessToken);
    }


    // echo(var_dump($client->fetchAccessTokenWithRefreshToken($refreshToken)));
    // echo(var_dump($client->getAccessToken()));
    return $client;
}
?>