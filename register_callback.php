<?php 
include 'global.php';
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'callback_url'=>"",//provide your desired callback url should start with https://
    );
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/register_callback.php",$jdata);
print_r($response);
