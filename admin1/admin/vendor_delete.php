<?php 
include "config_db.php";
$id=$_GET['id'];
$query ="DELETE FROM `vendor` WHERE vendor_id='$id'";
    $result = mysqli_query($db,$query);
    if($result==true){
    	echo "<script>
        alert('deleted sucessfully');
        window.location.href='vendor.php';
        window.opener.location.reload();
        </script>";
    }
?>