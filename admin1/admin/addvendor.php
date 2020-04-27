<?php
include "config_db.php";
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $city=$_POST['city'];
 $query = "INSERT INTO `vendor`( `full_name`, `email`, `phone`, `vendor_city`) VALUES ('$name','$email','$phone','$city')";
    $success = mysqli_query($db,$query);
if($success==true){
	echo "1";
	 echo "<script>
       window.history.back();alert ('added successfully');
       </script>";
}
?>