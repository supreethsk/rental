<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
 include "config_db.php";

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
         $payment_type[$i]=$row2['payment_type'];
         $email[$i]=$row2['cutomer_email'];
         $i++;
         echo $i;
    }  

    function delete() {
      
  }

    //Start table
    echo '<table class="table">';
    echo "<thead><tr><th>Booking type</th><th>Source</th><th>Destination</th><th>Pick up date </th><th>Drop date</th><th>Vehicle Name</th><th>User name</th>
    <th>payment</th><th>Pick up time</th><th>Status</th><th>message</th></tr></thead>";
    
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
             <td><?php echo $payment_type[$i];?></td>
             <td><?php echo $pickup_time[$i]?></td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target="#myModal_$i">
             Assignvendor
           </button></td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target="#myModal$i">
             Open modal
           </button></td>
            </tr>
            </tbody>

   
    <div class="modal" id="myModal$i">
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

       

 
    <div class='modal' id="myModal_$i">
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
        <h3><?php echo $booking_id[$i];?></h3>
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

 