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
  
  <title>Admin Dasboard</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">

<style>
  .user-image {
    float: left;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: -2px;
}
.my-dropdown-toggle::after {
    content: none !important;
}
.img-circle {
    border-radius: 50%;
}
.user-header>img {
    z-index: 5;
    height: 90px;
    width: 90px;
    border: 3px solid;
    border-color: transparent;
    border-color: rgba(255,255,255,0.2);
}
.user-header {
    height: 175px;
    padding: 10px;
    text-align: center;
}
.dropdown-menu {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    padding: 1px 0 0 0;
    border-top-width: 0;
    width: 280px;
    background-color: #3c8dbc;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: -90px !important;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #3c8dbc;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
}
.user-header>p {
    z-index: 5;
    color: #fff;
    color: rgba(255,255,255,0.8);
    font-size: 17px;
    margin-top: 10px;
}
.dropdown-menu>.user-footer {
    background-color: #f9f9f9;
}
.pull-left {
    float: left!important;
}
.pull-right {
    float: right!important;
}
  </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img style="width: 200px;" src="logo.png"></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" id="dash">Dashboard</a>
        <a href="vendor.php" class="list-group-item list-group-item-action bg-light" id="vendor">Vendor List</a>
        <a href="vehicle.php" class="list-group-item list-group-item-action bg-light" id="vehicle">Vehicle List</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="customer">Customer List</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
<div class="row m-0 p-3">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
        <li style="list-style:none;" class="dropdown user user-menu ml-auto">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">supreeth</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="logo.png" class="img-circle" alt="User Image">

                <p>
                  Supreeth - Admin<br>
                  <small> bangalore</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
      </div> 
        

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
