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
    <link rel="stylesheet" href="./style.css">
    <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <title></title>
 </head>
 <body>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navi2">
        <div class="container">
        <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SPECIAL OFFER</a>
      </li>
    </ul>
  </div>
        </div>
   </nav>
   <div class="row m-0 data">
  <div class="container pl-5">
  <div class="row">
  <div class="col-3">
  
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
            <span class="fw-600">pickup</span>
            <span><?php echo $return ?></span>
        </div>
        <div style="display: grid" class="mr-5 ml-5">
            <span class="fw-600">time</span>
            <span><?php echo $pick_up_at?></span>
        </div>
        </div>
    </div>
    <div class="col-2 ml-auto"><a href="" class="btn btn-info " data-toggle="modal" data-target="#myModal">Modify </a></div>
  </div>  
</div>
   </div>

</div>
<?php
$sql =" SELECT * FROM vehicle where registercity='$from'";
 
 $query = mysqli_query($db,$sql);
 while ($row = $query->fetch_assoc())
 {
    $car_name=$row['vehicle_name'];
    $car_price=$row['vehicle_price'];
    ?>
    <div class="container">
<div class="form_container1 mt-3">
    <div class="row m-0">
        <div class="col-4 p-0 text-center">
            <div class="row">
                <img src="bg_1.jpg" class="mr-4" style="width: 30%" alt="car">
                <span class="fw-600 pt-4"><?php echo $car_name; ?></span>
            </div>
        </div>
        <div class="col-2 p-0 pt-4 text-center" style="background-color: #fafafa;">
            <span class="fw-600 ">Includes 3393</span>
        </div>
        <div class="col-3 p-0 pt-2 text-center"style="background-color: #f3f3f3;" >
            <div class="row m-0">
                <div class="col p-0 text-center">
                    <span class="save">save ₹800</span>
                </div>
                <div class="col p-0 text-center" >
                <div style="display: grid;">    
                <span class="price"><?php echo "₹";echo $car_price; ?></span>
                    <span>include GST</span>
                </div>
                </div>
            </div>
        </div>
        <div class="col-3 p-0 pt-2 text-center">
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
<?php } ?>
 <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
         
            <!-- Modal Header -->
            <div class="modal-header">

                    <!-- <h4 class="modal-title look">Enter your  Details</h4> -->
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
           
            <!-- Modal body -->
            <div class="modal-body">
                 

            <div class="form_wrap">
            <div class="row m-0 mb-3">
                        <div class="col-4 p-0 text-center out" style="background-color: #fc983c !important;" id="outstation">
                            <span>Outstation<span>
                        </div>
                        <div class="col-4 p-0 text-center out" id="local">
                            <span>Local</span>
                        </div>
                        <div class="col-4 p-0 text-center out" id="airport">
                            <span>Airport</span>
                        </div>
                    </div>
            <form method="post" action="vehicle.php" class="outstation">
                <h2 class="form_head mb-3">Make your trip</h2>
                <div class="mb-2" style="display: flex;">
                <div class="custom-control custom-radio  mr-2">
                       
                        <input type="radio" name="book" value="roundtrip" class="custom-control-input round" id="defaultChecked" name="defaultExampleRadios" checked>
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultChecked">Round trip</label>
                        </div>

                       

                        <!-- Default checked -->
                        <div class="custom-control custom-radio mr-2">
                        <input type="radio" name="book" value="oneway" class="custom-control-input check" id="defaultUnchecked" name="defaultExampleRadios">
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultUnchecked">One way</label>
                        </div>
                   
                        <div class="custom-control custom-radio">
                        <input type="radio" name="book" value="multidest"  class="custom-control-input mul" id="defaultUnchecked2" name="defaultExampleRadios">
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultUnchecked2">Mul dest</label>
                        </div>

                        </div>
                <div class="form-group">
                    <label class="label form_label">Pick-up location</label>
                    <input type="text" id="search_input"  name="from" class="form-control" placeholder="City, Airport, Station, etc">
                </div>
                <div class="form-group">
                    <label class="label form_label">Drop-off location</label>
                    <input type="text" name="to" class="form-control" placeholder="City, Airport, Station, etc">
                </div>
                <div class="d-flex">
                <div class="form-group mr-2">
                    <label class="label form_label ">PICK-UP DATE</label>
                    <input type="text" name="pick_up" class="form-control dropchange" placeholder="Date" id="my_date_picker1">
                </div>
                <div class="form-group ml-2 drop">
                    <label class="l});abel form_label ">DROP-OFF DATE</label>
                    <input type="text" name="return" class="form-control" placeholder="Date" id="my_date_picker2">
                </div>
                </div>
                <div>
                <div class="form-group">
                    <label class="label form_label">PICK-UP TIME</label>
                    <input type="text" name="pick_up_at" class="form-control timepicker" placeholder="Time">
                </div>
                </div>
                <div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-3 px-4" value="Search Vehicle">
                </div>
                </div>
            </form>
            <form class="local"></form>
            <form class="airport"></form>
            </div>
          </div>
        </div>
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