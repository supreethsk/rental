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
                <!-- <td><a href="mailer.php?id=<?php echo $row['email']?>"><button>Request</button></a> </td>  -->
                    
                   
            </tr>
        <?php } }?>
        </tbody>
</table>
<!-- <table border="2" class="table">
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
</table> -->
<form action="addvendor.php" method="post">
    <input type="text" name="name" placeholder="enter name">
    <input type="phone" name="phone" placeholder=" enter phone">
    <input type="email" name="email" placeholder="enter email">
    <input type="city" name="city" placeholder="entercity">
    <button>add vendor</button>
</form>
</body>
</html>