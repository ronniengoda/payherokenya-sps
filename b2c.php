  
<?php 
include 'global.php';

//prepare an array that will contain your account details and payment details.
$data=array(
        'api_key' =>"your api key here",//provide api keyhere
        'username'=>"your user name here",//provide username here
        'amount'=>"10",//provide amount here
        'phone'=>"phone number here"//provide phone number here
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/b2c",$jdata);
print_r($response);
//Thats it hit send and we will take care of the rest
