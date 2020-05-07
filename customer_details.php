<?php
include 'config_db.php';
$id=$_GET['id'];
$from=$_GET['from'];
$to=$_GET['to'];
$pick_up=$_GET['pick_up'];
$return=$_GET['return'];
$pick_up_at=$_GET['pick_up_at'];
$book=$_GET['book']; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navi2">
        <div class="container">
        <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SPECIAL OFFER</a>
      </li>
    </ul>
  </div>
        </div>
    </nav>



    <?php
    $sql =" SELECT * FROM vehicle where vehicle_id='$id'";
 
 $query = mysqli_query($db,$sql);
 while ($row = $query->fetch_assoc()) 
 {
   $vehicle_name = $row['vehicle_name'];
   echo $vehicle_name;
   $vehicle_price = $row['vehicle_price'];
   echo $vehicle_price;
 }
 ?>
 <div class="container">
	<div class="row m-0 mt-40">

		<div class="col-5 p-0">
		<div class="form_wrap">
      <?php echo $vehicle_price; 
             
        $gst_amt=$vehicle_price-($vehicle_price*100/(100+5));
        echo $gst_amt;
        $payble_amt=$vehicle_price+$gst_amt;
        echo "\nx"  ;
        echo $payble_amt;
      ?>
		<form action="check_out.php?id=<?php echo $id;?>&from=<?php echo $from; ?>&to=<?php echo $to; ?>&pick_up=<?php echo $pick_up;?>&return=<?php echo $return ?>;&pick_up_at=<?php echo $pick_up_at ?>&book=<?php echo $book; ?>" method="post">
			<div class="dis">	
		<h2 class="form_head mb-3">Make your trip</h2>
               
                <div class="form-group">
                    <label class="label form_label">Name</label>
                    <input type="text"  name="name" class="form-control" placeholder="User name">
                </div>
                <div class="form-group">
                    <label class="label form_label">Email Id</label>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
				</div>
				<div class="form-group">
                    <label class="label form_label">Phone No</label>
                    <input type="text" name="phone" class="form-control" placeholder="phone number">
				</div>
				<div class="form-group">
                    <label class="label form_label">Address</label>
                    <input type="text" name="adresss" class="form-control" placeholder="Address...">
				</div>
				
                <div style="text-align: center;">
                <div class="form-group mt-3">
                    <input type="button" class="btn btn-primary py-3 px-4 but" value="proceed">
                </div>
				</div>
			</div>
				<div class="dis1" style="display: none">
			<div class="mb-2">
				<div class="row mb-2">
				<span style="cursor: pointer;" class="form_label ml-auto bk"><i class="fa fa-arrow-left mr-1"></i>Back</span>
				</div>
				<div class="row m-0 mb-2 justify-content-center">
				<h2 class="form_head">PAYMENT</h2>
				</div>
				<div class="ml-5">
                <div class="custom-control custom-radio  mr-2">
                       
                        <input type="radio" name="payment_type" value="<?php echo round($payble_amt/2); ?>" class="custom-control-input round" id="defaultChecked" name="defaultExampleRadios" checked>
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultChecked">Pay ₹ <?php echo round($payble_amt/2); ?> now and rest after trip</label>
                        </div>

                       

                        <!-- Default checked -->
                        <div class="custom-control custom-radio mr-2">
                        <input type="radio" name="payment_type" value="<?php echo round($payble_amt); ?>" class="custom-control-input check" id="defaultUnchecked" name="defaultExampleRadios">
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultUnchecked">Pay full amount (<?php echo round($payble_amt); ?>) now</label>
                        </div>
                   
                        <div class="custom-control custom-radio">
                        <input type="radio" name="payment_type" value="cashondeliver" class="custom-control-input mul" id="defaultUnchecked2" name="defaultExampleRadios">
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultUnchecked2">Pay driver during the trip (<?php echo round($payble_amt);?>)</label>
						</div>
						
						<div class="custom-control custom-radio">
                        <input type="radio" name="payment_type" value="<?php echo $vehicle_price; ?>"  class="custom-control-input mul" id="defaultUnchecked3" name="defaultExampleRadios">
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultUnchecked3">Pay With Bank Reward Points</label>
                        </div>
                        <div class="custom-control custom-radio">
                        <input type="hidden" name="payble_amt" value="<?php echo round($payble_amt); ?>"  class="custom-control-input mul" id="defaultUnchecked3" name="defaultExampleRadios">
                        
                        </div>
				</div>
						</div>
						<div style="text-align: center;">
                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary py-3 px-4 but1" value="Check Out">
                </div>
                </div>
						
</div>
			</form>
			



			</div>
			</div>
			<div class="col-1"></div>
			<div class="col-6">
			<div class="form_wrap">
			<h2 class="form_head mb-3 text-center">Your Booking Details</h2>
			<div class="row m-0">
				<div class="col-4"><label class="label form_label">Itinerary :</label></div>
				<div class="col-8"><span class="ml-3 mr-2"><?php echo $from;echo ">";echo $to; ?></span><i class="fa fa-check-circle check"></i></div>
			</div>
			<div class="row m-0">
				<div class="col-4"><label class="label form_label">Pickup Date :</label></div>
				<div class="col-8"><span class="ml-3 mr-2"><?php echo $pick_up; ?></span><i class="fa fa-check-circle check"></i></div>
			</div>
			<div class="row m-0">
				<div class="col-4"><label class="label form_label">Return Date :</label></div>
				<div class="col-8"><span class="ml-3 mr-2"><?php echo $return; ?></span><i class="fa fa-check-circle check"></i></div>
			</div>
			<div class="row m-0">
				<div class="col-4"><label class="label form_label">Car Type :</label></div>
				<div class="col-8"><span class="ml-3 mr-2"><?php echo $vehicle_name; ?></span><i class="fa fa-check-circle check"></i></div>
			</div>
			<div class="row m-0">
				<div class="col-4"><label class="label form_label">Total Fare :</label></div>
				<div class="col-8"><span class="ml-3 mr-2"><?php echo $vehicle_price; ?></span><i class="fa fa-check-circle check"></i></div>
			</div>
			</div>
			</div>
		</div>
		</div>
    <?php include 'footer.php';?>

		<script>
    
    $(document).ready(function(){
      $(".but").click(function(){
        $(".dis").css("display","none");
		$(".dis1").css("display","block");
      });
	  $(".bk").click(function(){
        $(".dis").css("display","block");
		$(".dis1").css("display","none");
      });

    });
    </script>
</body>
</html>

