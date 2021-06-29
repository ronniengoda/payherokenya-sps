<?php 
include 'global.php';
//CALLBACK URL REGISTRATION API
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'callback_url'=>"",//provide your desired callback url should start with https://
    );
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/register_callback",$jdata);
print_r($response);
