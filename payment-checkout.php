<?php
include 'global.php';

#Provide authentication details.
$api_key="your api key";//provide your api key here
$username="your username";//provide your username here
// Start the session
session_start();
if (!isset($_POST['phone'])) {
  # code...
  $_SESSION["amount"]=$_POST['amount'];//your POSTed amont
  $_SESSION["payment_reference"]=$_POST['payment_reference'];//your POSTed payment reference.
  $_SESSION["frompage"]=$_SERVER['HTTP_REFERER'];
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>PAYMENT CHECKOUT FORM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script type="text/javascript" src="https://www.jquery-az.com/javascript/alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" type="text/css" href="https://www.jquery-az.com/javascript/alert/dist/sweetalert.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-xs-12 col-md-6">
        <div class="card">
          <div class="card-header bg-dark text-white"><strong>PAYMENT DETAILS</strong></div>
          <div class="card-body">
            <form role="form" method="POST">
              <div><img src="https://cdn-images-1.medium.com/fit/t/1600/480/1*ku2fgiHHIfl_VOatvwwZGw.png" class="mx-auto d-block" width="100%"></div>
              <div class="form-group">
                <label for="phoneNumber">
                PHONE NUMBER</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="phone" name='phone' placeholder="MPESA Registered Phone Number"
                  required autofocus />
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-phone"></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="amount">
                AMOUNT</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="amount" name='amount' placeholder="Amount"
                  required autofocus value="<?php echo $_SESSION["amount"]; ?>" disabled="yes" />
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-credit-card"></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="accountRef">
                PAYMENT REFERENCE</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="payment_reference" name='payment_reference' placeholder="Payment Reference"
                  required autofocus value="<?php echo $_SESSION["payment_reference"]; ?>" disabled="yes" />
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-list-alt"></span></span>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary btn-block">
               <strong>Final Payment</strong> <span class="badge badge-light"><strong>Ksh <?php echo $_SESSION["amount"]; ?></strong></span>
             </button>

             <button type="submit" class="btn btn-success btn-block"><strong>PAY NOW</strong></button>

           </form>
         </div>
         <div class="card-footer"><span class="badge badge-warning">Payment powered by PAY HERO KENYA LTD</span> <a href="<?php echo $_SESSION["frompage"]; ?>" class="btn btn-outline-success btn-sm">Back To Merchant</a></div>
       </div>
     </div>
     <div class="col-md-3"></div>
   </div>
 </div>

 <?php 
 if (isset($_POST['phone'])) {
    # code...send request to pay hero kenya
  $data=array(
        'api_key' =>$api_key,//provide api keyhere
        'username'=>$username,//provide username here
        'amount'=>$_SESSION["amount"],//provide amount here
        'phone'=>$_POST['phone'],//provide phone number here
        'user_reference'=>$_SESSION["payment_reference"] //provide user reference here
      );
  
  $jdata=json_encode($data);
  $response=sendRequest("https://payherokenya.com/sps/portal/app/stk.php",$jdata);
  $decode=json_decode($response);
  $Status=$decode->response->Status;
  if ($Status=="Failed") {
   # code...
    echo '<script type="text/javascript">swal("Ooops!", "We encountered a problem while processing your payment. Try again later or contact your merchant.", "error");</script>';
  }
  else{
    echo '<script type="text/javascript">swal("Congrats!", "Payment has been succesfully initiated.Please check your phone for an STK push and provide PIN to complete payment.", "success");</script>';
  }

}

?>
</body>
</html>
