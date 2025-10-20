<?php

$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . base64_encode('z0vSCQ0TcQJKwwXiOphBeN98lTGqOmNVDLhbeGvynQDo7FXF:Es6JR5yWwqGUTOJTIvonrTNFPmUGmAZvyKqKi7FnmCJGMqb0z5VidAgGFNmF6ucu')
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch , CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($ch);
$data = json_decode($response);
echo $data->access_token;





?>