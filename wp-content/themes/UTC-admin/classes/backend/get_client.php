<?php
use Google\Client;

function getClient($authConfig, $setScopes, $accessToken, $refreshToken){
    $client = new Google\Client();
    // $client->setApplicationName('Gmail API PHP');
    $client->setScopes($setScopes);
    $client->setAuthConfig($authConfig);
    $client->setIncludeGrantedScopes(true);
    $client->setAccessType('offline');
    $client->setPrompt('none');
    if ($accessToken) {
        $client->setAccessToken($accessToken);
    }
    if ($client->isAccessTokenExpired()) {
         $client->refreshToken($refreshToken);
    }
    return $client;
}



?>