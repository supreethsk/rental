<?php
include "config_db.php";
$id=$_GET['id'];
$name=$_POST['name'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];
echo $id;
echo $name;
echo $city;
echo $email;
echo $phone;
$query ="UPDATE vendor SET full_name='$name',vendor_city='$city',email='$email',phone='$phone' WHERE vendor_id='$id'";
    $success = mysqli_query($db,$query);
if($success==true){
      echo "<script>
        alert('updated sucessfully');
        window.location.href='vendor.php';
        </script>";}
 
?>