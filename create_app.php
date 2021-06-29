<?php 
include 'global.php';
//APPLICATION REGISTRATION API
    $data=array('username' =>"",//provide your desired username
        'password'=>"",//provide your password here
        'email'=>"",//provide your email/business email
        'business_name'=>"",//provide your business name
        'registration_number'=>"",//provide your business registration number
        'contact_phone'=>"",//provide your business contact phone
    );
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/create_app",$jdata);
print_r($response);

//EXPECTED JSON RESPONSE UPON SUCCESSFULL REGISTRATION
//{"status":true,"response":{"Status":"Sucess","Message":"Account Created Successfully","Username":"username","Api_Key":"api_key","Paybill":"4060195","Account_Number":"account_number"}}
