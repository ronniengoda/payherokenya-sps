<?php
//Get callback response.
$response= file_get_contents('php://input');
$data=json_decode($response);

//Callback response values. You can now use this values for your own good.
$Transaction_Type=$data->response->Transaction_Type; //can either be C2B or B2C
$Source=$data->response->Source;//contains customer name and phone for C2B transaction
$Destination=$data->response->Destination;//contains the receipient of funds name and phone for B2C transaction
$Amount=$data->response->Amount;//Contains transaction amount
$MPESA_Reference=$data->response->MPESA_Reference;//Contains MPESA reference number for the transaction
$Account=$data->response->Account;//Contains your account number;
$User_Reference=$data->response->User_Reference; //this is the unique payment reference provided for C2B transaction type.
$Transaction_Reference=$data->response->Transaction_Reference;//this is the unique transaction reference for B2C transaction type.
$Transaction_Date=$data->response->Transaction_Date;//Contains the date and time when transaction happened

#You can now write your logic to process the above below here.
