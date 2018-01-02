<!DOCTYPE html>
<html lang="en">
  <head>
 
    <!-- Basic Page Needs

    ================================================== -->

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Information </title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

  </head>
  <body>  <hr>
  <div class="container">
  <h2>User Form</h2>
  <br><br>
  <legend>
  <form method="POST" action="process.php">
  <div class="form-group">
    <label class="col-md-4" for="name"> Firstname : </label>
    <input type="name" name="fname" class="form-control" id="name" placeholder=" Please Enter Your First Name">
  </div>
   <div class="form-group">
    <label class="col-md-4" for="name"> Lastname : </label>
    <input type="name" name="lname" class="form-control" id="name" placeholder=" Please Enter Your Last Name">
  </div>
    <div class="form-group">
      <label for="Gender" class="Gender" id="Gender">Gender : <br>
     <input type="radio" name="gender" value="Male">Male <br>
  <input type="radio" name="gender" value="Female">Female
  
    </div> 
    <div class="form-group">
    <label class="col-md-4" for="name">Email : </label>
    <input type="Email" name="email" character="@domain name" class="form-control" id="Email" name="password"required minlength="8" placeholder="Please Enter your Email Address">
  </div>
  <div class="form-group">
    <label class="col-md-4" for="name">Password : </label>
    <input type="Password" name="password"  class="form-control" id="password" name="password" placeholder="Please Enter the password">
  </div>
  <div class="form-group">
    <label for="Number">Mobile : </label>
    <input type="tel" name="mobile" class="form-control" id="Mobile" placeholder="Please Enter Your Phone Number ">
    </div>
<br><div class="form-group">
    <label for="name">Address : </label>
    <textarea class="form-control" id="address" name="address" placeholder="Enter your address"></textarea>
<!--<a href=""> -->
    <input type="submit" value="submit" class="btn btn-primary">
    
    </form><br><br>
  </legend>
</div>
  </body>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
  
</html>
