<?php 
include 'global.php';
//Use this API to send your customers invoices,provide the required parameters and an email will be sent to your customer containing the invoice details and a link to make the payment.
$data=array(
        'api_key' =>"",//provide api keyhere
        'username'=>"",//provide username here
        'amount'=>"",//provide the amount to be paid
        'currency'=>"KES",//provide the currency to be used either KES or USD
        'invoice_number'=>"",//provide the invoice number: this will be sent to your callback as user reference.
        'description'=>"",//provide a brief decription of this invoice.
        'customer_email'=>"",//provide customer email
        'customer_phone'=>"",//provide customer phone
        'customer_name'=>""//provide customer name.
    );
  
$jdata=json_encode($data);
$response=sendRequest("https://payherokenya.com/sps/portal/app/send_invoice",$jdata);
print_r($response);
