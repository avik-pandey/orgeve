<?php
session_start();
if($_SESSION['email'])
{

}
else {
  header('Location:index.php');
}
$error="";
if(isset($_POST['submit']))
{
  $link=mysqli_connect("localhost","root","","orgeve");
  if(mysqli_connect_error()){
    die("there was an error connecting to the database");
  }
  else{
    if(!$_POST['name']){
      $error.="plz enter name.";
    }
    else if(!$_POST['contact']){
      $error.="plz enter contact";
    }
    else if(!$_POST['email']){
      $error.="plz enter email";

    }
    else if(!$_POST['organisation']){
      $error.="plz enter organisation.";
    }
    else if(!$_POST['taarek']){
      $error.="plz enter date ";
    }
    else if(!$_POST['reason']){
      $error.="plz enter reason";
    }
    else{
       $query = "INSERT INTO `registration` (`name`,`contact`,`email`,`organisation`,`taarek`,`reason`) VALUES ('".mysqli_real_escape_string($link,$_POST['name'])."','".mysqli_real_escape_string($link,$_POST['contact'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['organisation'])."','".mysqli_real_escape_string($link,$_POST['taarek'])."','".mysqli_real_escape_string($link,$_POST['reason'])."')";
       $result= mysqli_query($link,$query);
       if($result){
         $_SESSION['email']=$_POST['email'];
         header('Location:webafter.php');
       }
       else{
         $error.="enter again";
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
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>Registration</title>
  </head>

  <style type="text/css">
  *{color: #000;}
    .bg{ background-image:  url("registration.png")  ;  background-position: center;
    background-repeat: no-repeat;
    background-size: cover; width: 100%;
    }
    .form-container{
      border:1px solid;
      padding: 50px 60px;
      margin-top: 20vh;
     -webkit-box-shadow: -1px 2px 20px 6px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 20px 6px rgba(0,0,0,0.75);
box-shadow: -1px 2px 20px 6px rgba(0,0,0,0.75);
margin-bottom: 40px;

    }
  </style>
  <body>
      <div class="container-fluid bg">


      <div class="row">

        <div class="col-md-4 col-sm-6 col-xs-12"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">

    <form class="form-container" name="Registration"  method="post">
      <h1>Registration</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name ="name" class="form-control" id="exampleFormControlInput1" placeholder="eg. sachidanand">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Contact No.</label>
    <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" placeholder="9192*******">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Organisation</label>
    <select  class="form-control" name="organisation" id="exampleFormControlSelect1">
      <option>Private</option>
      <option>Government</option>
      <option>Social</option>
      <option>Educational</option>
      <option>Others</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date for Organising</label>
     <input id="datepicker" name="taarek" placeholder="mm/dd/yy" width="276" >
  </div>
  <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Reason for visit</label>
    <textarea class="form-control" name="reason" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</div>
</form>
<div class="col-md-4 col-sm-6 col-xs-12">
</div>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
  </body>
</html>
