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
      <h3 class="h1_letter">Renting Process:</h3>
      <p class="term_of_p">
              A. Linking
​
Renters can consult the listings posted by Car Owners directly on the Website using the access and search tools provided. Renters may contact the Car Owners by phone to request additional information after the booking.

​

Once a Renter has found a suitable Vehicle, he/she simply sends a booking request to the Car Owner. Upon this, the Car Owner is notified of the booking request by email and has the option to decide whether or not to accept the renting request:

​

If the Car Owner accepts the renting request, the Renter is notified by email and pays the renting price. This payment must be made on the Website, via ReKar. Note: any offer to pay other than on the ReKar Website will be considered a violation of these Terms and may result in the suspension or deletion of the User’s account. The renting is confirmed when the payment has been made and the Car Owner has received confirmation by email.​

If the Car Owner does not accept the renting, the renter is notified by email.

​​

Once the location is confirmed between the Car Owner and the renter, the Car Owner is obliged to honor his/her lease.

​

If a Car Owner cancels a confirmed reservation ReKar reserves the right to exclude him/her from the platform - especially if this cancellation has caused harm to the Renter.

 

B. Before the Start of the Renting
​
Once the Service has put them into contact with each other, it is the Users’ responsibility to carry out the necessary verification at the agreed-upon Vehicle pick-up time, including:

​

For the Car Owner, these verification concern the identity of the Renter, the validity of his/her driving license, his/her address, the credit card information, which must be the same as the card used for payment on the Website. The Car Owner may be represented at the start of the renting by a third party duly authorized to conduct these checks;

​​

 

​The Car Owner may in no case turn his/her Vehicle over to the Renter if the latter fails any of these verification. The Car Owner must refuse the renting if:

 

​

 

 

The person wishing to take possession of the Vehicle is not the Renter;

The Renter provides a credit card that does not belong to him/her;

The Renter provides a driving license that does not authorize him/her to drive in the country where the Vehicle is registered. For this, it is the Car Owner's responsibility to inquire of the relevant authorities the special provisions concerning the rights of foreigners to drive in that country.

​​

The Car Owner may in no case turn his/her Vehicle over to the Renter if the latter fails any of these verification's. The Car Owner must refuse the Renting if:

The Renter must verify the identity of the Car Owner, the Vehicle registration and its license plates. The Renter must also check the condition of the renting Vehicle, in particular the safety equipment listed in Article 4.A.

​​

At the time of Vehicle pick-up, the Renter and the Car Owner verify, complete and sign the Renting Agreement together.

​

The Renter agrees to take the utmost care of the rented Vehicle and return it in the same condition it was in when he/she took possession of it. The Renter is liable for any damage caused to the Vehicle during the renting period, i.e. from the time he/she takes possession of it until the time he/she returns it. He/she alone is liable for any violations of the Highway Code that may be committed with the rented Vehicle during the renting period.

​

At the start of a renting, the Car Owner must deliver a clean Vehicle to the Renter (interior and exterior), except in the case of a last-minute renting.


 

C. During the Renting
​
ReKar offers Users certain information necessary for a good renting experience. This information is accessible via the Website or the Apps.


- Reporting an incident or problem

​

The Renter agrees to immediately report to the Car Owner any problems, breakdowns or accidents related to the Vehicle.


- Use of roadside assistance

​

Roadside assistance is the responsibility of the Car Owner. If the Car Owner is not reachable, the Renter can arrange a roadside assistance on the Car Owner’s expense. The above responsibility of the Car Owner is given that the Renter adheres to the car user guide, insurance terms and country regulations.

 

D. At the End of the Renting
​
Upon the return of the Vehicle, the Renter and the Car Owner check the condition of the Vehicle and then complete and sign the check-out report in the Renting Agreement. Both the Car Owner and the Renter must keep a copy of the Renting Agreement for at least one year.

​

In the event of any damage, the Car Owner has 7 days to report the damage to ReKar.

After this time limit, ReKar will no longer be able to process the request.


The Renter is not required to clean the Vehicle at the end of the renting, unless it has been heavily soiled:

​

Interior soiling: traces of mud on the carpet, sand, crumbs, etc.;

External soiling: dirt on the body due to travelling on muddy or dirt roads, etc.

​​

If the Vehicle is returned dirty, the Renter shall pay compensation to the Car Owner as provided for in Article 10. If the Vehicle requires professional cleaning (stained seats, ground-in dirt, etc.), the Renter must pay the invoice issued by the professional cleaner.

​

The Renter agrees to comply with the date and time of return agreed upon with the Car Owner. Any extension of the renting period must be made on the Website under the conditions described in the Renting Agreement.

​

If the Vehicle is not returned at the agreed-upon date and time, the flat-fee penalties provided for in Article 10 may be levied in the name and on behalf of the Car Owner.

​

If the Vehicle is not returned by the end of the renting period, the Car Owner must contact ReKar’s customer service via the contact information listed on the website.

​

In the event of a puncture, the tires proper repairing and/or replacement are the responsibility of the Renter. If the punctured tires must be changed, the Renter shall pay for the replacement of the punctured tires. If the flat tire is due to abnormal wear and tear of the tires, all costs will be borne by the Car Owner.

​

If the Vehicle has no spare wheel or device to change a flat tire and doesn’t have the option of driving on flat tires, then the costs of the roadside assistance and the tire replacement service will be charged to the Car Owner.

​

In case the car has the option of driving on flat tires, then it is the responsibility of the Renter to drive to nearest repair shop.

​

After the Vehicle is returned to the Car Owner, the Car Owner shall upload/submit the extra charges amounts (toll fees, traffic tickets and/or any other applicable charges) and the following required documents/evidences via ReKar platform:

​

The signed Renting Agreement;

Toll invoices (if any);

Traffic tickets evidence (if any);

Any other helpful documents required for the Renting settlement.

​​

The Car Owner has only 7 days at the end of the Renting to upload and submit the above required documents. If not uploaded and submitted, the Renting is considered as completed and the Car Owner has no right to demand any extra charge expense.

​

The Renter shall review, agree or dispute the submitted amount within 7 days after the Car Owner submission. In case of no action from the Renter’s side, the requested extra charges are accepted and the Renter agrees upon it.

​

In case of dispute request from the Car Owner’s or the Renter’s side, ReKar is supposed to review the case and get back to both sides. Penalty and ReKar administration fees apply.

​

The Users also have the opportunity to evaluate/rate each other on the Website and/or the Apps. Users can also evaluate each other if the Renting is cancelled.

ReKar is not responsible for User peer reviews. ReKar nonetheless reserves the right to remove any review left by a User if it violates the laws in force, does not comply with these Terms or is defamatory towards another User.
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