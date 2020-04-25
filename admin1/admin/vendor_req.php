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
        $result = $db->query("SELECT * FROM vendor_req");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            
        ?>
            <tr>
                
                
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone_no']; ?></td>
 
                    
                   
            </tr>
        <?php } }?>
        </tbody>
</table>

</body>
</html>