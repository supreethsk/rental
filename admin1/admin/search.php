<?php

 include "config_db.php";
$vendor_city=$_POST['vendorcity'];
$id=$_POST['pname'];
echo $vendor_city;
echo $id;


?>
<table border="1"class="table">
    <thead class="thead-dark">
            <tr>
                
                <th>vendor Name</th>
                <th>Vendor mail</th>
                 <th>Vendor phone</th>
                
                <th>Vendor City</th>
                
                
               
            </tr>
        </thead>
        <tbody>
          <?php
             $sql="select * from vendor where vendor_city  LIKE '%" . $vendor_city . "%'"; 
  $query=mysqli_query($db,$sql);
  
 while ($row = $query->fetch_assoc()) {
    $vendor_name  =$row['full_name'];
    $vendor_email=$row['email'];
    $vendor_phone=$row['phone'];
    $vendor_city=$row['vendor_city'];     
     $vendor_id=$row['vendor_id'];  

           ?>
           <tr>
             <td><?php echo $vendor_name;?></td>
              <td><?php echo $vendor_email;?></td>
               <td><?php echo $vendor_phone;?></td>
                <td><?php echo $vendor_city;?></td>
                <td><a href="sent.php?id=<?php echo $vendor_email;?>&vendor_id=<?php echo  $vendor_id;?>"><button>Request</button></a> </td> 
                 <td><a href="vendorasign.php?id=<?php echo $vendor_id; ?>&bookingid=<?php echo $id; ?>"><button>confirm</button></a> </td> 
           </tr>
         <?php } ?>
       </tbody>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/jquery.highlite.js"></script>
  <title></title>

  <style>
    .highlight {
background-color: yellow;
border-radius: .125em;
}

p{
display: none;
}

div > p:first-child{
display: -webkit-box;
}
.s{
 width: 100px; 
}
.line-clamp {
-webkit-line-clamp: 3;
-webkit-box-orient: vertical;
}
.truncate {
width: 50%;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
  </style>
</head>
<body>
<script>
var simple = '<?php echo $name; ?>';
var s = this.simple;
$(".content").highlite({
text: s
});
</script>

</body>
</html>
