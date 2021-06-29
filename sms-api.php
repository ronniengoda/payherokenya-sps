<?php 
include 'global.php';

//Use this API send SMS : Sender Name Will Display. PAYHERO. Only use this api to deliver trasncational related messages.
        $data=array(
         'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'recipient'=>'',//provide recipient phone number in international format.
        'message'=>'',//provide message to be sent via sms
    
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/sms_api",$jdata);
print_r($response);
