<?php 
//include 'links.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="images">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
      <div class="row justify-content-center" style="margin-top: 130px;">
          <img src="awaylogo">
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








