<?php
session_start();
 include "config_db.php"; 
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                <p>
                  <?php 
                    $sql4 = "SELECT * FROM admin WHERE id = '$id'";
                    $result4 = mysqli_query($db,$sql4);
                    while ($row4 = $result4->fetch_assoc()) {?>
                <a href="profile.php" style="font-color:black" class="text-capitalize "><?php echo $row4['full_name'];?></a>
            <?php } ?>
                </p>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
      </div> 































<?php
 include "config_db.php";

 ?>


<a href="vendorform.php">Register New Vendor</a>
  <table class="table">
    <thead>
            <tr>
                
                <th>vendor Name</th>
                <th>Vendor City</th>
                <th>Vendor mail</th>
                
                <th>Vendor phone</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
        // Get member rows
            
        $result = $db->query("SELECT * FROM vendor ORDER BY vendor_id DESC");
        $i=1;
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            $i++;
        ?>
            <tr>
                
                
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['vendor_city']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                 <td><a href="" class="btn btn-info " data-toggle="modal" data-target="#myModal<?php echo $i ?>">Modify</a></td>
                 <td><a href="vendor_delete.php?id=<?php echo $row['vendor_id']; ?>" class="btn btn-info ">Delete</a></td>
           
                    
                   
            </tr>
            <div class="modal" id="myModal<?php echo $i ?>">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">

                    <h4 class="modal-title look">Enter vendor deatils</h4>
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
            <?php  echo $row['vendor_id']; ?>
            <!-- Modal body -->
            <div class="modal-body">
                  
<form action="vendor_update.php?id=<?php echo $row['vendor_id']; ?>" method="post">
<div class="form-group">
 <label>vendor Name :</label>
 <input type="text" class="form-control" name="name" placeholder="Enter vendor Name" required>
</div>
<div class="form-group">
 <label>vendor city :</label>
 <input type="text" class="form-control" name="city" placeholder="Enter Company" required>
</div>
<div class="form-group">
 <label>vendor email :</label>
 <input type="email" class="form-control" name="email" placeholder="Enter email" required>
</div>
<div class="form-group">
 <label>vendor Phone :</label>
 <input type="tel" class="form-control" name="phone" placeholder="Enter Phone" required>

 
            
            <!-- Modal footer -->
            <div class="modal-footer">
   
                    <button type="submit" name="submit" class="btn btn-primary">Submit </button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>
        <?php } }?>
        </tbody>
        

</table>





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
