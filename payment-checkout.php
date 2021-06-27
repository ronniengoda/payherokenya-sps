<?php
#Provide account authentication details.
$api_key="";//provide your api key here
$username="";//provide your username here
$business_account_number="";//provide your account number here
 
 //Start the session
session_start();
if (!isset($_POST['send-stk'])) {
  $_SESSION["amount"]="";//your total amount.
  $_SESSION["payment_reference"]="";//your payment reference.
  $_SESSION["phone_number"]="";//customer phone number.
  $_SESSION["email"]="";//customer email.
}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>SPS PAYMENT CHECKOUT</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <!-- Google Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
   <!-- Bootstrap core CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
   <!-- JQuery -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
   <script type="text/javascript" src="https://www.jquery-az.com/javascript/alert/dist/sweetalert-dev.js"></script>
   <link rel="stylesheet" type="text/css" href="https://www.jquery-az.com/javascript/alert/dist/sweetalert.css">
   <style type="text/css">
   body {
    background: #f5f5f5
}

.rounded {
    border-radius: 1rem
}

.nav-pills .nav-link {
    color: #555
}

.nav-pills .nav-link.active {
    color: white
}

input[type="radio"] {
    margin-right: 5px
}

.bold {
    font-weight: bold
}
</style>
<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</head>
<body>
    <div class="container py-5">
        <!-- For demo purpose -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h3 class="display-6">Fastest And Safest Way To Pay By Pay Hero Kenya LTD</h3>
            </div>
        </div> <!-- End -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!--form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#stk" class="nav-link active "> <i class="fas fa-mobile mr-2"></i> <strong>Lipa Na MPESA</strong> </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#ipay" class="nav-link "> <i class="fas fa-credit-card mr-2"></i> <strong>Airtel Money, Equity, Pesa Link Etc..</strong> </a> </li>
                            </ul>
                        </div> <!-- End -->
                        <!-- stk form content -->
                        <div class="tab-content">
                            <!-- stk info-->
                            <div id="stk" class="tab-pane fade show active pt-3">
                                <img src="https://www.betway.co.ke/images/shared/other/kenyalipa-na-m-pesa.png" width="100%">
                                <form role="form" method="POST" action="">
                                    <div class="form-group">
                                  <label for="sel1">Select Payment Settlement Method:</label>
                                  <select class="form-control" id="settlement" name="settlement">
                                    <option value="spswallet">Merchant SPS Wallet</option>
                                    <option value="mpesatobank">Merchant Bank Account</option>
                                  </select>
                                </div>
                                    <div class="form-group">
                                        <div class="alert alert-info">Kindly provide an MPESA registered phone number to complete the transaction.</div>
                                        <label for="phoneNumber">
                                        PHONE NUMBER</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="phone" name='phone' value="<?php echo $_SESSION["phone_number"]; ?>" placeholder="MPESA Registered Phone Number"
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
                                    <div class="card-footer"> <button type="submit" name="send-stk" id="send-stk" class="btn btn-success btn-block"><strong>Make Payment</strong></button>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            <!-- ipay info -->
                            <div id="ipay" class="tab-pane fade pt-3">
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.BUUknw0WF8tNVfPH-V13YQHaAk%26pid%3DApi&f=1" width="100%">
                                <form role="form" method="POST" action="https://payherokenya.com/sps/portal/app/web_checkout.php">
                                  <div class="form-group">
                                    <label for="phoneNumber">
                                      <!-- Customer phone number in international format ie 2547xxxxxxxx * required-->
                                  CUSTOMER PHONE NUMBER *</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="phone" name='phone' value="<?php echo $_SESSION["phone_number"]; ?>" placeholder="2547xxxxxxxx"
                                      required readonly autofocus />
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="fa fa-phone"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                  <!-- Customer email address * required. -->
                              CUSTOMER EMAIL *</label>
                              <div class="input-group">
                                  <input type="email" class="form-control" id="email" name='email' value="<?php echo $_SESSION["email"]; ?>" placeholder="Customer Email"
                                  required readonly autofocus />
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-envelope"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="amount">
                              <!-- Amount to be paid * required -->
                          AMOUNT *</label>
                          <div class="input-group">
                              <input type="number" class="form-control" id="amount" name='amount' value="<?php echo $_SESSION["amount"]; ?>" placeholder="Amount"
                              required readonly autofocus />
                              <div class="input-group-prepend">
                                <span class="input-group-text"><span class="fa fa-credit-card"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="accountRef">
                          <!-- Payment reference, this could be an order number or invoice number etc * required -->
                      PAYMENT REFERENCE *</label>
                      <div class="input-group">
                          <input type="text" class="form-control" id="payment_reference" name='payment_reference' value="<?php echo $_SESSION["payment_reference"]; ?>" placeholder="Payment Reference"
                          required readonly autofocus />
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-list-alt"></span></span>
                        </div>
                    </div>
                </div>
                <!-- PROVIDE YOUR SPS ACCOUNTDETAILS IN THE value="" PARAMETER BELOW-->
                <!-- Your application username -->
                <input type="hidden" class="form-control" id="username" name='username' value="<?php echo $username ?>" />
                <!-- Your application account number. -->
                <input type="hidden" class="form-control" id="bussiness_account_number" name='bussiness_account_number' value="<?php echo $business_account_number ?>"/>
                <br>
                <button type="submit" class="btn btn-success btn-block btn-rounded"><strong>Make Payment</strong></button>
            </form>
        </div> <!-- End -->
        <!-- End -->
    </div>
</div>
</div>
</div>
</body>
</html>
    <?php 
    if (isset($_POST['send-stk'])) {
    # code...send request to pay hero kenya
        $data=array(
        'api_key' =>$api_key,//provide api keyhere
        'username'=>$username,//provide username here
        'amount'=>$_SESSION["amount"],//provide amount here
        'phone'=>$_POST['phone'],//provide phone number here
        'user_reference'=>$_SESSION["payment_reference"] //provide user reference here
    );
 
        //send our payment request now
        $jdata=json_encode($data);
        $settlement_method=$_POST['settlement'];
        if($settlement_method=="spswallet"){
        $response=sendRequest("https://payherokenya.com/sps/portal/app/stk.php",$jdata);
        }
        else{$response=sendRequest("https://payherokenya.com/sps/portal/app/mtb.php",$jdata);}
        $decode=json_decode($response);
        $Status=$decode->response->Status;
        if ($Status=="Failed") {
        # code...
            echo '<script type="text/javascript">swal("Ooops!", "We encountered a problem while processing your payment. Try again later or contact your merchant.", "error");</script>';
        }
        else{
            unset($_SESSION["cart_item"]);
            echo '<script type="text/javascript">swal("Congrats!", "Payment has been succesfully initiated.Check your phone for an STK push and provide PIN to complete payment.", "success");</script>';
        }

    }

    function sendRequest($url,$data){
        //Initiate cURL.
        $ch = curl_init($url);

        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);

        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        //Set the content type to application/json.
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        //Dont return result to screen,store in a variable.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        //Execute the request.
        $result = curl_exec($ch);
        return $result;
    }

    ?>
