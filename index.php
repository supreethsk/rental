<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAR RENTAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDI-vSjLZFp1EKPOf4yrA61Kvla82jtuQU"></script>
   <style>
.container{
  text-align: center;
}
.btn11{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2{
  color: #3498db;
}
.btn3,.btn4{
  color: #fff;
}
.btn1:hover,.btn2:hover{
  color: black;
}
.btn3:hover,.btn4:hover{
  color: #3498db;
}
.btn11::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #fc983c ;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}
       .card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
  padding:10px;
}

.card .card_title p{
    background-color: black;
  opacity: 0.8;
  border-radius: 61px;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
  
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: #fc983c;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}

   </style> 
</head>
<body>
    <section id="header">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="rental-car.png" style="height: 850px;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="altson.jpg" style="height: 850px" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-item">
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navi">
    <div class="row m-0" style="margin-left: 8% !important;">
        <div class="col-2">
        <a class="navbar-brand" href="#"><img class="logo" src="logo.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
  <div class="col-8">
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
      </li>.
      <li class="nav-item">
        <a class="nav-link" href="#">SPECIAL OFFER</a>
      </li>
    </ul>
  </div>
  </div>
  <div class="col-2"></div>
  </div>
    </nav>
    <div class="overlay"></div>
    
    <div class="row m-0 ch_form" >
        <div class="col-12 col-sm-3 col-lg-3 ml-5 p-0" style="z-index: 9999999999999999;">
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
                        <input type="radio" name="book" value="multiple"  class="custom-control-input mul" id="defaultUnchecked2" name="defaultExampleRadios">
                        <label class="custom-control-label form_label" style="padding-top: 3px" for="defaultUnchecked2">Mul dest</label>
                        </div>

                        </div>
                   <!-- one      -->
                <div class="form-group">
                    <label class="label form_label">Pick-up location</label>
                    <input type="text"  name="from" class="form-control" id="search_input" placeholder="City, Airport, Station, etc">
                </div>
                <div class="form-group b ">
                    <label class="label form_label">Drop-off location</label>
                    <input type="text" name="to" class="form-control" id="search_input2" placeholder="City, Airport, Station, etc">
                </div>
                <div class="d-flex ">
                <div class="form-group mr-2 ">
                    <label class="label form_label ">PICK-UP DATE</label>
                    <input type="text" name="pick_up" autocomplete="off" class="form-control dropchange" placeholder="Date" id="my_date_picker1">
                </div>
                <div class="form-group ml-2  drop">
                    <label class="label form_label ">DROP-OFF DATE</label>
                    <input type="text" name="return" autocomplete="off" class="form-control" placeholder="Date" id="my_date_picker2">
                </div>
                </div>
                <div>
                <div class="form-group ">
                    <label class="label form_label">PICK-UP TIME</label>
                    <input type="text" autocomplete="off" name="pick_up_at" class="form-control timepicker" placeholder="Time">
                </div>
                </div>
<!-- one -->
<!-- two -->
                <div class="show" style="display: none">
                <div class="form-group field_wrapper">
                    <label class="label form_label">Drop-off location</label>
                    <input type="text"  name="field_name[]" class="form-control" id="search_input" placeholder="City, Airport, Station, etc">
                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="https://img.icons8.com/material-outlined/24/000000/plus.png"/></a>
                </div> 
                </div> 
                <div style="text-align: center;">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-3 px-4" value="Search Vehicle">
                </div>
                </div>
            </form>
            <form method="post" action="vehicle.php" class="local" style="display: none">
                <h2 class="form_head mb-3">Make your trip</h2>
               
                <div class="form-group">
                    <label class="label form_label">Pick-up location</label>
                    <input type="text"  name="from" class="form-control" id="search_input1" placeholder="City, Airport, Station, etc">
                </div>
                
                <div class="form-group mr-2">
                    <label class="label form_label ">PICK-UP DATE</label>
                    <input type="text" name="pick_up" autocomplete="off" class="form-control dropchange" placeholder="Date" id="my_date_picker4">
                </div>
                <div>
                <div class="form-group">
                    <label class="label form_label">PICK-UP TIME</label>
                    <input type="text" autocomplete="off" name="pick_up_at" class="form-control timepicker" placeholder="Time">
                </div>
                </div>
                <div style="text-align: center;">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-3 px-4" value="Search Vehicle">
                </div>
                </div>
            </form>
            <form class="airport">
                 
            </form>
            </div>
        </div>
        
        
        
    </div>
    
    </section>

    <div class="row m-5" style="border-bottom: 1px solid #FCC938;">
        <div class="col-4 pl-5">
           <h3 class="yellow"><b><i>11 COUNTRIES</i></b></h3> 
        </div>
        <div class="col-4 text-center">
            <h3 class="yellow"><b><i>200 CITIES</i></b></h3>
        </div>
        <div class="col-4 text-right pr-5">
            <h3 class="yellow"><b><i>2000 HAPPY CUSTOMERS</i></b></h3>
        </div>
        <hr>
    </div>
    
    <div class="row m-0 justify-content-center">
        <h2 style="border-bottom:2px solid black">FEATURES</h2>
    </div>

    <div class="row m-5">
        <div class="col p-0 pl-1 pr-1" style="text-align: center;">
            <div class="card 1">
                <div class="card_image"> <img src="images.png" /> </div>
                <div class="card_title title-white">
                    <p>GST AND Transparent bills</p>
                </div>
            </div>
        </div>
        <div class="col p-0 pl-1 pr-1" style="text-align: center">
            <div class="card 1">
                <div class="card_image"> <img src="driver.png" /> </div>
                <div class="card_title title-white">
                    <p>Professional drivers</p>
                </div>
            </div>
        </div>
        <div class="col p-0 pl-1 pr-1" style="text-align: center">
            <div class="card 1">
                <div class="card_image"> <img src="roadsafty.png" /> </div>
                <div class="card_title title-white">
                    <p>Defensive drivers</p>
                </div>
            </div>
        </div>
</div>
<div class="row m-5">
        <div class="col p-0 pl-1 pr-1" style="text-align: center">
        <div class="card 1">
                <div class="card_image"> <img src="reliable.png" /> </div>
                <div class="card_title title-white">
                    <p>Reliable services</p>
                </div>
            </div>
        </div>
        <div class="col p-0 pl-1 pr-1" style="text-align: center">
        <div class="card 1">
                <div class="card_image"> <img src="tour_related.png" /> </div>
                <div class="card_title title-white">
                    <p>Other Travel service</p>
                </div>
            </div>
        </div>
        <div class="col p-0 pl-1 pr-1" style="text-align: center">
        <div class="card 1">
                <div class="card_image"> <img style="width:inherit;padding: 11px;" src="online.png" /> </div>
                <div class="card_title title-white">
                    <p>Online and Tele booking</p>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height:440px;" src="https://www.meru.in/assets/images/happy.jpg" alt="First slide">
      <center class="mb-5">
      <h3>12 million satisfied customers</h3>
      <p>	Serving millions of customers for more than 10 years.</p>
</center>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height:440px;" src="https://www.meru.in/assets/images/experts-hands-on-wheels.jpg" alt="Second slide">
      <center class="mb-5">
      <h3>Expert hands on wheel!</h3>
      <p>Professional drivers at your service.</p>
</center>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height:440px;" src="https://www.meru.in/assets/images/book-the-way.jpg" alt="Third slide">
      <center class="mb-5">
      <h3>Book the way you like!</h3>
      <p>5 different ways to book your cab.</p>
      <p class="service_modes">App &nbsp;  | &nbsp;  Website  &nbsp; | &nbsp;  Call Center  &nbsp; | &nbsp;  Google search &nbsp;  |  &nbsp; whatsapp Chat</p>
</center>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row m-0 justify-content-center">
        <h2 style="border-bottom:2px solid black">ABOUT US</h2>
    </div>
   
    
    <div class="row m-5" >
        <div class="col-1"></div>
        <div class="col-10">
        <div class="row m-5" >
        <h4 class="yellow" style="border-bottom: 1px solid #FCC938;"><b>International car rentals.</b></h4>
        <p class="blue" style="font-size: 20px">
        We at <b>aywa cab</b> welcome all the specified customer who are looking fpr premium class vehicles
with neat and hygienic environment and friendly drivers who provide customers with reliable
and premium Intercity and Local car rental services. We have been identified as the best service
provider and awarded by various institutions.and corporate for our prompt services.
        </p>
        </div>
        <div class="row m-5" >
        <h4 class="yellow" style="border-bottom: 1px solid #FCC938;"><b>Most of our lifes time will be spend on roads</b></h4>
        <p class="blue" style="font-size: 20px">
        Have you ever been in a situation where you want to drop everything, get in a car, and leave? Well,
you’re not alone! The idea of going on a road trip to explore is not a bad idea. In fact, there are a lot of
adventurers out there who voyage the world with all their belongings in one single vehicle.<br>
<br>
Today, we are in an age where we pursue almost everything in haste and just hurry past it. We do not
take the time to just sit, breathe and take it all in.<br>
<br>
We prefer darting from one country to another country on a cramped airline with no leg space rather
than indulging in a road trip to places. The main culprit – hurry to do it all!
In fact, we see no other way to travel than by way of airplanes. But if you have a car or you can rent one
then we will show you why travel by road is the new way of travel
        </p>
    </div>
    <div class="row m-0 justify-content-center">
        <h2 style="border-bottom:2px solid black">SERVICES</h2>
    </div>
    
<div class="container">
  <button class="btn11 btn1">Local Car Rentals</button>
  <button class="btn11 btn2">Outstation Taxi</button>
  <button class="btn11 btn1">One way Cabs</button>
  <button class="btn11 btn2">Corporate Car rentals</button>
  <button class="btn11 btn1">Airport Taxi</button>
</div>
    <div style="text-align: center" class="mb-5">
    <span class="blinking">Now travel begins by Calling AYAW !!!!</span>
    </div>
        </div>



        <div class="col-1"></div>
        
    </div>
    
    
    

<div class="footer">
    Footer Content
</div>
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> 
        </script> 
        <script src= 
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> 
        </script> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        <script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="form-group field_wrapper"><label class="label form_label">Drop-off location</label><input type="text"  name="field_name[]" class="form-control" id="search_input" placeholder="City, Airport, Station, etc"><a href="javascript:void(0);" class="remove_button" title="Add field"><img src="https://img.icons8.com/ios/26/000000/minus.png"/></a></div>'
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
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


                $(function() { 
                    $("#my_date_picker3").datepicker({}); 
                }); 
  
                $(function() { 
                    $("#my_date_picker2").datepicker({}); 
                }); 
  
                $('#my_date_picker3').change(function() { 
                    startDate = $(this).datepicker('getDate'); 
                    $("#my_date_picker2").datepicker("option", "minDate", startDate); 
                }) 
  
                $('#my_date_picker2').change(function() { 
                    endDate = $(this).datepicker('getDate'); 
                    $("#my_date_picker3").datepicker("option", "maxDate", endDate); 
                })

                $(function() { 
                    $("#my_date_picker4").datepicker({}); 
                }); 
  
                $(function() { 
                    $("#my_date_picker2").datepicker({}); 
                }); 
  
                $('#my_date_picker4').change(function() { 
                    startDate = $(this).datepicker('getDate'); 
                    $("#my_date_picker2").datepicker("option", "minDate", startDate); 
                }) 
  
                $('#my_date_picker2').change(function() { 
                    endDate = $(this).datepicker('getDate'); 
                    $("#my_date_picker4").datepicker("option", "maxDate", endDate); 
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
        $(".b").css("display","block");
       $(".drop").css("display","none");
       $(".dropchange").css("width",'127%');
       $(".show").css("display","none");
      });
      $(".round").click(function(){
        $(".b").css("display","block");
       $(".drop").css("display","block");
       $(".dropchange").css("width",'100%');
       $(".show").css("display","none");
      }); 
      $(".mul").click(function(){
        $(".b").css("display","none");
       $(".show").css("display","block");
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

google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    document.getElementById('loc_lat').value = near_place.geometry.location.lat();
    document.getElementById('loc_long').value = near_place.geometry.location.lng();
    
    document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
    document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
});
});

$(document).on('change', '#'+searchInput, function () {
document.getElementById('latitude_input').value = '';
document.getElementById('longitude_input').value = '';

document.getElementById('latitude_view').innerHTML = '';
document.getElementById('longitude_view').innerHTML = '';
});
</script>
<script>

var searchInput2 = 'search_input2';

$(document).ready(function () {
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput2)), {
types: ['geocode'],
componentRestrictions: {
    country: "IN"
}
});

google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    document.getElementById('loc_lat').value = near_place.geometry.location.lat();
    document.getElementById('loc_long').value = near_place.geometry.location.lng();
    
    document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
    document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
});
});

$(document).on('change', '#'+searchInput2, function () {
document.getElementById('latitude_input').value = '';
document.getElementById('longitude_input').value = '';

document.getElementById('latitude_view').innerHTML = '';
document.getElementById('longitude_view').innerHTML = '';
});
</script>
</body>
</html>