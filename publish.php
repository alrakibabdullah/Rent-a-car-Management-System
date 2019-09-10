<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
  {
$vehicletitle=$_POST['vehicletitle'];
$brand=$_POST['brandname'];
$vehicleoverview=$_POST['vehicalorcview'];
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seatingcapacity=$_POST['seatingcapacity'];
$vimage1=$_FILES["img1"]["name"];
$vimage2=$_FILES["img2"]["name"];
$vimage3=$_FILES["img3"]["name"];
$vimage4=$_FILES["img4"]["name"];
$airconditioner=$_POST['airconditioner'];
$powerdoorlocks=$_POST['powerdoorlocks'];
$antilockbrakingsys=$_POST['antilockbrakingsys'];
$brakeassist=$_POST['brakeassist'];
$powersteering=$_POST['powersteering'];
$driverairbag=$_POST['driverairbag'];
$passengerairbag=$_POST['passengerairbag'];
$powerwindow=$_POST['powerwindow'];
$cdplayer=$_POST['cdplayer'];
$centrallocking=$_POST['centrallocking'];
$crashcensor=$_POST['crashcensor'];
$leatherseats=$_POST['leatherseats'];
move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"],"img/vehicleimages/".$_FILES["img4"]["name"]);

$sql="INSERT INTO tblvehicles(VehiclesTitle,VehiclesBrand,VehiclesOverview,PricePerDay,FuelType,ModelYear,SeatingCapacity,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5,AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats) VALUES(:vehicletitle,:brand,:vehicleoverview,:priceperday,:fueltype,:modelyear,:seatingcapacity,:vimage1,:vimage2,:vimage3,:vimage4,:vimage5,:airconditioner,:powerdoorlocks,:antilockbrakingsys,:brakeassist,:powersteering,:driverairbag,:passengerairbag,:powerwindow,:cdplayer,:centrallocking,:crashcensor,:leatherseats)";
$query = $dbh->prepare($sql);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':brand',$brand,PDO::PARAM_STR);
$query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);
$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
$query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
$query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
$query->bindParam(':vimage3',$vimage3,PDO::PARAM_STR);
$query->bindParam(':vimage4',$vimage4,PDO::PARAM_STR);
$query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
$query->bindParam(':powerdoorlocks',$powerdoorlocks,PDO::PARAM_STR);
$query->bindParam(':antilockbrakingsys',$antilockbrakingsys,PDO::PARAM_STR);
$query->bindParam(':brakeassist',$brakeassist,PDO::PARAM_STR);
$query->bindParam(':powersteering',$powersteering,PDO::PARAM_STR);
$query->bindParam(':driverairbag',$driverairbag,PDO::PARAM_STR);
$query->bindParam(':passengerairbag',$passengerairbag,PDO::PARAM_STR);
$query->bindParam(':powerwindow',$powerwindow,PDO::PARAM_STR);
$query->bindParam(':cdplayer',$cdplayer,PDO::PARAM_STR);
$query->bindParam(':centrallocking',$centrallocking,PDO::PARAM_STR);
$query->bindParam(':crashcensor',$crashcensor,PDO::PARAM_STR);
$query->bindParam(':leatherseats',$leatherseats,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Vehicle posted successfully";
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
<style media="screen">
*{
  margin: 0;
  padding: 0;
}
  .btntb{
    margin-right:20px;"
  }
  .form-inline{
    margin-left: 9%;
    
  }
  .jumbotron{
    background-color: #c4c1c0;
  }
  .navbar{
    background-color: #dbcbca;
  }
  .checkbox .cr,{
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}
</style>
</head>
<body>
<<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
      <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1><?php   echo htmlentities($result->PageName); ?></h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li><?php   echo htmlentities($result->PageName); ?></li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">

      <h2><?php   echo htmlentities($result->PageName); ?></h2>
      <p><?php  echo $result->detail; ?> </p>
    </div>
   <?php } }?>
  </div>
</section>
   <div class="container">
      <div class="car_list jumbotron">
        <h3>List your car here...</h3>
      </div>
      <div class=" jumbotron detail_car">
        <nav class="navbar navbar-light ">
          <form class="form-inline">
            <button class=" btntb btn btn-sm btn-outline-success" type="button"><a style="color: white;" href="#vDetails">Vehicle Details</a></button>
            <button class="btntb btn btn-sm btn-outline-success" type="button"><a style="color: white;" href="vechilespictures.php">Vehicle Pictures</a></button>
            <button class=" btntb btn btn-sm btn-outline-success" type="button"><a style="color: white;" href="publish.php">Documents</a></button>
            <button class="btntb btn btn-sm btn-outline-success" type="button"><a style="color: white;" href="value.php">Availability</a></button>
            <button class="btntb btn btn-sm btn-outline-success" type="button"><a style="color: white;" href="location.php">Location</a></button>
          </form>
        </nav>
        <div style="margin-top: 0px;" id="vDetails" class="container jumbotron">
      <h1>Car Details</h1>
   <hr>
    <h5>BASIC INFO</h5>
    <form>
      <div class=" container form-group">
        <div class="row">
          <label for="title" class="col-sm-2 col-form-label">Vehicle Title</label>
          <div class="col-sm-4">
              <input type="text" name="vehicletitle" class="form-control" required>
            </div>
            <label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
        <div class="col-sm-4">
          <select class="selectpicker" name="brandname" required>
              <option value=""> Select </option>
             <?php $ret="select id,BrandName from tblbrands";
             $query= $dbh -> prepare($ret);
             //$query->bindParam(':id',$id, PDO::PARAM_STR);
             $query-> execute();
             $results = $query -> fetchAll(PDO::FETCH_OBJ);
             if($query -> rowCount() > 0)
             {
            foreach($results as $result)
            {
             ?>
          <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?></option>
             <?php }} ?>

         </select>
           </div>
            </div>
        </div><br>
        <div style="margin-top:10px; margin-bottom:10px;">
          <div  class="form-group">
            <label class="col-sm-2 control-label">Vehical Overview</label>
           <div class="col-sm-10">
          <textarea class="form-control" name="vehicalorcview" rows="#"></textarea>
         </div>
         </div>
        </div>
         
         <div style="margin-top:10px; margin-bottom:10px;" class="row">
           <div class="form-group ">
            <label class="col-sm-2 control-label">Price Per Day(in USD)</label>
             <div class="col-sm-4">
             <input type="text" name="priceperday" class="form-control" required>
             </div>

             <label class="col-sm-2 control-label">Select Fuel Type</label>
             <div class="col-sm-4">
                  <select class="selectpicker" name="fueltype" required>
                      <option value=""> Select </option>
                     <option value="Petrol">Petrol</option>
                     <option value="Diesel">Diesel</option>
                     <option value="CNG">CNG</option>
                </select>
          </div>
     </div>
         </div>

     <div style="margin-top:10px; margin-bottom:10px;" class="form-group row">
     <label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
     <div class="col-sm-4">
    <input type="text" name="modelyear" class="form-control" required>
     </div>
     <label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
      <div class="col-sm-4">
     <input type="text" name="seatingcapacity" class="form-control" required>
    </div>

     <div class="form-group">
    <div class="col-sm-12">
     <h4><b>Upload Images</b></h4>
     </div>
     </div>
    
    <div class="form-group">
     <div class="col-sm-4">
      Image 1 <span style="color:red">*</span><input type="file" name="img1" required>
      </div>
     <div class="col-sm-4">
     Image 2<span style="color:red">*</span><input type="file" name="img2" required>
     </div>
     <div class="col-sm-4">
     Image 3<span style="color:red">*</span><input type="file" name="img3" required>
     </div>
     </div>

      <div class="form-group">
      <div class="col-sm-4">
     Image 4<span style="color:red">*</span><input type="file" name="img4" required>
     </div>
   

    </div>

    </div>
  <div class="hr-dashed"></div>

  <div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body">


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
<label for="airconditioner"> Air Conditioner </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
<label for="powerdoorlocks"> Power Door Locks </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
<label for="antilockbrakingsys"> AntiLock Braking System </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
<label for="brakeassist"> Brake Assist </label>
</div>
</div>



<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersteering" name="powersteering" value="1">
<input type="checkbox" id="powersteering" name="powersteering" value="1">
<label for="inlineCheckbox5"> Power Steering </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
<label for="driverairbag">Driver Airbag</label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
<label for="passengerairbag"> Passenger Airbag </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
<label for="powerwindow"> Power Windows </label>
</div>
</div>


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
<label for="cdplayer"> CD Player </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
<label for="centrallocking">Central Locking</label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
<label for="crashcensor"> Crash Sensor </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="leatherseats" name="leatherseats" value="1">
<label for="leatherseats"> Leather Seats </label>
</div>
</div>
</div>




                      <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                          <button class="btn btn-default" type="reset">Cancel</button>
                          <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
                        </div>
                      </div>
                         <button class="btn btn-primary" name="submit" type="submit"><a href="#linkToVehicleDetail"><a href="vechilespictures.php">NEXT</a></button>


                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          

          </div>
        </div>
        
      

      </div>
    </div>
  </div>

  <!-- Loading Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>
 </body>
 </html>
      </div>

    </div> 
<<!--Footer -->
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
