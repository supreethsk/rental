<?php 
//include 'links.php';
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
          <img src="images/logo.png">
      </div>
       <div class="row justify-content-center">
         <p style="font-size: 16px;">A Fortnightly Journal of Research</p>
      </div>
      <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            </div>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" >
              <form class="text-center border border-light p-5" action="signup_action.php" method="POST" style="background-color: #d1e4f0;">
                  <p class="h4 mb-4">Register</p>
                  <input type="text" class="form-control mb-4" name="name" placeholder="Name" required>
                  <input type="email" class="form-control mb-4" name="email" placeholder="E-mail" required>
                  <input type="Phone" class="form-control mb-4" name="phone" placeholder="Phone" required>
                  <input type="password" class="form-control mb-4" name="password" placeholder="Password" required>
                  <input type="password" class="form-control mb-4" name="cpassword" placeholder="Confirm Password" required>
                <button class="btn btn-info btn-block my-4" value="submit" name="submit" type="submit">Sign up</button>
               <p>Already have an account?<a href="vendor.php">Login</a> </p>
                </form>
            </div>
      </div>
</div>
</body>

