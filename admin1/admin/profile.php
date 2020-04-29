<?php
session_start();
 include "config_db.php"; 
 $id = $_SESSION['id'];
 
?>
 <form action="password_change.php" method="post">
 	  <input type="text" name="password" placeholder="enter password">
 	  <input type="text" name="confirm password" placeholder="match password">
 	  <button>change password</button>
 </form>