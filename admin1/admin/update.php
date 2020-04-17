  <?php
  if(isset($_POST['submit'])){
include "config_db.php";
    $id=$_POST['pname'];
    echo $id;
  
 $vehiclename=$_POST['vehiclename'];
 $vehiclestatus=$_POST['vehiclestatus'];
 $price=$_POST['price'];
 echo $price;
$registercity=$_POST['registercity'];
 if(isset($_FILES['file'])){
        // Where the file is going to be stored
        $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
     
      $tmp      = explode('.',$_FILES['file']['name']);
      $file_ext = strtolower(end($tmp));
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"img/".$file_name);
}
$query ="UPDATE vehicle SET vehicle_name='$vehiclename',vehicle_satus='$vehiclestatus',vehicle_price='$price',registercity='$registercity',vehicle_image='$file_name' WHERE vehicle_id='$id'";
    $success = mysqli_query($db,$query);
if($success==true){
      echo "<script>
        alert('updated sucessfully');
        window.location.href='vehicle.php';
        </script>";}}
 }
  ?>