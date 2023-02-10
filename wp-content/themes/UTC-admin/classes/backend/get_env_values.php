<?php
use Dotenv\Dotenv;

function get_env_values() {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $credentials_env = json_decode($_ENV['CLIENT_KEY'], true);
    $token_env = json_decode($_ENV['TOKEN_GMAIL_CALENDAR'], true);
    $token_calendar_id_env = json_decode($_ENV['TOKEN_CALENDAR_ID'], true);
    return [$credentials_env, $token_env, $token_calendar_id_env];
}

?>