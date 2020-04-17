<?php
include "config_db.php";
 $vendor_id=$_POST['id'];
 $id=$_POST['pname'];

 $sql="UPDATE carbooking set vendor_id=$vendor_id where booking_id='$id' ";
 $query=mysqli_query($db,$sql);
 if($query==true){
 	 echo "<script>
        alert('updated sucessfully');
       
        </script>";}
?>