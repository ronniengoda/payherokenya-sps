# PAY HERO KENYA-SWIFT PAYMENT SERVICE (PAYMENT PROCESSING GATEWAY)
We have developed this API for developers who wish to integrate MPESA payment(B2C and C2B) Airtel Money, Equity, Pesa Link, Visa/Mastercard, Union Pay and Mvisa into their applications using our Swift Payment Service. First of all you will need an account with us.

You will need to create a business account with us using the following link: https://payherokenya.com/sps/portal
After creating an account you will log in to your account. Under the business applications menu, you will find your account details like username, api_key, account number, and callback URL. 
You will have to edit your details to provide your callback URL. This is where all payment notifications will be sent to.

By default we will assign you an account number, this will uniquely identify you when payments are made to you.
If you wish to add another reference number to this eg invoice number if your clients pay you will have to attach it to your original account number like for example your assigned account number is 400200 and you want to attach an invoice number to it when a client makes payment assume invoice number is 1234. Your customer's account number will look like 400200-1234. We will send the reference number to your callback URL for your processing.

# How to use our payment checkout form
We have developed a payment checkout form that you can easily integrate on your website. Simply donwload the payment-checkout.php file and global.php file and upload on your web server.
### See a live demo of how we implemented our basic and advanced payment checkout forms: https://payherokenya.com/onlineshop/

All you need to do is provide your API key and username on the payment-checkout.php file.
On your website when users want to pay you will need two things: amount and payment_reference. You will POST this values to the payment-checkout.php file as your action file and the user will be presented with a form to provide the MPESA phone number they want to pay with and they complete the payment.
Ensure you save your customer details like name,payment reference and amount first before proceeding to the payment checkout for this is the final step.

We will send you a callback on your provided callback URL containing the payment details for your processing.

![alt text](https://github.com/ronniengoda/payherokenya-sps/blob/main/spspcf.png?raw=true)

# How to set or update your CALLBACK URL
On your dashboard click on Business Aplications menu. You will be presented with your application details. Click on the check box on the far left column. A more menu will appear as shown in the image below. Select set or update callback URL and provide your callback URL

![alt text](https://github.com/ronniengoda/payherokenya-sps/blob/main/spsba.png?raw=true)

# MORE PAYMENT OPTIONS USING OUR ADVANCED PAYMENT CHECKOUT FORM
![alt text](https://www.ipayafrica.com/sites/default/files/slideshow-images/ipay%20banner%203.jpg?raw=true)
We have developed an advanced checkout form which you can now use to collect payments and your clients are presented with a wide array of payment options to choose from apart from MPESA.

To get started simply download the advanced-payment-checkout.php file from our repository. This file does not need any advanced setup. It contains a pre built html form that requires your customer phone number in international format, your customer email, the amount to be paid and the payment reference. This are the form elements that are visisble to your user.

You can also pre populate the values of the form using php to give the user easier time.
At the end of the form are two fields that need to be fed values by you, this are; username and business_account_number. This values are available on your SPS dashboard. Simply place them in the value="" parameter. This are not visible to the user.
Thats it, your user can now click pay and the rest of the process we will take care of it.
