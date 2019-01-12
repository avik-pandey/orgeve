<?php
session_start();
if(isset($_SESSION['email']))
{
  header('Location:webafter.php');
}

 $error="";
 if(isset($_POST['submit']))
 {
   $link=mysqli_connect("localhost","root","","orgeve");
   if(mysqli_connect_error()){
     die("there was an error connecting to the database");
   }
   else{
     if(!$_POST['email'])
     {
       $error.="plz enter email<br>";

     }
     else if(!$_POST['password'])
     {
       $error.="plz enter password<br>";
     }
     else if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL===false)) {
   $error.="  the email is invalid<br>";
   }
   else{
     $query="SELECT `id` FROM `users` WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
     $result= mysqli_query($link,$query);
     if(mysqli_num_rows($result)>0){
       $error.="email already taken";
     }
     else{
       $query = "INSERT INTO `users` (`email`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";
       $result= mysqli_query($link,$query);
       if($result){
         $_SESSION['email']=$_POST['email'];
         header('location:webafter.php');
       }
       else{
         $error.="problem signing you up";
       }
     }
   }
   }
   if($error!="")
   {
     $error='<div class="alert alert-danger" role="alert"><p><strong>Oops</strong></p><br>'.$error.'</div>';
   }
 }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
  </head>
   <style type="text/css">
  *{color: #fff;}
    .bg{ background-image:  url("register.jpg")  ;  background-position: center;
    background-repeat: no-repeat;
    background-size: cover; width: 100%;
    }
    .form-container{
      border:1px solid;
      padding: 30px 40px;
      margin-top: 5vh;
     -webkit-box-shadow: -1px 2px 20px 6px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 20px 6px rgba(0,0,0,0.75);
box-shadow: -1px 2px 20px 6px rgba(0,0,0,0.75);
height:100vh;
margin-bottom: 20px;

    }
  </style>
  <body>
    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
           <div id="error"><? echo $error ?></div>
    <form class="form-container" method="post">
      <h1>Register</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

  <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Login</a>.</p>
  </div>
</form>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
