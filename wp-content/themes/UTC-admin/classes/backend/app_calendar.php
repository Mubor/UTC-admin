<?php
include __DIR__ . '/get_env_values.php';
include __DIR__ . '/get_client.php';

function send_calendar_event(){
    $client = getClient(get_env_values()[0], Google\Service\Calendar::CALENDAR, get_env_values()[2]['access_token'], get_env_values()[2]['refresh_token'] );
    $calendarId = get_env_values()[3];
    $calendarService =  new Google\Service\Calendar($client);
    $event = new Google\Service\Calendar\Event(array(
        'summary' => 'MEETING WITH UTC FILM',
        'description' => 'Meeting with: test',
        'start' => array(
            'dateTime' => '2023-01-21T17:56:00',
            'timeZone' => 'Europe/Kyiv',
          ),
          'end' => array(
            'dateTime' => '2023-01-21T18:00:00',
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

    $event_send = $calendarService->events->insert($calendarId, $event);
    printf('Event created: %s\n', $event_send->htmlLink);
    
}
?>