<?php 
include 'global.php';

//prepare an array that will contain your account details.Make this request to inquire your wallets balances.
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>""//provide username here
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/balance",$jdata);
print_r($response);
