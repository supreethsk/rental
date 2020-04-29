  <?php
 
include "config_db.php";
    $id=$_GET['id'];
    echo $id;

$query ="DELETE FROM `vehicle` WHERE vehicle_id='$id'";
    $success = mysqli_query($db,$query);
if($success==true){
       echo "<script>
        alert('updated sucessfully');
        window.location.href='vehicle.php';
        window.opener.location.reload();
        </script>";
    }
 
  ?>