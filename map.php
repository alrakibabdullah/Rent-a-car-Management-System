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
<title>CarForYou - Responsive Car Dealer HTML5 Template</title>
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
<link rel="stylesheet" href="jquery.datetimepicker.min.css">
 <style>
 *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
       }
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
.body{
	 margin: 0;
	 padding: 0;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 height: 100vh;
	 font-family: 'Poppins', sans-serif; 
}
.calender
{
   width: 300px;
   height: auto;
   background: #fff;
   box-sizing: border-box;
   background-size: cover;
   box-shadow: 0 50px 50px rgba(0,0,0,.5);     

}
.calender .image
{
	width: 100%;
	height: 200px;
	background: url("img/11.jpg");
	background-size: cover;
	padding: 20px;
	box-sizing: border-box;
}
.calender .image h2,
.calender .image h3
{
	margin: 0;
	padding: 0;
	color: #fff;
	text-shadow: 0 2px 2px rgba(0,0,0,.2);
}
.calender .image h3
{
   font-weight: 500;
}
.calender .date{
	padding: 20px;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(25px, 1fr));
	grid-gap: 10px;
	box-sizing: border-box;
}
.calender .date div
{
   display: flex;
   justify-content: center;
   align-items: center;
   height: 25px;
   color: #262626;
}
.calender .date div.day
{
   font-weight: 700;
}
.calender .date div.day:first-child,
.calender .date div.number:nth-child(7n + 1)
{
	color: red;
}
.calender .date div.number.active,
.calender .date div.number:hover
{
	background: #009688;
	color: #fff;
	font-weight: 700;
	cursor: pointer;
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

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Map</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Map</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->
<div class="calender">
   <div class="image">
     <h2>22, Monday</h2>
     <h3>July|2019</h3>
   </div>
  <div class="date">
  	  <div class="day">S</div>
  	  <div class="day">M</div>
  	  <div class="day">T</div>
  	  <div class="day">W</div>
  	  <div class="day">T</div>
  	  <div class="day">F</div>
  	  <div class="day">S</div>
  	  <div class="number"></div>
  	  <div class="number"></div>
  	  <div class="number"></div>
  	  <div class="number"></div>
  	  <div class="number">1</div>
  	  <div class="number">2</div>
  	  <div class="number">3</div>
  	  <div class="number">4</div>
  	  <div class="number">5</div>
  	  <div class="number">6</div>
  	  <div class="number">7</div>
  	  <div class="number">8</div>
  	  <div class="number">9</div>
  	  <div class="number">10</div>
  	  <div class="number">11</div>
  	  <div class="number">12</div>
  	  <div class="number">13</div>
  	  <div class="number">14</div>
  	  <div class="number active">15</div>
  	  <div class="number">16</div>
  	  <div class="number">17</div>
  	  <div class="number">18</div>
  	  <div class="number">19</div>
  	  <div class="number">20</div>
  	  <div class="number">21</div>
  	  <div class="number">22</div>
  	  <div class="number">23</div>
  	  <div class="number">24</div>
  	  <div class="number">25</div>
  	  <div class="number">26</div>
  	  <div class="number">27</div>
  	  <div class="number">28</div>
  	  <div class="number">29</div>
  	  <div class="number">30</div>
  	  <div class="number">31</div>
  </div>
	
</div>
<div id="map" style="width:100%;height:400px">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58399.576498507595!2d90.41933589797391!3d23.81954024603205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara+Residential+Area%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1563615605032!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

     </div>
     <script>
        function myMap(){
          var mapOtions={
            center:new google.maps.LatLng(23.816687,90.429558),
            zoom:10,
            mapTypeId:google.maps.MapTypeId.HYBRID
          }
          var map=new google.maps.Map(dicument.getElementById("map"),mapOtions);
        }
     </script>
     <script>
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI4-PKih2reVE6uSg7trBN_S-_O9bcTLw&callback=mymap"
     </script>
     
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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->
</html>