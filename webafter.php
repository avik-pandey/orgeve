<?php
session_start();
$link=mysqli_connect("localhost","root","","orgeve");
if(isset($_POST['logout']))
{
  session_destroy();
  header ('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>orgeve</title>
  </head>
  <style>
  .top {
  background : #343a40 ;
  border: none;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color:#fff ;
}
    .top:hover {
   background-color: #ddd;
  color: black;

}
.navbar-brand{
  background-color: #555555;
  color: white;

}
.nav-link{
  color:#fff;
}




.carasousel-inner{
  height:100vh;
}
.main-text
{
    position: absolute;
    top: 150px;
    width: 96.66666666666666%;
    color: #FFF;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    position: relative;
}


.button1 {background-color: #555555;}


.about{
  color: #fff;
  background-color:   #383838;

}
.contact{
  color: #000;
  background-color:  #cccccc;
}
.developer{
  color: #000;
  background-color: #f2f2f2;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.8;
  width: 250px;
  height:350px;
}

.container:hover .middle {
  opacity: 0.7;
  width:300px;
  height:450px;
  margin-top: 40px;
}

.text {
  background-color: #333333;
  color: #fff;
  font-size: 16px;


}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" >

     <a class="navbar-brand" href="#" style="color:#fff ; background: #343a40">ORGEVE</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: white">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a  href="#" style="text-decoration: none"> <button class="top my-btn">About Us <span class="sr-only">(current)</span></button></a>
        </li>
        <li class="nav-item">
          <a  href="#" style="text-decoration: none"> <button class="top">  Societies </button> </a>
        </li>

        <li class="nav-item">
          <a  href="#" style="text-decoration: none"> <button class="top">  Contact Us </button> </a>
        </li>
      </ul>
      <form method="post" action="">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
         <h2>Welcome User</h2>
        </li>
        <li class="nav-item">
         <a  href="" style="text-decoration: none"><button class="top my-btn" name ="logout"><i class="fas fa-sign-in-alt"></i>LogOut</button></a>
       </li>

      </ul>
      </form>

    </div>

  </nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">


  <div class="carousel-inner ">


    <div class="carousel-item active">
      <img class="d-block w-100" src="img1.webp" alt="First slide"  style="height:100vh">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img2.jpg" alt="Second slide"  style="height:100vh">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img3.jpg" alt="fourth slide"  style="height:100vh">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img5.jpg" alt="Third slide"  style="height:100vh">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img6.jpg" alt="Third slide" style="height:100vh">
    </div>
  </div>
  <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 80px;letter-spacing: 2px ">
                        ORGEVE
                    </h1>
                    <button class="button button1" onclick="scrollWin()">Let's Get Started !</button>

                </div>
  </div>

</div>

<div class="col-sm-12 about" >

  <div class="row" >
    <div class="container" style="text-align: center;margin-top: 30px;margin-bottom: 50px;">
      <h2 style="font-size: 50px"> About Us </h2>
    </div>
  </div>

  <div class="row">
    <div class="container" style="margin-bottom: 30px;">
      <img class = "col-lg-5 col-sm-12" src="event.jpg" alt="Events Organisation" width="450px" height="300px" style="float: left;">
    <p class="col-lg-6 col-sm-12 ml-1" style="float: right; color: white">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
    </p>
    </div>
  </div>

</div>

  <div style="background:  #8c8c8c;" >

      <div class="container" style = "text-align: center;">
         <div class="row"  >


      <div class="container col-sm-12 col-lg-4" style=" margin-top: 30px ; margin-bottom: 30px ; " >
        <div class="card " style="height: 400px ;">
    <img class="card-img-top" src="uss.jpg" alt="Card image cap" style = "height: 190px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <a  href="registration.php" style="text-decoration: none"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Register </button></a>

    </div>
  </div>
      </div>

  <div class="container col-sm-12 col-lg-4" style=" margin-top: 30px ; margin-bottom: 30px ; " >
        <div class="card " style="height: 400px ;">
    <img class="card-img-top" src="techspace.png" alt="Card image cap" style = "height: 190px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
    <a  href="registration.php" style="text-decoration: none">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Register </button> </a>

    </div>
  </div>
      </div>

   <div class="container col-sm-12 col-lg-4" style=" margin-top: 30px ; margin-bottom: 30px ; " >
        <div class="card " style="height: 400px ;">
    <img class="card-img-top" src="ieee.jpg" alt="Card image cap" style = "height: 190px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <a  href="registration.php" style="text-decoration: none"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Register </button> </a>

    </div>
  </div>
      </div>



      </div>

      <div class="row"  >


      <div class="container col-sm-12 col-lg-4" style=" margin-top: 30px ; margin-bottom: 30px ; " >
        <div class="card " style="height: 400px ;">
    <img class="card-img-top" src="enactus.jpg" alt="Card image cap" style = "height: 190px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
    <a  href="registration.php" style="text-decoration: none">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Register </button></a>

    </div>
  </div>
      </div>

  <div class="container col-sm-12 col-lg-4" style=" margin-top: 30px ; margin-bottom: 30px ; " >
        <div class="card " style="height: 400px ;">
    <img class="card-img-top" src="zenith.jpg" alt="Card image cap" style = "height: 190px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
    <a  href="registration.php" style="text-decoration: none">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Register </button></a>

    </div>
  </div>
      </div>




      </div>

    </div>
  </div>
  <div class="col-sm-12 contact" >

    <div class="row">
      <div class="container" style="margin-top: 30px ; margin-bottom: 30px ; text-align: center;">
      <div class="container">
        <h1> Contact Us </h1>
      </div>
      <div class="container" style="margin-top: 30px">
        <p> Guru Gobind Singh Indhraprasth University </p>
      </div>
      <div class="container">
        <p> Sector-16c,Dwarka </p>
      </div>
      <div class="container">
        <p> New Delhi-110009 </p>
      </div>
      <div class="container">
        <p> Mobile : 88766757657,788565687 </p>
      </div>
      <div class="container">
        <p> Website: <a href="http://www.ipu.ac.in/">ipu.ac.in</a> </p>
      </div>

    </div>
    </div>

    </div>
    <div class="col-sm-12 developer" >
    <div class=" container " style="text-align: center;margin-bottom: 40px;">
      <img src="avik.jpg" style="height:450px;width:350px;margin-top: 40px;margin-bottom: 40px;">
      <div class="container">
      <div class="middle">
      <div class="text">
      <br>
      <br>
      <h2>Aveec</h2>
      <br>
      <h3 style="font-size: 18px">email: avikpandey@gmail.com</h3>
      <h3>contact:9910758350</h3>
      <h3>  Web Developer</h3>
     <br><br>
     </div>
     </div>
    </div>
    <p style="margin-bottom: 15px;"><i>Designed and developed with Love.</i></p>
    </div>

    </div>





  <script type="text/javascript">
    function scrollWin() {
    window.scrollTo(0, 620);
}
  </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
