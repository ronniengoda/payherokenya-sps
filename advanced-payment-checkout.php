<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPS-PAYMENT CHECKOUT FORM</title>
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
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-xs-12 col-md-6">
        <div class="card">
          <div class="card-header bg-dark text-white"><strong>PAYMENT DETAILS</strong></div>
          <div class="card-body">
            <!-- POST parameters required: phone,email,amount,payment_reference,username,bussiness_account_number-->
            <form role="form" method="POST" action="https://payherokenya.com/sps/portal/app/web_checkout.php">
              <div><img src="https://www.ipayafrica.com/sites/default/files/slideshow-images/ipay%20banner%203.jpg" class="mx-auto d-block" width="100%"></div>
              <div class="form-group">
                <label for="phoneNumber">
                  <!-- Customer phone number in international format ie 2547xxxxxxxx * required-->
                CUSTOMER PHONE NUMBER *</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="phone" name='phone' placeholder="2547xxxxxxxx"
                  required autofocus />
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
                  <input type="email" class="form-control" id="email" name='email' placeholder="Customer Email"
                  required autofocus />
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
                  <input type="number" class="form-control" id="amount" name='amount' placeholder="Amount"
                  required autofocus />
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
                  <input type="text" class="form-control" id="payment_reference" name='payment_reference' placeholder="Payment Reference"
                  required autofocus />
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-list-alt"></span></span>
                  </div>
                </div>
              </div>
              <!-- PROVIDE YOUR SPS ACCOUNTDETAILS IN THE value="" PARAMETER BELOW-->
              <!-- Your application username -->
              <input type="hidden" class="form-control" id="username" name='username' value="" />
              <!-- Your application account number. -->
              <input type="hidden" class="form-control" id="bussiness_account_number" name='bussiness_account_number' value=""/>
                <br>
             <button type="submit" class="btn btn-success btn-block btn-rounded"><strong>PAY NOW</strong></button>

           </form>
         </div>
         <div class="card-footer"><span class="badge badge-warning">Payment powered by PAY HERO KENYA LTD</span></div>
       </div>
     </div>
     <div class="col-md-3"></div>
   </div>
 </div>
</body>
</html>
