<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Rekar Management System</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.terms_of_head{
  background-image: url(img/bw.jpg);
  background-attachment: fixed;
}
.term_of_service_head{
   width: 70%;
}
.term_of_service_h2{
  color:white;
  margin-top: 30px;
}
.term_of_service_body{
  color: white;
}
.term_of_link{
  margin-bottom: 10px;
  color: white;
}
.term_of_p{
  color: white;
}
.btn_resize{
  margin: 30px 0;
  margin-left: 40%;
}
.btn_link{
  color: white;
}
.h1_letter{
  color: white;
}
    </style>
</head>
<body>

<<!-- Start Switcher -->
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<div class="comtainer_fluid terms_of_head">
  <div class=" container term_of_service_head">
   <h2 class="term_of_service_h2">Terms of Service</h2><hr>
    <div>
      <h3 class="h1_letter">Financial Conditions:</h3>
      <p class="term_of_p">
      A. Renting Price
​
The renting price consists of a daily renting price plus a per-kilometer price.

​

The renting price is freely chosen by the Car Owner, provided that the daily renting price is not less than $10.

​

In order to provide Users the flexibility to manage special cases, ReKar does not choose the daily renting price.

​

It is the User’s responsibility not to charge less than these minimum prices. ReKar reserves the right to refuse to validate renting below these minimum prices or, if the renting has already begun, to suspend payment to the Car Owner until the situation has been put right.

The Renter represents that he/she has authorized ReKar to collect the different sums (renting price, security deposit, compensation, penalties and any other extra charges) in the name and on behalf of the Car Owner.

​

Maximum number of kilometers per day is 150 KM, the Renter is charged 1% of the daily renting rate for every extra 1 kilometer.


 

B. Service Fees
​
The total renting price, penalties,toll charges, traffic tickets charges, ..etc for the Renter, breaks down as follows:

 

​

​

                                                      

                                                        Amount                             Car Owner            ReKar

 

 

Renting Price                                 Set by the Car Owner            

​

​

Late penalties                                Detailed above                      

 

​

Penalty for smoking in                                                             

non-smoking Vehicle

 

 

Penalties related to                                                                  

Vehicle Cleanliness

​

 

 

Toll Gate Fees                                                                         

 

 

Traffic tickets

 

 

Penalty for non-compliance

with the terms or no-show at the

renting start date and time

 

 

Cancellation, more than

24 hours before the borrowing

start date

 

 

Penalty for cancellation,

less than 24 hours before

the borrowing date

​

​

Penalty for dispute

(Charged on the mistaken party)

​

​

 

Insurance Excess Value

“in case of accident/damage”

​

​

​

​

The amount resulting from the Service Fees collected by ReKar for business networking.

​

The fees collected by ReKar as follows:

​

ReKar collects the renting fees and a security deposit when the renting is confirmed;

At the end of the renting, the Car Owner and the Renter adjust the mileage estimate made at the beginning of the renting via the Website or App. ReKar then either collects or pays the difference between the amount initially collected and the total price of the transaction, taking into account the mileage adjustments;

ReKar pays 80% of the total renting price (and all other extra charges mentioned above) to the Car Owner within 45 business days of the end of the renting and dispute settlement (if any);

​​

ReKar may suspend payment to the Car Owner if additional verification is required or if the Renter makes a claim/dispute.

 

In this case, ReKar will only transfer the money to the Car Owner, if:

​

If an agreement is reached between the Car Owner and Renter and both the Car Owner and the Renter can provide proof of this agreement to ReKar; or

If a judicial authority has made a binding decision ordering the payment of all or part of the renting price (and other charges mentioned above) to the Car Owner or the return of all or part of that amount to the Renter.

 

C. Breakdown Management Fees
​
For any failure under normal use of the Vehicle by the Driver, the Owner is liable for $25 to ReKar fees.

​

These breakdown management fees are applied to the Driver if it is held responsible for the failure in the context of an expert commissioned by the Owner.

 

D. Damage Management Fees
​
By renting the car, the Renter is agreeing to adhere to all the terms of the Car Owner’s car insurance policy, and is responsible to pay the insurance excess value as defined by the Car Owner’s insurance policy. Also the Renter is responsible, in case of his/her mistake, to pay an additional compensation fee equal to 10% of the car insurance value (paid to Car Owner) plus an administration fee of $50 (paid to ReKar). This amount doesn’t waive the renter from the other financial and legal responsibilities as defined in these Terms.

One day borrowing rate amount
As defined in the Car Owner Insurance policy “shall be sent to Borrower”
One day borrowing rate amount
No penalty
80%
80%
80%
80%
100%
100%
20%
20%
20%
20%
50%
50%
50%
50%
100%
100%
$15
$15
$25
             
​
         </p>
    </div>
     
    <div>
      <button type="button" class="btn btn-danger btn_resize"><a class="btn_link" href"="">Privacy Policy</a></button>
    </div>
  </div>

</div>

  <!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>