<?php 
include 'global.php';
//This API will be used to fetch all your account related transactions.
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>""//provide username here
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/transactions",$jdata);
print_r($response);
