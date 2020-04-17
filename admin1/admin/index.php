<?php
session_start();
include 'config_db.php';
/*$id = $_SESSION['id'];
*/global $current; 
    $current = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $current = strrchr($current , '/');
    $current = str_replace('.php', '', $current);
    $current = str_replace('/', '', $current);
    
   if(isset($_SESSION['id'])) { 
      $id = $_SESSION['id'];
   ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img style="width: 200px;" src="logo.png"></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" id="dash">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="vendor">Vendor List</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="vehicle">Vehicle List</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="customer">Customer List</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
      
        

      <div class="container-fluid">
        <div class="dashboard"  style="display: block;">
          <h1 class="mt-4">Dashboard</h1>

          <p><?php include "dashboard.php" ?></p>
        </div>
        <a href="vendor.php"><div class="vendor-list" style="display: none;">
          <h1 class="mt-4">Vendors</h1></a>
        </div>
        <a href="vehicle.php"><div class="vehicle-list" style="display: none;">
          <h1 class="mt-4">Vehicles</h1>
          
        </div></a>
       <div class="customer-list" style="display: none;">
          <h1 class="mt-4">Customers</h1>
          <p><?php include "customer.php" ?></p>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <?php } ?>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script>
$(document).ready(function(){
  $("#dash").click(function(){
    $(".dashboard").css("display","block");
    $(".vendor-list").css("display","none");
    $(".vehicle-list").css("display","none");
    $(".customer-list").css("display","none");
  });
  $("#vendor").click(function(){
    $(".dashboard").css("display","none");
    $(".vendor-list").css("display","block");
    $(".vehicle-list").css("display","none");
    $(".customer-list").css("display","none");
  });
  $("#vehicle").click(function(){
    $(".dashboard").css("display","none");
    $(".vendor-list").css("display","none");
    $(".vehicle-list").css("display","block");
    $(".customer-list").css("display","none");
  });
  $("#customer").click(function(){
    $(".dashboard").css("display","none");
    $(".vendor-list").css("display","none");
    $(".vehicle-list").css("display","none");
    $(".customer-list").css("display","block");
  });
});
</script>
</body>

</html>
