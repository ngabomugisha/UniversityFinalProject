<?php
    // Get the PHP helper library from twilio.com/docs/php/install
    require_once 'vendor/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'AC33e84f902bf5921d9416e4be344b71ff';
    $auth_token = '81a655556dd43e2d82d23da8aaf5a2ca';
    $client = new Client($account_sid, $auth_token);
    $messages = $client->messages->create('+250781946105', array(
         'From' => '+12028319425',
         'Body' => 'you did not pay the charges from Over Speed violation, u will pay extra amount of 50%'
    ));
?>
