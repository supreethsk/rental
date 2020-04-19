<?php
// Load the database configuration file
include "config_db.php";
$id = $_GET['id'];
echo $id;
  $sql1 =" SELECT * FROM vendor where vendor_id='$id'";
 
 $query1 = mysqli_query($db,$sql1);
 $row1 = $query1->fetch_assoc() ;
 $vendor_id=$row1['vendor_id'];
 echo $vendor_id;

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
               
                $carname   = $line[0];
                $carprice  = $line[1];
                $carseat  = $line[2];
                $vendorname=$line[3];
              
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT * FROM vendor_det WHERE car_names = '".$line[0]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $db->query("UPDATE vendor_det SET car_names = '".$carname."', car_price = '".$carprice."', car_seat = '".$carseat."', vendor_name = '".$vendorname."'  WHERE car_names = '".$carname."'");

                }else{
                    // Insert member data in the database
                   $db->query("INSERT INTO vendor_det (car_names,car_price,car_seat,vendor_name,vendor_id) VALUES ('".$carname."', '".$carprice."', '".$carseat."',  '".$vendorname."','".$vendor_id."')");
                   echo "string";
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
/*header("Location: index.php".$qstring);*/