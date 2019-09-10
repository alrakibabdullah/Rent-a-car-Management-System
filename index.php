<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Rekar Car Mangement System</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x14" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="50x50" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="200x200" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<style type="text/css">
 
      .para{
        color: white;
      }
      h2{
        text-align: center;
        color: white;
      }
      hr{
        height: 5px;
        width: 20%;
        color: white;
        margin-bottom: 20px;
        background-color:none;
      }
      .detail_buttons{
      
      }
      .h-4{
        margin-top: 10px;
        color: white;
      }
      .login_register{
        height: 50px;
      }
      #banner{
        background-image: url(img/banner-image.jpg);
      }
      h3{
        color: white;
      }
      .section-padding{
         background-image: url(img/bw.jpg);
         background-attachment: fixed;
         background-size: cover;
         width: 100%;

      }
      .h_2{
        color: white;
      }
      .ab{
         background-image: url(img/bw.jpg);
         background-attachment: fixed;
         background-size: cover;
         width: 100%;
      }
      .detail_buttons{
         text-align: center;
      }
      .index_image_1{
        height: 160px;
        width: 200px;
      }
</style>
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section style="margin-left: 0px;" id="banner" class="banner-section">
  <div class="container-fluid">
    <div class="div_zindex">
          <div class="banner_content row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-5">
                  <div style="background-color: grey;  height: 300px; width: 400px; margin-top: 20px; padding-left: 30px; padding-right: 30px; padding-top: 30px; margin-right: 50%;" class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your  Car </h5>
          </div>
          <div class="sidebar_filter">
            <form action="car-listing.php" method="post">
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option>Select Brand</option>

                  <?php $sql = "SELECT * from  tblbrands ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>  
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?></option>
<?php }} ?>
                 
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="fueltype">
                  <option>Select Fuel Type</option>
        <option value="Petrol">Petrol</option>
      <option value="Diesel">Diesel</option>
      <option value="CNG">CNG</option>
                </select>
              </div>
             
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
              </div>
            </form>
          </div>
        </div>
                </div>
                <div class="col-sm-1">
                  
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <h1 style="text-align: center;">BEST WORLDWIDE ONLINE CAR RENTAL SERVICE WITHOUT REFERRING TO ANY CAR RENTAL OFFICES</h1>
            <p style="text-align: center;">REFERRING TO ANY CAR RENTAL OFFICES </p>
            <a style="text-align: center; margin-left: 30%;" href="rent.php" class="btn">Searching For Car<span style="text-align: center;" class="angle_arrow"><i style="text-align: center; " class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            </div>
             </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 

    <div class="container-fluid ab">
       <div class="container">
         <h2 class="hrr">Renter<hr class="hr2"></h2>
         <div class="row justify-content-ennter">
           <div class="col-md-3">
             <img class="index_image_1" src="img/id.png" alt="">
             <h4 class="h-4">List your car</h4>
             <p class="para">Turn your car into a money-making machine, in less than 5 minutes.</p>
           </div>
           <div class="col-md-3">
             <img class="index_image_1" src="img/we_cover.png" alt="">
             <h4 class="h-4">You Are Covered</h4>
             <p class="para">With a renter's verification system and professional support center.</p>
           </div>
           <div class="col-md-3">
             <img class="index_image_1" src="img/hand.png" alt="">
             <h4 class="h-4">Meet The Renter</h4>
             <p class="para">Get to meet your "ReKar" renter and handover the keys.</p>
           </div>
           <div class="col-md-3">
             <img class="index_image_1" src="img/key.png" alt="">
             <h4 class="h-4">Relax & Get Rewarded</h4>
             <p class="para">Experience our safe and secure community, while enjoying extra income.</p>
           </div><br>
           <div class="detail_buttons">
         <a type="button" class="btn btn-warning" href="rent.php">See Details</a>
       </div>
         </div>
        
       </div><br>
       <br>
       <h2>Owner</h2><hr><br>
         <div class="row justify-content-ennter">
           <div class="col-md-3">
             <img class="index_image_1" src="img/car.png" alt="">
             <h4 class="h-4">List your car</h4>
             <p class="para">Turn your car into a money-making machine, in less than 5 minutes.</p>
           </div>
           <div class="col-md-3">
             <img class="index_image_1" src="img/meet.png" alt="">
             <h4 class="h-4">You Are Covered</h4>
             <p class="para">With a renter's verification system and professional support center.</p>
           </div>
           <div class="col-md-3">
             <img class="index_image_1" src="img/car_keys.png" alt="">
             <h4 class="h-4">Meet The Renter</h4>
             <p class="para">Get to meet your "ReKar" renter and handover the keys.</p>
           </div>
           <div class="col-md-3">
             <img class="index_image_1" src="img/reward.png" alt="">
             <h4 class="h-4">Relax & Get Rewarded</h4>
             <p class="para">Experience our safe and secure community, while enjoying extra income.</p>
           </div>
         </div><br>
         <div class="detail_buttons">
         <a type="button" class="btn btn-warning" href="list_car.php">See Details</a>
       </div><br>   
     </div>
</section>






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