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
      <h3 class="h1_letter">Access and Other Conditions:</h3>
      <p class="term_of_p">A. Registration on the Website

​

The Services are only accessible to and can only be used by Registered Users on the Website. The customer using the website who are Minor /under the age of 18 shall not register as a User of the website and shall not transact on or use the website. (Age of consent is mentioned as per the applicable law)

​

To register on the Website and access the Services, Users must fulfill the following conditions:

The Car Owner:

​

Must be registered on the Website under their true identity and provide their true home address;

Must provide valid email address and telephone number where they can be reached;

He/she must be an adult over 18 years of age;

The customer using the website who are Minor /under the age of 18 shall not register as a User of the website and shall not transact on or use the website (Age of consent is mentioned as per the applicable law)

May not create several profiles on the Website;

May only offer Vehicles for renting that they own and will continue to own during the entire renting period, or for which they have a legal authorization from the owner and only Vehicles that they have the authority to lend;

May only offer Vehicles for renting that are in compliance with the laws and the regulations, Vehicles must be regularly maintained and serviced according to the manufacturer’s recommendations, and have all the required safety equipment. All of the Vehicle’s equipment must, to the best of the Car Owner’s knowledge, be in good working order, including tires, brakes, headlights, other lights, steering, and seat belts;

May only offer Vehicles for renting that are up-to-date with their technical inspection; If a Vehicle is awaiting a follow-up inspection, ReKar Services will not consider it to be up-to-date with its technical inspection, and it cannot be lent via ReKar, even if it may be driven legally;

May only offer Vehicles with no malfunction or which might affect the comfort of lending;

May only offer Vehicles for renting that have the obligatory annual insurance coverage in the country in which the Vehicle is lent;

May only offer Vehicles for renting for which the Car Owner possess at least two sets of door and ignition keys;

Must provide true, accurate, complete and current information in their Listing;

May not have been the subject of complaints from other Users or ReKar;

Must have accepted these Terms.

​

The Renter:

​

Must be registered on the Website under their true identity;

Must provide valid email address and telephone number where they can be reached;

Must be an adult over 21 years of age;

May not create several profiles on the Website;

Must hold a driving license that is valid in the country where the Vehicle is lent, and have held any valid driving license for at least one year;

Must have valid means of payment;

May not have defaulted on any payments under their obligations pursuant to the Terms (or a later version of the Terms) or refused payment under the Terms (or a later version of the Terms) on the Website, the Apps and the Services;

May not have committed any road traffic offences with a Vehicle rented through the Website, leading to more than two fines or one misdemeanor;

May not have been held liable for a road accident under civil or criminal law;

May not have had their driving license revoked within the past two years;

May not have had their auto insurance coverage denied or cancelled within the past three years;

May not have been the subject of complaints from other Users or ReKar;

May not be medically unable to drive;

Must be and remain the main and only driver of the Vehicle;

Must have accepted these Terms.

​​

ReKar reserves the right to accept or reject a Vehicle for any reason.

​

ReKar will send promotional emails and the customer can unsubscribe from this service by tapping on the unsubscribe link from the sent email.

​

In the event the User provides false information, ReKar may immediately suspend and/or cancel the Terms without notice or compensation. If the Renter provides false information, any insurance coverage provided by the Owner and/or ReKar insurance partners under Article 5.D will not be applicable. The User agrees to provide all of the supporting documents required by ReKar upon the latter’s request, and undertakes to regularly update his/her information.


ReKar reserves the right to accept or refuse any registration on the Website at its sole discretion, and without justification, and to suspend and/or remove the profile of any User who does not comply with these Terms.

In particular:

​

Any Member who displays inappropriate or disrespectful behavior towards other Members or ReKar Staff will be denied access to the Service.

 

B. Privacy and Sign-In
​
Upon registering on the Website, the User creates a profile and chooses a Username (corresponding to his/her email address) and a password associated with it (hereinafter referred together as the “Sign-In”). The Sign-In is personal, confidential and non-transferable.

The User undertakes to keep his/her sign-in secret and not to disclose it in any form whatsoever. If the User’s Sign-In has been lost or disclosed, he/she must promptly inform ReKar , who will then cancel and/or immediately update the Sign-In.

Until ReKar has been notified of the loss or disclosure of the Sign-In, or of its having been accessed by a third party, the User shall be entirely liable for any use made of it.

​

C. KYC (“Know Your Customer”) Policy
​
ReKar will review the data filled by the Car Owner on ReKar website and may conduct an additional identity check of the Car Owner at any time.

In this case, the Car Owner must send ReKar a valid copy of his/her identification papers, a copy of registration certificate of the Vehicle or Vehicles, proof of address as soon as possible and any other required documents. ReKar may temporarily suspend payments to the Car Owner if it cannot verify the latter’s identity.</p>
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