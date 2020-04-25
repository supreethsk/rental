<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
</head>
<body>
<?php

include "config_db.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$to=$_GET['id'];
$vendor_id=$_GET['vendor_id'];

$mail= new PHPMailer;
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'suanarora97@gmail.com';
$mail->Password = 'supreeth@123';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
$mail->setFrom('pavitra@knobly.com', 'Aywa');
$mail->addAddress($to);
$mail->Subject = 'Aywa';
$mail->isHTML(true);
$mailContent ="heloo";
$mail->Body = $mailContent;
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
  $sql="select * from vendor where vendor_id='$vendor_id'";
  $query=mysqli_query($db,$sql);
  
 while($row = $query->fetch_assoc()) {
   $vendorid=$row['vendor_id'];
   $vendor_name=$row['full_name'];
   $vendor_phone=$row['phone'];
   $vendor_email=$row['email'];
   $vendor_city=$row['vendor_city'];
     
 
$query1 = "INSERT INTO `vendor_req`(`request_id`, `name`, `phone_no`, `email`, `city`) VALUES ('$vendorid','$vendor_name','$vendor_phone','$vendor_email','$vendor_city')";
    $success = mysqli_query($db,$query1);
if($success==true){
       echo "1";}
 }}?>
<div class="row">
			<div class="col-md-12 col-xl-12 col-sm-12 col-xs-12 ">
				<div class=" d-flex justify-content-center mt-5">
						<img src="" width="180" class="mx-auto">
					</div>
				<p style="text-align: center;font-weight: bold;font-size: 20px;margin-top:50px;margin-bottom: 20px;">Message sent  Sucessfully</p> 
				<!-- <p style="text-align:center;font-size: 15px;margin-bottom: 20px;">If you want to send more ,click below button</p> -->
				<div class=" d-flex justify-content-center">
					<a style="background-color:#189eb5;color: white;" href="index.php" class="btn mx-auto" >Back to dashboard</a>
				</div>
					</div>
	</div>
	</body>
</html>