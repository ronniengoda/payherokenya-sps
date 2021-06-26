<?php 
//USE THIS CHECKOUT FORM TO RECEIVE MPESA PAYMENTS DIRECTLY TO YOUR SET BANK ACCOUNT.
include("global.php");

$api_key="";//provide your api key here
$username="";//provide your username here
// Start the session
session_start();
if (!isset($_POST['phone'])) {
  # code...
  $_SESSION["amount"]="";//provide amount here
  $customer_phone="";//provide customer phone here
  $_SESSION["payment_reference"]="";//privide payment reference here.
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          <div class="card-header badge-primary text-white"><strong>MPESA TO BANK</strong></div>
          <div class="card-body">
            <form role="form" method="POST">
              <div><img src="https://topforextradingbrokers.com/wp-content/img/2020/08/M-Pesa-1-300x300.png" class="mx-auto d-block" width="150" height="150"></div>
              <div class="alert alert-info"><strong>Provide your MPESA registered phone number to initiate payment via MPESA STK.</strong></div>
              <div class="form-group">
              	<!-- <div class="alert alert-info">Kindly confirm the phone number to make the MPESA payment from the client first and then complete this transaction.</div> -->
                <label for="phoneNumber">
                PHONE NUMBER</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="phone" name='phone' value="<?php echo $customer_phone; ?>" placeholder="MPESA Registered Phone Number"
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

             <button type="submit" class="btn btn-success btn-block"><strong>INITIATE TRANSACTION</strong></button>

           </form>
         </div>
         <div class="card-footer"><span class="badge badge-warning">Payment powered by PAY HERO KENYA LTD</span></div>
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
  $response=sendRequest("https://payherokenya.com/sps/portal/app/mtb.php",$jdata);
  $decode=json_decode($response);
  $Status=$decode->response->Status;
  if ($Status=="Failed") {
   # code...
    echo '<script type="text/javascript">swal("Ooops!", "We encountered a problem while processing your payment. Try again later or contact your merchant.", "error");</script>';
  }
  else{
    echo '<script type="text/javascript">swal("Congrats!", "Payment has been succesfully initiated.Check your phone for an STK push and provide MPESA PIN to complete payment.", "success");</script>';
  }

}

  ?>
</body>
</html>
