<?php
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;
$client = new Client($sid, $token);
$client->messages->create(
 '9206717583', // number to send to
 array(
 'from' => '9206717583', // your Twilio number
 'body' => "There’s something strange in my neighborhood. I don’t know who to call. Send help!"
 )
);