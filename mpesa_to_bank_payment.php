<?php 
//USE THIS RECEIVE MPESA PAYMENTS DIRECTLY TO YOUR SET BANK ACCOUNT.THIS WILL SEND AN MPESA STK TO YOUR CUSTOMER.BEFORE USING THIS ENSURE YOU HAVE REGISTERED FOR MPESA TO BANK SERVICE ON YOUR SPS DASHBOARD.
include("global.php");

$api_key="";//provide your api key here
$username="";//provide your username here

  $amount="";//provide amount here
  $customer_phone="";//provide customer phone here
  $payment_reference="";//privide payment reference here.

    # code...send request to pay hero kenya
    $data=array(
        'api_key' =>$api_key,//provide api keyhere
        'username'=>$username,//provide username here
        'amount'=>$amount,//provide amount here
        'phone'=>$customer_phone,//provide phone number here
        'user_reference'=>$payment_reference //provide user reference here
      );
  
  $jdata=json_encode($data);
  $response=sendRequest("https://payherokenya.com/sps/portal/app/mtb",$jdata);//send request to initiate stk.
  print_r($response);//print the response from sps.
  ?>

