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
<title>Rekar Car Management System</title>
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
      .wrapper-b-2{
        width: 1000px;
        margin:0 auto;
      }
      video{
        width:100%;
      }
      .bg-bg-2{
        background-image:url(img/bw.jpg);
        background-size:cover;
        background-attachment:fixed;
      }
      .btn-btnn-2{
        text-align:center;
        width:200px;
        position:middle;
        margin:20px 400px 60px 400px;
        height:50px;
      }
      .h-1{
        color:white;
        text-align:center;
        margin:30px;
      }
      .hr-one{
        height:3px;
      }
      .aa{
        color:white;
      }
      .h-4{
        margin-top:10px;
        color:white;
        text-align:center;
      }
      .image-img-2{
        width:100%;
        margin-top:20px;
      }
      .h-2{
        color:white;
        margin-top:10px;
      }
      .row-view-img{
        height: 160px;
        width: 200px;
        border-radius: 50%;
      }
    </style>
  </head>
  <body>
    <<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
    <div class="container-fluid bg-bg-2">
 
      <div class="wrapper wrapper-b-2">
        <img class="image-img-2" src="img/1.jpg" alt="">
        <button type="button" class="btn-btnn-2 btn btn-warning"><a class="aa" href="car-listing.php">StartListing...</a></button>
        <h1 class="h-1">HOW IT WORKS</h1><hr width-"30%" height-"3px" color="red"><br>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <img class="row-view-img" src="img/car1.jpg" alt="">
            <h4 class="h-4">LIST YOUR CAR</h4>
            <p class="h-4">All what you have to do is describe your car, upload some photos of it, and choose its availability days to gear up your earning-journey and turn your car from an idle object to a money-making machine.</p>
          </div>
          <div class="col-md-3">
            <img class="row-view-img" src="img/120.jpg" alt="">
            <h4 class="h-4">RESPOND TO REQUESTS</h4>
            <p class="h-4">Once a renter requests your car, ReKar will notify you and you will get to review the renter's profile and rating, before accepting or denying the request.</p>
          </div>
          <div class="col-md-3">
            <img class="row-view-img" src="img/099.jpg" alt="">
            <h4 class="h-4">SET UP A MEETING</h4>
            <p class="h-4">Coordinate with the renter to meet up and examine their license, give them your car keys, and let their driving experience start.</p>
          </div>
          <div class="col-md-3">
            <img class="row-view-img" src="img/money.jpg" alt="">
            <h4 class="h-4">RELAX AND GET REWARDED</h4>
            <p class="h-4">Enjoy a relaxed experience within a safe and secure community, all while enjoying extra income and better social life.</p>
          </div>
          <div class="col-md-3">
            <img class="row-view-img" src="img/key.jpg" alt="">
            <h4 class="h-4">PICK UP YOUR CAR</h4>
            <p class="h-4">Meet up with the renter to pick up your car and then rate your experience.</p>
          </div>
        </div>
        <div class="">
          <h1 class="h-2">List My Car For Rent</h1><hr height-"3px" color="red"><br>
          <br>
          <h3 class="h-2">01</h3><h5 class="h-2">Earn zero-risk, effort-free money at the comfort of your home.</h5>
          <h3 class="h-2">02</h3><h5 class="h-2">An ensured process of covering registered cars against all risks.</h5>
          <h3 class="h-2">03</h3><h5 class="h-2">Guaranteed process of screening and verifying the car users.</h5>
        </div>
        <button type="button" class="btn-btnn-2 btn btn-warning"><a class="aa" href="veich1.php">START YOUR JOURNEY</a></button>

      </div>
    </div>

    <!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>