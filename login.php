<?php 
$error="";
if($_POST){

  if(!$_POST["emailname"])
  {
    $error.="Please fill E-mail<br>";
  }
  if(!$_POST["passwordname"])
  {
    $error.="Please fill Password<br>";
  }
  if ($_POST['emailname'] && filter_var($_POST["emailname"], FILTER_VALIDATE_EMAIL===false)) {
$error.="  the email is invalid<br>";
} 
if($error!=""){
 $(error)=('<div class="alert alert-danger" role="alert"><strong>Oops</strong><br>'.$error.'</div>')
  
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

    <title>Login</title>
  </head>
  <style type="text/css">
  *{color: #fff;}
    .bg{ background-image:  url("login.jpg")  ;  background-position: center;
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
      
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div id="error"></div>
    <form class="form-container" name="login"  method="post">
      <h1>Login Form</h1>
      <div class="form-group">
       <label for="exampleInputEmail1">Email </label>
        <input type="email" name="emailname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
       <input type="password" name="passwordname" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember Me </label>
    </div>
   <a href="webafter.html"><button type="submit" class="btn btn-primary btn-block" id="submit">Submit</button></a>
  </form>
 

<div class="col-md-4 col-sm-4 col-xs-12">
</div>
</div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
     $("form").submit(function(e){
        e.preventDefault();
        var error ="";
        if($("#exampleInputEmail1").val()=="" && $("#exampleInputPassword1").val()=="")
        {
          error+="Please fill your Email-id and Password";
        }
        if($("#exampleInputEmail1").val()!=""&& $("#exampleInputPassword1").val()=="")
        {
          error+="Please enter Password";
        }
        if($("#exampleInputEmail1").val()==""&& $("#exampleInputPassword1").val()!="")
        {
          error+="Please enter Email-id";
        }
        if(error !="") {

          $("#error").html('<div class="alert alert-danger" role="alert"><strong>Oops</strong><br>'+error+'</div>')
        }
        else
        {
          $("form").unbind("submit").submit();
        }

    });
       
      
    </script>
  </body>
</html>