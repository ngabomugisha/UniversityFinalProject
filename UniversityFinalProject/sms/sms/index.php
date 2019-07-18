<?php 
    // Get the PHP helper library from twilio.com/docs/php/install 
    require_once 'vendor/autoload.php'; // Loads the library 
    use Twilio\Rest\Client;
    $account_sid = 'AC7b66fff1cafdbe797d6fd2b03bdeea9a'; 
    $auth_token = '3366918766d54693336fe47c5d58a04d'; 
    $client = new Client($account_sid, $auth_token); 
    $messages = $client->messages->create('+250786248680', array( 
         'From' => '+19382220870',
         'Body' => 'you are moving to fast. you have charged 35000 FRW for the Over Speed violation at REMERA-KABUGA Road on this speed : '.round($Vol,1).'pay this charges in 1 week'
    ));
?>