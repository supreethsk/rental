<?php
  include 'config_db.php';
  $razorpay_payment_id = $_POST['razorpay_payment_id'];
  echo $razorpay_payment_id;
include 'razorpay-php/Razorpay.php';
use Razorpay\Api\Api;
   
$api = new Api('rzp_test_LRrNsT2wBroQga', 'uPdBfhM722ufqTLInmY3SwN2');
$payment = $api->payment->fetch($razorpay_payment_id);
$customer_id=$_GET['customer_id'];
$from=$_GET['from'];
$to=$_GET['to'];
$pick_up=$_GET['pick_up'];
$return=$_GET['return'];
$pick_up_at=$_GET['pick_up_at'];
$book=$_GET['book'];
$vehicle_id=$_GET['vehicle_id']; 
$id = $payment['id'];
$amount = $payment['amount'];
echo $vehicle_id;
$status = $payment['status'];
$card_id = $payment['card_id'];
$email = $payment['email'];
$contact = $payment['contact'];
$query = "INSERT INTO `check_out`( `payment_id`, `payment_amouunt`, `card_id`, `status`, `email`, `contact`, `user_id`) VALUES ('$id','$amount','$card_id','$status','$email','$contact','$customer_id')";
		$success = mysqli_query($db,$query);
		$checkout_id = mysqli_insert_id($db);
		echo $db->error;
		if($success)
		{
			/*echo "Payment Successfull";*/
			$sql =  "INSERT INTO `carbooking`(`booking_type`, `source`, `destination`, `pickup_date`, `drop_date`, `pickup_time`, `vehicle_id`, `user_id`, `payment_id`,`vendor_id`) VALUES ('$book','$from','$to','$pick_up','$return','$pick_up_at','$vehicle_id','$customer_id','$checkout_id','1')";
			$result = mysqli_query($db,$sql);
			if($result!=true){
				echo "1";
			}
			echo "<script>
				alert('Payment Successfull');
				
				</script>";
		}
		else {
			echo "Payment failed";
		}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail= new PHPMailer;
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'suanarora97@gmail.com';
$mail->Password = 'supreeth123';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
$mail->setFrom('suanarora97@gmail.com', 'Aywa');
$mail->addAddress($email);
$mail->Subject = 'confirming mail';
$mail->isHTML(true);
$mailContent = "<html>
<head></head>
<body>
<p>NAME : ".$pick_up."</p>
<p>EMAIL : ".$return."</p>
<p>PRODUCT NAME : ".$pick_up_at."</p>
</body>
</html>";
$mail->Body = $mailContent;
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
