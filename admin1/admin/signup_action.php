<?php
include 'config_db.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$loginquery = "INSERT INTO admin(full_name,email,phone,password) VALUES('$name','$email','$phone','$password')";
	$result=mysqli_query($db,$loginquery);
	echo $db->error;
	if(!$result)
	{
		echo "Database Error ";
	}
	else {
	echo "<script>
	alert('user added successfully');
	window.location.href = 'index.php';
	</script>";
	}
}
?>
