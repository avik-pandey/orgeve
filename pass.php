<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
body {margin:0;}

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
html {
  font-size: 62.5%;
  box-sizing: border-box;
}

*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

.calculator {
  border: 1px solid #ccc;
  border-radius: 5px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  margin-top: 40px;
}

.calculator-screen {
  width: 100%;
  font-size: 5rem;
  height: 80px;
  border: none;
  background-color: #252525;
  color: #fff;
  text-align: right;
  padding-right: 20px;
  padding-left: 10px;
}

button {
  height: 60px;
  background-color: #fff;
  border-radius: 3px;
  border: 1px solid #c4c4c4;
  background-color: transparent;
  font-size: 2rem;
  color: #333;
  background-image: linear-gradient(to bottom,transparent,transparent 50%,rgba(0,0,0,.04));
  box-shadow: inset 0 0 0 1px rgba(255,255,255,.05), inset 0 1px 0 0 rgba(255,255,255,.45), inset 0 -1px 0 0 rgba(255,255,255,.15), 0 1px 0 0 rgba(255,255,255,.15);
  text-shadow: 0 1px rgba(255,255,255,.4);
}

button:hover {
  background-color: #eaeaea;
}

.operator {
  color: #337cac;
}

.all-clear {
  background-color: #f0595f;
  border-color: #b0353a;
  color: #fff;
}

.all-clear:hover {
  background-color: #f17377;
}

.equal-sign {
  background-color: #2e86c0;
  border-color: #337cac;
  color: #fff;
  height: 100%;
  grid-area: 2 / 4 / 6 / 5;
}

.equal-sign:hover {
  background-color: #4e9ed4;
}

.calculator-keys {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  padding: 20px;
}
html, body {
    font-family: Arial, Helvetica, sans-serif;
}

.navigation {
  width: 300px;
}

.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
  margin-top: 100px;
}

.mainmenu a {
  display: block;
  background-color: #CCC;
  text-decoration: none;
  padding: 10px;
  color: #000;
  font-size: 30px;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: #C5C5C5;
}


.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}


.submenu a {
  background-color: #999;
}

.submenu a:hover {
  background-color: #666;
}


.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" >
     <a class="navbar-brand" href="#" style="color:#fff ; background: #343a40 ;font-size:30px;">Hisaab Kitaab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


      <ul class="navbar-nav ml-auto">

         <li class="nav-item">
          <a  href="index.php" style="text-decoration: none"><button class="top my-btn"><i class="fas fa-sign-in-alt"></i>Logout</button></a>
        </li>
      </ul>

    </div>
  </nav>

<nav class="navigation">
  <ul class="mainmenu">
    <li><a href="cash.php">Cash</a></li>
    <li><a href="paytm.php">PayTm</a></li>
    <li><a href="debit.php">Debit/Credit</a>
    </li>
    <li><a href="pass.php">Passbook</a></li>
    <li><a href="notes.php">Notes</a></li>
  </ul>
</nav>
<div class="container">
  
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
