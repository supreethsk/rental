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
    left: -110px !important;
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
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-light" id="dash">Dashboard</a>
        <a href="vendor.php" class="list-group-item list-group-item-action bg-light" id="vendor">Vendor List</a>
        <a href="vehicle.php" class="list-group-item list-group-item-action bg-light" id="vehicle">Vehicle List</a>
        <a href="customer.php" class="list-group-item list-group-item-action bg-light" id="customer">Customer List</a>
        <a href="vendor_req.php" class="list-group-item list-group-item-action bg-light" id="customer">Request vendor</a>  
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

<a href="vehicle_form.php">Register New Vehicle</a>
<?php
 include "config_db.php";


  $sql="SELECT * FROM vehicle";
    $result=mysqli_query($db, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $vehicle_id[$i] = $row['vehicle_id']; 
        $vehicle_name[$i] = $row['vehicle_name'];
        $vehicle_satus[$i] = $row['vehicle_satus'];
        $vehicle_price[$i] = $row['vehicle_price'];
        $registercity[$i] = $row['registercity']; 
        $vehicle_image[$i]=$row['vehicle_image'];   
         $i++;   
    }  

    //Start table
    echo '<table class="table">';
    echo "<thead><tr><th>Vehicle id</th><th>Vehicle name</th>
    <th>Vehicle status</th>
    <th>Vehicle price</th>
    <th>Register city</th>
    <th style='width: 15%;'>Vehicle image</th></tr></thead>";

    // Loop through the results from the database
    for ($i = 1; $i <=count($vehicle_id); $i++)
    {
    // Show entries
        echo    
            "
            <tbody>
            <tr>
            <td>$vehicle_id[$i]</td>
            <td>$vehicle_name[$i]</td>
            <td>$vehicle_satus[$i]</td>
            <td>$vehicle_price[$i]</td>
            <td>$registercity[$i]</td>
             <td><img src='img/$vehicle_image[$i]'height=10% width=100%></img></td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal_$i'>modify</button>
            
            <a class='btn btn-primary ' href='delete.php?id=$vehicle_id[$i];'>delete</a></td>
            </tr>
            </tbody>";
        
 echo "<div class='modal' id='myModal_$i'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
<button type='button' class='close' data-dismiss='modal'>&times;</button>
</div>
           
            <!-- Modal body -->
            <div class='modal-body'>

<form action='update.php' method='post' enctype = 'multipart/form-data'>
<div class='form-group'>
 <label>VEHICLE NAME :</label>
 <input type='text' name='vehiclename' placeholder='eneter vehiclename'>
</div>
<div class='form-group'>
 <label>VEHICLE STATUS :</label>
 <input type='text' name='vehiclestatus' placeholder='staus'>
</div>
<div class='form-group'>
 <label>PRICE :</label>
 <input type='text' name='price' placeholder='price of vehicle'>

</div>
<div class='form-group'>
 <label>REGISTER CITY :</label>
 <input type='text' name='registercity' placeholder='entercity'>
   
   
</div>
<div class='form-group'>
  <input  type = 'file' name = 'file' />
</div>
<input type='hidden' name='pname' value='$vehicle_id[$i]'>
</div>
           
            <!-- Modal footer -->
            <div class='modal-footer'>
   
                    <button type='submit' name='submit' class='btn btn-primary'>Submit </button>
                     <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>";
      /* modal for delete*/
   
        }
   
    echo "</table>";
 ?>
 




   
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
  </body>
  
  </html>
 