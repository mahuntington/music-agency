<?php
$url = 'https://stupidmailer.herokuapp.com/';
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => '{
                    "from": "matt.huntington@gmail.com",
                    "to": "matt.huntington@gmail.com",
                    "subject": "no var dump",
                    "html": "please please please please please please"
            }'
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { echo '{
    "status":500,
    "error":"could not make request to stupidmailer"
}'; }

echo $result;
