<?php
// Load the database configuration file

session_start();
include 'config_db.php';

      $id = $_SESSION['vendor_id'];

       $sql1 =" SELECT * FROM vendor where vendor_id='$id'";
 
 $query1 = mysqli_query($db,$sql1);
 $row1 = $query1->fetch_assoc() ;
 $vendor_id=$row1['vendor_id'];
echo $vendor_id;
// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>
<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
<div class="row">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="dashboardaction.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <!-- Data list table --> 
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
               
                <th>Car Name</th>
                <th>Car Price</th>
                <th>Car Seat</th>
                <th>Vendor Name</th>
                <th>vendor id</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Get member rows
        $result = $db->query("SELECT * FROM vendor_det where vendor_id='$vendor_id'  ORDER BY vendor_det_id DESC");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            
        ?>
            <tr>

                <td><?php echo $row['vendor_det_id']; ?></td>
                <td><?php echo $row['car_names']; ?></td>
                
                <td><?php echo $row['car_price']; ?></td>
                <td><?php echo $row['car_seat']; ?></td>
                  <td><?php echo $row['vendor_name']; ?></td>
                   <td><?php echo $row['vendor_id']; ?></td>
            </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>