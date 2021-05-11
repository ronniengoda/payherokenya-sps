<?php 
include 'global.php';

//Use this API send SMS 
        'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'recipient'=>'',//provide recipient phone number in international format.
        'message'=>'',//provide message to be sent via sms
    
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/sms_api.php",$jdata);
print_r($response);
