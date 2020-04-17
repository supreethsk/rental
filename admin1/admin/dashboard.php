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
         $i++;
         
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
        echo    
            "
            <tbody>
            <tr>
            <td>$booking_type[$i]</td>
            <td>$source[$i]</td>
            <td>$destination[$i]</td>
            <td>$pickup_date[$i]</td>
             <td>$drop_date[$i]</td>
             <td>$vehicle_name[$i]</td>
             <td>$customer_name[$i]</td>
             <td>$payment_type[$i]</td>
             <td>$pickup_time[$i]</td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>
             Assignvendor
           </button></td>
             <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal$i'>
             Open modal
           </button></td>
            </tr>
            </tbody>";

    echo "
    <div class='modal' id='myModal$i'>
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
        <span>Contact</span> <h3>$customer_name[$i]</h3> <div>using</div>

         <a href='#'><img class='icon' src='https://img.icons8.com/color/48/000000/gmail.png'/></a>
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
";
       

 echo "
    <div class='modal' id='myModal'>
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
        <h3>$booking_id[$i];</h3>
           <form action='vendorasign.php?id=$booking_id[$i]' method='post'>
                
              <input type='text' name='id'>
              <input type='hidden' name='pname' value='$booking_id[$i]'>
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
";
      

        }

    echo "</table>";

 ?> 