<?php
 include "config_db.php";

  $sql="SELECT * FROM customer";
    $result=mysqli_query($db, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $customer_id[$i] = $row['customer_id']; 
        $customer_name[$i] = $row['customer_name'];
        $customer_email[$i] = $row['cutomer_email'];
        $customer_phone[$i] = $row['customer_phone'];
        $customer_address[$i] = $row['customer_address'];
        $customer_payment[$i] = $row['payment_type'];
        
         $i++;
         
    }  

    //Start table
    echo '<table class="table">';
    echo "<thead><tr><th>Customer id</th><th>Customer name</th>
    <th>customer_email</th>
    <th>customer_phone</th>
    <th>customer_address</th>
    <th>customer_payment</th></tr></thead>";

    // Loop through the results from the database
    for ($i = 1; $i <=count($customer_id); $i++)
    {
    // Show entries
        echo    
            "
            <tbody>
            <tr>
            <td>$customer_id[$i]</td>
            <td>$customer_name[$i]</td>
            <td>$customer_email[$i]</td>
            <td>$customer_phone[$i]</td>
            <td>$customer_address[$i]</td>
            <td>$customer_payment[$i]</td>
            </tr>
            </tbody>";

        }

    echo "</table>"
 ?> 
