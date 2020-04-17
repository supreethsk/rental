<?php
  include 'config_db.php';
  $razorpay_payment_id = $_POST['razorpay_payment_id'];
  echo $razorpay_payment_id;
include './razorpay-php/Razorpay.php';
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
$amt= $amount/100;

$query = "INSERT INTO `check_out`( `payment_id`, `payment_amouunt`, `card_id`, `status`, `email`, `contact`, `user_id`) VALUES ('$id','$amt','$card_id','$status','$email','$contact','$customer_id')";
		$success = mysqli_query($db,$query);
		$checkout_id = mysqli_insert_id($db);
		echo $db->error;
		if($success)
		{
			/*echo "Payment Successfull";*/
			$sql =  "INSERT INTO `carbooking`(`booking_type`, `source`, `destination`, `pickup_date`, `drop_date`, `pickup_time`, `vehicle_id`, `user_id`, `payment_id`) VALUES ('$book','$from','$to','$pick_up','$return','$pick_up_at','$vehicle_id','$customer_id','$checkout_id')";
			$result = mysqli_query($db,$sql);
			if (!$result){ 
             echo $db->error;
             echo "something went wrong";
                }
		}
		else {
			echo "Payment failed";
		}
?>