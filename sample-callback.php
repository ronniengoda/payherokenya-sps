<?php
//Get callback response.
$response= file_get_contents('php://input');
$data=json_decode($response);

//Callback response values. You can now use this values for your own good.
$Transaction_Type=$data->response->Transaction_Type;
$Source=$data->response->Source;
$Amount=$data->response->Amount;
$MPESA_Reference=$data->response->MPESA_Reference;
$Account=$data->response->Account;
$User_Reference=$data->response->User_Reference;
$Transaction_Date=$data->response->Transaction_Date;
