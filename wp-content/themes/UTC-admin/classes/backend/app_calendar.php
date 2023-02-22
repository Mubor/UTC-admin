<?php
require __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/get_env_values.php';
include __DIR__ . '/get_client.php';

session_start();

function return_timezone() {
  $date = new DateTime('now', new DateTimeZone('Europe/Kyiv'));
  $offset_in_hours = strval($date->getOffset() / 60 / 60 );
  return $offset_in_hours;
}

function send_calendar_event($fullname, $email, $phone, $time){
  
    $end_time =  date("Y-m-d\TH:i", strtotime($time)+ 60 * 60);

    $client = getClient(get_env_values()[0], Google\Service\Calendar::CALENDAR, get_env_values()[1]['access_token'], get_env_values()[1]['refresh_token'] );
    $calendarId = get_env_values()[2]['id'];

    $calendarService =  new Google\Service\Calendar($client);
    $event = new Google\Service\Calendar\Event(array(
        'summary' => 'MEETING WITH '. $fullname .'',
        'description' => 'Meeting with: '. $fullname .',<br/>Email: '. $email .',<br/>Phone: '. $phone .' ',
        'start' => array(
            'dateTime' => ''. $time .':00+0'. return_timezone().':00',
            'timeZone' => 'Europe/Kyiv',
          ),
          'end' => array(
            'dateTime' => ''. $end_time .':00+0'. return_timezone().':00',
            'timeZone' => 'Europe/Kyiv',
          ),
          'attendees' => array(),
          'reminders' => array(
            'useDefault' => FALSE,
            'overrides' => array(
              array('method' => 'email', 'minutes' => 24 * 60),
              array('method' => 'popup', 'minutes' => 10),
            ),
          ),
    ));
    try{
        $event_send = $calendarService->events->insert($calendarId, $event);
      
    }catch(Exception $e){
        //Error: Uncomment in case of error print_r($e);
        print_r($e);
    } 
}
?>