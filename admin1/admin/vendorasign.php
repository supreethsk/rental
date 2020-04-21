<?php
include "config_db.php";
 $id=$_GET['id'];
 $booking_id=$_GET['bookingid'];

 $sql="UPDATE carbooking set vendor_id=$id where booking_id='$booking_id' ";
 $query=mysqli_query($db,$sql);
 if($query==true){
 	 echo "<script>
        alert('updated sucessfully');
       
        </script>";}
?>