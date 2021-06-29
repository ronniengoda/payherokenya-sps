<?php 
include 'global.php';
//Use this api to top up your service wallet from your payments wallet.just provide the amount you want to top up.
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'amount'=>20//provide amount
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/topup_service_wallet",$jdata);
print_r($response);
