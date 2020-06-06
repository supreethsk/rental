<?php
include 'config_db.php';
//let's start the session

//now, let's register our session variables

//finally, let's store our posted values in the session variables

/*$_SESSION['book'] = $_POST['book'];
$_SESSION['from'] = $_POST['from'];
$_SESSION['to'] = $_POST['to'];
$_SESSION['pick_up'] = $_POST['pick_up'];
$_SESSION['return'] = $_POST['return'];
$_SESSION['pick_up_at'] = $_POST['pick_up_at'];*/
if($_POST['book'] == "multiple"){
    $book=$_POST['book'];
    $from=$_POST['from'];
    $pick_up=$_POST['pick_up'];
    $return=$_POST['return'];
    $pick_up_at=$_POST['pick_up_at'];
    if(count($_POST['field_name'])===2){
        $to= $_POST['field_name'][0].">".$_POST['field_name'][1]; }
    elseif(count($_POST['field_name'])===3){
        $to= $_POST['field_name'][0].">".$_POST['field_name'][1].">".$_POST['field_name'][2]; 
    }
    elseif(count($_POST['field_name'])===4){
        $to= $_POST['field_name'][0].">".$_POST['field_name'][1].">".$_POST['field_name'][2].">".$_POST['field_name'][3]; 
    }
    elseif(count($_POST['field_name'])===5){
        $to= $_POST['field_name'][0].">".$_POST['field_name'][1].">".$_POST['field_name'][2].">".$_POST['field_name'][3].">".$_POST['field_name'][4]; 
    }
    elseif(count($_POST['field_name'])===6){
        $to= $_POST['field_name'][0].">".$_POST['field_name'][1].">".$_POST['field_name'][2].">".$_POST['field_name'][3].">".$_POST['field_name'][4].">".$_POST['field_name'][5]; 
    }
}
elseif($_POST['book'] == "roundtrip"){
$book=$_POST['book'];
$from=$_POST['from'];
$to=$_POST['to'];
$pick_up=$_POST['pick_up'];
$return=$_POST['return'];
$pick_up_at=$_POST['pick_up_at'];
$demo=$_POST['demo'];
}
elseif($_POST['book'] == "oneway"){
    $book=$_POST['book'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $pick_up=$_POST['pick_up'];
    $return=$_POST['return'];
    $pick_up_at=$_POST['pick_up_at'];
    }

/*echo $_POST['book'];
echo $_POST['from'];
echo $_POST['to'];
echo $_POST['pick_up'];
echo $_POST['return'];
echo $_POST['pick_up_at'];*/
?>

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
    <style>
        ul.social-icons li a {
    display: inline-block;
    margin: 0;
    width: 24px;
    height: 25px;
    background-color: #999;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    -o-border-radius: 50px;
    border-radius: 50px;
    text-decoration: none;
    text-align: center;
    transition: all .17s ease-in-out;
    -moz-transition: all .17s ease-in-out;
    -webkit-transition: all .17s ease-in-out;
    -o-transition: all .17s ease-in-out;
}

    </style>

 </head>
 <body>
 
 <?php 
      include 'header.php';
      ?>
   <div class="row m-0 data">
  <div class="container">
  <div class="row">
  <div class="col-4">
  
    <div class="mt-3">
        <span class="fw-600"><?php
    
$pieces = explode(" ",$from );
       
echo $pieces[0];
    ?></span>
        <span  class="mr-2 ml-2"> > </span>
        <span class="fw-600"> <?php
    echo $to;
    ?></span>
<span class="ml-2"> (<?php echo $book ?>)</span>
    </div>
    </div>
    <div class="col-7">
        <div class="row m-0">    
        <div style="display: grid" class="mr-5 ml-5">
            <span class="fw-600">pickup</span>
            <span><?php echo $pick_up ?></span>
        </div>
        <div style="display: grid" class="mr-5 ml-5">
            <span class="fw-600">return</span>
            <span><?php echo $return ?></span>
        </div>
        <div style="display: grid" class="mr-5 ml-5">
            <span class="fw-600">time</span>
            <span><?php echo $pick_up_at?></span>
        </div>
        </div>
    </div>
  </div>  
</div>
   </div>

</div>

<div class="">
    
    
<div class="row m-0">
    <div class="col-2">
    <img style="width:inherit;" src="2_2.png">
    </div>
    <div class="col-8">
        <div class="row">
    <?php
    $i=0;
$sql =" SELECT * FROM vehicle";
 
 $query = mysqli_query($db,$sql);
 while ($row = $query->fetch_assoc())
 {
    
    $car_name=$row['vehicle_name'];
    $car_price=$row['vehicle_price'];
    $car_image=$row['vehicle_image'];
    $i++;
    
    ?>
    <div class="col-6 p-0">
        <div class="row m-0 mt-4 p-3 ml-2 mr-2" style="border:1px solid black; border-radius:5px;">
            <div class="col-sm-5">
                <img src="<?php echo $car_image; ?>" class="img-fluid " style="margin-bottom:12px " alt="Tata Indigo">
                <span class="text-primary text-uppercase font-weight-bold pt-3"><?php echo $car_name; ?></span><br>
                <span class=" font-13">Sedan | AC | 4 Seats</span>
    
            </div>
            <div class="col-7">
                <div class="row m-0">
                    <div class="col-sm-6 p-0">
                    <div href="#" id="menu<?php echo $i?>" style="position:relative; color: #57a143;">Advance</div>
                        <strong class="font-22"><span class="fa fa-inr"></span> 1026</strong><br>
                        
                        <p class="flyout<?php echo $i?>" style="position:absolute;display:none;background-color: #ecf7e8;border: 1px solid #57a143;padding: 10px;z-index: 999999;border-radius: 5px;width:266%;"><span><strong class=" text-success">Advance :</strong><br>
                If basic amount is greater than Rs. 1000 for a day, at that time advance amount will be Rs. 1000/day otherwise advance amount will be basic amount per day. 
</span></p>
                    </div>
                    <div class="col-6 p-0">
                    <div id="menu_<?php echo $i?>" style="position:relative;color: #ec2020">Total amount</div> 
                    
                        <strong class="font-20 mr-2" ><span class="fa fa-inr"></span> <span><?php
                //     $number = $car_price;

                //     $txt = sprintf(" %1\$.2f
                //    <br>",$number);
                //    echo $txt;
                $tot = 9.75*$demo;
                echo $tot;
                   ?></span></strong>
                        
                        <p class="flyout_<?php echo $i?>" style="position:absolute;display:none;background-color: #f9e9e9;border: 1px solid #ec2020;padding: 10px;z-index: 999999;border-radius: 5px;min-width:292%;left: -306px;"><strong class="text-red">Fare Breakup :</strong><br />
                        Approx. Roundtrip distance : 280 Kms.<br />
                        Minimum charged distance :  &nbsp225 Kms / Day <br />
                        <span>Estimated Km charged :</span> <span> &nbsp450 Km X 9.75 Rs/Km</span> <span>= Rs. 4387.5 /-</span>
                        <span>Estimated Km charged :</span> <span> &nbsp450 Km X 9.75 Rs/Km</span> <span>=   Rs. 4387.5 /-</span>           
                        <span>Estimated Km charged :</span> <span> &nbsp450 Km X 9.75 Rs/Km</span> <span>= Rs. 4387.5 /-</span>
                        <br />   <em><b class='blue'>Extra Charges :</b> </em> <b>If you will use car/cab more than 450 Kms , extra charges as follows: </b><br />  After  <del class='text-danger' style='display:none;'>500</del>&nbsp450  Kms :<br />+   <label class='WebRupee'>Rs</label>&nbsp;<del class='text-danger' style='display:none;'>9.25</del>&nbsp9.75 per km charges<br /> <br /> <em><b class='blue'>CCR Transparency :</b> </em>1. One day means one calendar day (12 midnight to 12 midnight).<br />2. Kilometers and Hours will be calculated from garage to garage.<br />3. Toll, Parking, State Border Charges etc. not include in the above cost, you have to pay extra as applicable. <br />4.AC will be switched off in hilly areas.<br>5.Driver would take care of his food and stay. <br>Note: If driver drive vehicle between 09:00 PM to 06:00 AM, Night charges Rs.250/- will be applicable.</span></a>
  
                    </p>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-sm-6 p-0 mt-4">
                        <strong class="font-16 text-danger mr-2" style="display:none;"> <span class="fa fa-inr"></span> <del>9.25</del></strong>
                        <strong class="font-16 text-primary"><span class="fa fa-inr"></span> 9.75 </strong><br>
                        
                        <strong>Per KM</strong>
                    </div>
                    <div class="col-sm-6 p-0 mt-auto">
                        <a href="customer_details.php?id=<?php echo $row['vehicle_id'];?>
                                    &from=<?php echo $from;?>
                                    &to=<?php echo $to;?>
                                    &pick_up=<?php echo $pick_up;?>
                                    &return=<?php echo $return;?>
                                    &pick_up_at=<?php echo $pick_up_at;?>
                                    &book=<?php echo $book;?>
                                    ">   
                                    <button class="buttonselect">BOOK NOW</button> </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
       
        <script>
       $("#menu<?php echo$i?>").hover(function(){
    $('.flyout<?php echo$i?>').show();
},function(){
    $('.flyout<?php echo$i?>').hide();
});
$("#menu_<?php echo$i?>").hover(function(){
    $('.flyout_<?php echo$i?>').show();
},function(){
    $('.flyout_<?php echo$i?>').hide();
});
        </script>
    <?php } ?>
    </div>
    </div>
    <div class="col-2">
    <img style="width:inherit;" src="1_1.png">
    </div>   
          </div>
          <div style="margin-top:10%;">
          <?php 
      include 'footer.php';
      ?>
          </div>
          
        </div>
        
      </div>
      
      <div>
      
        </div>





      <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> 
        </script> 
        <script src= 
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> 
        </script> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        
        <script> 
            $(document).ready(function() { 
  
                $(function() { 
                    $("#my_date_picker1").datepicker({}); 
                }); 
  
                $(function() { 
                    $("#my_date_picker2").datepicker({}); 
                }); 
  
                $('#my_date_picker1').change(function() { 
                    startDate = $(this).datepicker('getDate'); 
                    $("#my_date_picker2").datepicker("option", "minDate", startDate); 
                }) 
  
                $('#my_date_picker2').change(function() { 
                    endDate = $(this).datepicker('getDate'); 
                    $("#my_date_picker1").datepicker("option", "maxDate", endDate); 
                })

                $('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '9:00pm',
    defaultTime: 'time',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
}); 
            }) 
        </script> 
        <script>
    
    $(document).ready(function(){
      $("#outstation").click(function(){
        $("#outstation").css("background-color"," #fc983c");
        $("#local").css("background-color"," white");
        $("#airport").css("background-color"," white");
        $(".outstation").css("display","block");
        $(".local").css("display","none");
        $(".airport").css("display","none");

      });
    
      $("#local").click(function(){
        $("#outstation").css("background-color","white");
        $("#local").css("background-color"," #fc983c");
        $("#airport").css("background-color"," white");
        $(".outstation").css("display","none");
        $(".local").css("display","block");
        $(".airport").css("display","none");
      });
    
      $("#airport").click(function(){
        $("#outstation").css("background-color","white");
        $("#local").css("background-color"," white");
        $("#airport").css("background-color","#fc983c");
        $(".outstation").css("display","none");
        $(".local").css("display","none");
        $(".airport").css("display","block");
      });

      $(".check").click(function(){
       $(".drop").css("display","none");
       $(".dropchange").css("width",'127%');
      });
      $(".round").click(function(){
       $(".drop").css("display","block");
       $(".dropchange").css("width",'100%');
      }); 
      $(".mul").click(function(){
       $(".drop").css("display","block");
       $(".dropchange").css("width",'100%');
      }); 

  });
    </script>
   
    <script>
     var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
    componentRestrictions: {
        country: "IN"
    }
});
});
    </script>
    
 </body>
 </html>
