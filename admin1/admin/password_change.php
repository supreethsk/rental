<?php
session_start();
 include "config_db.php"; 
 $id = $_SESSION['id'];
 $password=$_POST['password'];
 echo $password;
 $query ="UPDATE admin SET password='$password'WHERE id='$id'";
    $success = mysqli_query($db,$query);
if($success==true){
      echo "<script>
        alert('updated sucessfully');
        window.location.href='index.php';
        </script>";}
?>