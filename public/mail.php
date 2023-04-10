<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://send.api.mailtrap.io/api/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"from":{"email":"info@smartzadost.cz","name":"Mailtrap Test"},"to":[{"email":"romanlazko@gmail.com"}],"subject":"You are awesome!","text":"Congrats for sending test email with Mailtrap!","category":"Integration Test"}',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer 25ec17f0a7b637eae08ce72017ec678c',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;