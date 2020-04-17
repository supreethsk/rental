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
    <th>Vehicle image</th></tr></thead>";

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
             <td><img src='img/$vehicle_image[$i]'height=10% width=20%></img></td>
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
                 echo $vehicle_id[$i];

<form action='update.php' method='post' enctype = 'multipart/form-data'>
<div class='form-group'>
 <label> :</label>
 <input type='text' name='vehiclename' placeholder='eneter vehiclename'>
</div>
<div class='form-group'>
 <label>Pick Up :</label>
 <input type='text' name='vehiclestatus' placeholder='staus'>
</div>
<div class='form-group'>
 <label>Return :</label>
 <input type='text' name='price' placeholder='price of vehicle'>

</div>
<div class='form-group'>
 <label>Pick Up at :</label>
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
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
 </head>
 <body>

 <form action="addvehicle.php" method="post" enctype = "multipart/form-data">
    <input type="text" name="vehiclename" placeholder="eneter vehiclename">
    <input type="text" name="vehiclestatus" placeholder="staus">
    <input type="text" name="price" placeholder="price of vehicle">
    <input type="text" name="registercity" placeholder="entercity">
    <input class="" type = "file" name = "file" />
    <button name='submit' type="submit">submit</button>
</form>

   

  </body>
  
  </html>
 