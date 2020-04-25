<?php
 include "config_db.php";
  if(isset($_POST['submit'])){
 $vehiclename=$_POST['vehiclename'];
 $vehiclestatus=$_POST['vehiclestatus'];
 $price=$_POST['price'];
 echo $price;
$registercity=$_POST['registercity'];
echo gettype($registercity); 
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
$query = "INSERT INTO `vehicle`( `vehicle_name`, `vehicle_satus`, `vehicle_price`, `registercity`, `vehicle_image`) VALUES ('$vehiclename','$vehiclestatus','$price','$registercity','$file_name')";
    $success = mysqli_query($db,$query);
if($success==true){
       echo "dfj
       <script>
       window.history.back();
       </script>
       ";}}
 }
?>
