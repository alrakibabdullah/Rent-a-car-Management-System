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
      <h3 class="h1_letter">Definitions</h3>
      <p class="term_of_p">“Listing”: Refers to the Car Owner’s listing of one or more Vehicles offered for renting via the Website, the App or the Services.
        “Renter”: Refers to an individual wishing to rent and be the main driver of a Vehicle for a short period, and has accepted our Terms of Service.

​

“Car Owner” or “Owner”: Refers to a legal or natural person wishing to lend his/her Vehicle to a Renter, with/without a driver.

​

“Member”: refers to a User who has accepted the Terms of Service and is registered on the Website, the App, or the Services.

​

“User”: refers to a natural or legal person using the Website, the App, or the Services.

​

“Vehicle” or “Car”: refers to a 4-wheel motor vehicle weighing less than 3.5 T, accommodating a maximum of 9 people and under 13 cubic meters in total volume. Motor homes are not accepted.

​

ReKar provides an online business networking platform that connects vehicle owners with drivers seeking to rent those vehicles. ReKar is accessible online including at ReKar.com (hereinafter the “Website”) and as an application for mobile devices (hereinafter the “App”). (ReKar’s websites, blog, and mobile applications are hereinafter collectively referred to as the “Services”). By accessing or using the Services, including by communicating with us or other ReKar users, you agree to comply with, and be legally bound by, the provisions of these Terms of Service (hereinafter the “Terms”), whether or not you become a registered user of the Services. These Terms govern your access to, and use of, the Services and constitute a binding legal agreement between you and ReKar.

​

The Car Owners, Renters and in general anyone using the Services via the Website or the Apps are referred to as the “Users”. The Users and ReKar are referred to together as the “Parties”.

​

“My ReKar” is the private area of the Website reserved for each User upon registering with the Website and accepting the Terms. It can be accessed by connecting with a personal sign-in, as described.</p>
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