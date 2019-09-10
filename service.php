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
      <h3 class="h1_letter">Definition of the Services:</h3>
      <p class="term_of_p">
           A. Linking
​
ReKar provides a business networking platform that matches Members looking for a Vehicle to rent with Members wishing to lend their Vehicles. ReKar is an intermediary, and not a party to the renting transaction conducted between the Members.

​

ReKar provides its Members with business networking tools. These tools enable Members to upload content, communicate with other Members, and make informed decisions about lending their Vehicles, or renting the Vehicle of another Member.

 

B. Renting Agreement
​
ReKar provides its Members a Vehicle Renting Agreement. A template of this agreement is available via the Website and/or the App.

​

This agreement contains a number of equitable rules and provisions required of the Car Owner and the Renter, allowing the renting process to take place smoothly.

​

ReKar is not a party of the Renting Agreement between the Car Owner and the Renter, and is therefore not bound by the obligations in the agreement and cannot be held liable for any violations thereof.

 

C. Payment Administration
​
ReKar manages the renting-related payments between Users via its payment administration partner. These payments may concern the renting price, for example, the mileage adjustment at the end of the renting, compensation for fuel levels, toll fees, traffic tickets or any other applicable charges. They may also concern any penalties that one Member may owe to another under the Renting Agreement.

​

ReKar’s payment service will not intervene in the case of court decisions following disputes between Users.

​

If you make a payment for our products or services on our website, the details you are asked to submit will be provided directly to our payment provider via a secured connection.

​

We accept payments online using Visa and MasterCard credit/debit card in any (agreed currency). The cardholder must retain a copy of transaction records.

​

Multiple renting requests, settlements, dispute handling requests, shipments and/or delivery may result in multiple postings to the cardholder’s monthly statement.

​

Any refunds will be done only through the Original Mode of Payment.

 

D. Insurance
​
ReKar’s requests that all cars in our network are insured and meeting the regulations of the country. It is the responsibility of every Car Owner to insure his/her car with full insurance coverage, and to fill in the requested data related to listing the car on ReKar website in the correct way.

​

ReKar does not directly or indirectly insure the renting undertaken on the platform and is not responsible on any damage caused by the renter. ReKar is only handling the process of listing the car information and its relevant documents, and the payment of the renter towards any damages as per the Car Owner insurance policy and the financial conditions set in these Terms.

 

E. Damages and Renter Responsibility
​
The Renter shall be responsible to the Car Owner and ReKar for any and all theft of, damages to, or the loss of and loss of use, a Car Owner’s Vehicle during a Renting Period. In all cases, where Car Owner’s insurance policy does not cover a claim or a claim is in excess of the coverage provided by Car Owner’s insurance policy, the Renter is liable for the entire amount of such claim, including the cost of replacement or repair of any involved vehicle and for any and all claims of any kind made by third parties.

 

F. Security Deposit Management
​
By using ReKar service, the renter agrees that ReKar will charge him/her a security deposit that will be deducted from the Renter payment method upon confirmation of the renting. The security deposit value is a variable amount, depending on the car value and the insurance policy provided by the Car Owner. This security deposit will be used to cover any penalties, insurance claims, and/or any other charges. In case the charges are above the security deposit amount, the Renter will be charged the extra amount during or after the renting. In case the charges are less than the security deposit amount, a refund for the rest of the amount will be done within 30 days after the renting settlement.
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