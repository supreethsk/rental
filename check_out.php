<?php
include 'config_db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['adresss'];
$payment_type=$_POST['payment_type'];

echo $payment_type;
$id=$_GET['id'];
$from=$_GET['from'];
$to=$_GET['to'];
$pick_up=$_GET['pick_up'];
$return=$_GET['return'];
$pick_up_at=$_GET['pick_up_at'];
$book=$_GET['book'];
echo $to;
echo $pick_up;
echo $id;

$sql = "INSERT INTO customer (customer_name,cutomer_email,customer_phone,customer_address,payment_type) VALUES('$name','$email','$phone','$address','$payment_type')";
$result = mysqli_query($db,$sql);
$last_id = mysqli_insert_id($db);
if (!$result) {
echo $db->error;
}
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>payment</title>
    <style>
        .razorpay-payment-button {
            color : #ffffff !important;
            background-color: blue;
            border-color : #7266ba;
            font-size: 14px;
            padding: 18px;
           /* background-color: rgb(0,0,0); /* Fallback color */
  /*//background-color: rgba(0,0,0, 0.4); *//* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 20%;
  padding: 20px;
  text-align: center;
        }
        .logo{
            position: absolute;
            top: 30%;
            left: 45%;
        }
        .amount{
                position: absolute;
            top: 37%;
            left: 43%;
        }
    </style>
</head>
<body style="background-color: orange;">
    
               <a class="logo" href="#"><img src="logo.png" width="12%" height="auto"></a>
               <h3 class="amount">Payable Amount : <?php echo $payment_type?></h3>
<form action="success.php?customer_id=<?php echo $last_id;?>&from=<?php echo $from;?>&to=<?php echo $to; ?>&pick_up=<?php echo $pick_up; ?>&return=<?php echo $return; ?>&pick_up_at=<?php echo $pick_up_at;?>&book=<?php echo $book;?>&vehicle_id=<?php echo $id;?>" method="POST">

<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_LRrNsT2wBroQga" // Enter the Key ID generated from the Dashboard
    data-amount="<?php echo $payment_type*100;?>" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
    data-currency="INR"
    data-order_id=""//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order)
    data-buttontext="Pay with Razorpay"
    data-name="Away"
    data-description=""
    data-image="logo.png"
    data-prefill.name=""
    data-prefill.email=""
    data-prefill.contact=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
</body>
</html>