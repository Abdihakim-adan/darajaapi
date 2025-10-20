<?php
$CONSUMER_KEY ="z0vSCQ0TcQJKwwXiOphBeN98lTGqOmNVDLhbeGvynQDo7FXF";
$CONSUMER_SECRET="Es6JR5yWwqGUTOJTIvonrTNFPmUGmAZvyKqKi7FnmCJGMqb0z5VidAgGFNmF6ucu";
$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . base64_encode('z0vSCQ0TcQJKwwXiOphBeN98lTGqOmNVDLhbeGvynQDo7FXF : Es6JR5yWwqGUTOJTIvonrTNFPmUGmAZvyKqKi7FnmCJGMqb0z5VidAgGFNmF6ucu')
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
echo json_decode($response);



?>