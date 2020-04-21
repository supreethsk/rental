<?php
 include "config_db.php";

 ?>
  <table border="1" class="table">
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
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            
        ?>
            <tr>
                
                
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['vendor_city']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><a href="mailer.php?id=<?php echo $row['email']?>"><button>Request</button></a> </td> 
                    
                   
            </tr>
        <?php } }?>
        </tbody>
</table>
<table border="2" class="table">
    <thead class="thead-dark">
            <tr>
                
                <th>Car Name</th>
                <th>Car Price</th>
                <th>Car Seat</th>
                
                

            </tr>
        </thead>
        <tbody>
            <?php
        // Get member rows
        $result1 = $db->query("SELECT * FROM vendor_det ORDER BY vendor_det_id DESC");
        if($result1->num_rows > 0){
            while($row1 = $result1->fetch_assoc()){
            
        ?>
            <tr>
                
                
                <td><?php echo $row1['car_names']; ?></td>
                
                <td><?php echo $row1['car_price']; ?></td>
                <td><?php echo $row1['car_seat']; ?></td>
                    

            </tr>
        <?php } }?>
        </tbody>
</table>
