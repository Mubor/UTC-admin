<?php
use Dotenv\Dotenv;

function get_env_values() {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $credentials_env = json_decode($_ENV['CLIENT_KEY'], true);
    $token_gmail_env = json_decode($_ENV['TOKEN_GMAIL'], true);
    $token_calendar_env = json_decode($_ENV['TOKEN_CALENDAR'], true);
    $token_calendar_id_env = json_decode($_ENV['TOKEN_CALENDAR_ID'], true);
    return [$credentials_env, $token_gmail_env, $token_calendar_env,$token_calendar_id_env];
}

?>