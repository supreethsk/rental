<?php 
//include 'links.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
      <div class="row justify-content-center" style="margin-top: 130px;">
          <img src="">
      </div>
       <div class="row justify-content-center">
         <!-- <p style="font-size: 16px;">A Fortnightly Journal of Research</p> -->
      </div>
      <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            </div>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
              <form class="text-center border border-light p-5" method="POST" action="signin.php" style="background-color: #d1e4f0;">
                  <p class="h4 mb-4">Login</p>
                  <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">
                  <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">
                  <div class="d-flex justify-content-around">
                    <div>
                     <a href="">Forgot password?</a>
                   </div>
               </div>
                <button class="btn btn-info btn-block my-4" name="submit"  type="submit">Sign in</button>
               <p>Not a member?<a href="signup.php">Register</a> </p>
                </form>
            </div>
      </div>
</div>
</body>
</html>








