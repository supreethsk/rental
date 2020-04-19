<?php
include 'config_db.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$city=$_POST['city'];
	$loginquery = "INSERT INTO vendor(full_name,email,phone,password,vendor_city) VALUES('$name','$email','$phone','$password','$city')";
	$result=mysqli_query($db,$loginquery);
	echo $db->error;
	if(!$result)
	{
		echo "Database Error ";
	}
	else {
	echo "<script>
	alert('user added successfully');
	window.location.href = 'login.php';
	</script>";
	}
}
?>
