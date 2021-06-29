<?php 
include 'global.php';
//Use this API to transfer funds from your payments wallet to another account's payments wallet. Provide the details required to complete transaction
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'amount'=>'',//provide amount
        'destination_account_number'=>'',//provide destination/recipient account number.
        'payment_reference'=>'NA'//provide the payment reference for this transaction,could be anything unique to identify the transaction eg: invoice number etc.
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/b2b",$jdata);
print_r($response);
