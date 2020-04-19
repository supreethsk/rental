<?php
  session_start();
  include 'config_db.php';
  $id = $_SESSION['vendor_id'];


?>
<table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
               
                <th>Booking type</th>
                <th>Pick up loaction</th>
                <th>Drop of location</th>
                <th>Pickup date</th>
                <th>drop date</th>
                <th>pick up time</th>
                <th>veendor id</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Get member rows
        $result = $db->query("SELECT * FROM carbooking where vendor_id='$id'");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            
        ?>
            <tr>

                <td><?php echo $row['booking_type']; ?></td>
                <td><?php echo $row['source']; ?></td>
                
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['pickup_date']; ?></td>
                  <td><?php echo $row['drop_date']; ?></td>
                   <td><?php echo $row['pickup_time']; ?></td>
                   <td><?php echo $row['vendor_id']; ?></td>
            </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>