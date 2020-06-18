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
                  <?php 
                    $sql4 = "SELECT * FROM admin WHERE id = '$id'";
                    $result4 = mysqli_query($db,$sql4);
                    while ($row4 = $result4->fetch_assoc()) {?>
                <a href="profile.php" style="font-color:black" class="text-capitalize "><?php echo $row4['full_name'];?></a>
            <?php } ?>
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
 

  $sql="SELECT * FROM carbooking";
    $result=mysqli_query($db, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $booking_type[$i] = $row['booking_type'];
        $source[$i] = $row['source'];
        $destination[$i] = $row['destination'];
        $pickup_date[$i] = $row['pickup_date'];
        $drop_date[$i] = $row['drop_date'];
        $user_id[$i] = $row['user_id'];
        $payment_id[$i] = $row['payment_id'];
        $pickup_time[$i] = $row['pickup_time'];
        $booking_id[$i]=$row['booking_id'];
       
        $vehicle_id[$i]=$row['vehicle_id'];
        $user_id[$i]=$row['user_id'];
        $sql2="SELECT * FROM customer where customer_id='$user_id[$i]'";
        $sql1="SELECT * FROM vehicle where vehicle_id='$vehicle_id[$i]'";
    $result1=mysqli_query($db, $sql1);
    $result2=mysqli_query($db, $sql2);
    $row1=mysqli_fetch_assoc($result1);
         $vehicle_name[$i]=$row1['vehicle_name'];
         $vehicle_price[$i]=$row1['vehicle_price'];
    $row2=mysqli_fetch_assoc($result2);
         $customer_name[$i]=$row2['customer_name'];
         $total_payment[$i]=$row2['total_payment'];
         $due_amt[$i]=$row2['due_amount'];
         $amt_paid[$i]=$row2['amount_paid'];
         $email[$i]=$row2['cutomer_email'];
         $i++;
         
    }  

    function delete() {
      
  }

    //Start table
    echo '<table class="table">';
    echo "<thead><tr><th>Booking type</th><th>Source</th><th>Destination</th><th>Pick up date </th><th>Drop date</th><th>Vehicle Name</th><th>User name</th>
    <th>total payment</th><th>Pending amount</th><th>Amount paid</th><th>Pick up time</th><th>Status</th><th>message</th></tr></thead>";
    
    // Loop through the results from the database
    for ($i = 1; $i <=count($booking_type); $i++)
    {
    // Show entries
      ?>
        
            <tbody>
            <tr>
            <td><?php echo $booking_type[$i]; ?></td>
            <td><?php echo $source[$i];?></td>
            <td><?php echo $destination[$i];?></td>
            <td><?php echo $pickup_date[$i];?></td>
             <td><?php echo $drop_date[$i];?></td>
             <td><?php echo $vehicle_name[$i];?></td>
             <td><?php echo$customer_name[$i];?></td>
             <td><?php echo $total_payment[$i];?></td>
             <td><?php echo $due_amt[$i];?></td>
             <td><?php echo $amt_paid[$i];?></td>
             <td><?php echo $pickup_time[$i]?></td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal_<?php echo $i ?>'>
             Assignvendor
           </button></td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal<?php echo $i ?>'>
             Open modal
           </button></td>
            </tr>
            </tbody>

   
    <div class='modal' id='myModal<?php echo $i ?>'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title'> Message </h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <center>
        <div class='modal-body'>
        <span>Contact</span> <h3><?php echo $customer_name[$i];?></h3> <div>using</div>

         <a href='customermail.php?to= $email[$i]'><img class='icon' src='https://img.icons8.com/color/48/000000/gmail.png'/></a>
         or
         <a><img class='icon' src='https://img.icons8.com/color/48/000000/whatsapp.png'/></a>
        </div>
        </center>
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
        
      </div>
    </div>
  </div>


 
    <div class='modal' id="myModal_<?php echo $i ?>">
        <div class='modal-dialog'>
          <div class='modal-content'>
          
            <!-- Modal Header -->
                <div class='modal-header'>
                  <h4 class='modal-title'> vendor list </h4>
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                </div>
            
            <!-- Modal body -->
            <center>
                  <div class='modal-body'>
                  <h3><!-- <?php echo $booking_id[$i];?> --></h3>
                    <form action='search.php' method='post'>
                          
                          
                        <select name='vendorcity'>
                          <?php 
                          $sql1="select * from vendor";
                          $query=mysqli_query($db,$sql1);
                          while ($vendorrow=$query->fetch_assoc()) {
                              $vendor_city=$vendorrow['vendor_city'];
                            ?>  
                          
                          <option value="<?php echo $vendor_city; ?>"><?php echo $vendor_city; ?></option>
                        <?php  }?>
                          
                        
                        </select>
                        <input type='hidden' name='pname' value='<?php echo $booking_id[$i]; ?>'>
                        <button>presss</button>
                    </form>
                  </div>
            </center>
            <!-- Modal footer -->
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                  </div>
            
          </div>
        </div>
  </div>

      

       <?php }

    echo "</table>";?>
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