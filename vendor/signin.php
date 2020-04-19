<?php
session_start();
include 'config_db.php';
if (isset($_POST['submit'])) {
$user=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM vendor WHERE email='$user' AND password='$password'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row=$result->fetch_assoc())
	{
		$user_id=$row['vendor_id'];
        $_SESSION['vendor_id'] = $user_id;	
	}		
	echo ("<script>location.href='dashboard.php'</script>");
			
}
else
{
	echo "<h3><b>ERROR:</b> The username or password you entered is incorrect. </h3>";	
}
	
}
?>
