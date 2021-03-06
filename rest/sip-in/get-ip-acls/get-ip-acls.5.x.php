<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Client($sid, $token);

$ipAccessControlLists = $client->sip
    ->ipAccessControlLists
    ->read();

// Loop over the list of ip_access_control_lists and echo a property for each one
foreach ($ipAccessControlLists as $ipAccessControlList) {
    echo $ipAccessControlList->friendlyName;
}
