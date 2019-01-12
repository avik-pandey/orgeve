<?php
/*if(isset($_POST['submit']))
{

  //$_POST['link'] = preg_replace('/\s+/', '', $_POST['link']);
  $data = file_get_contents("https://www.".$_POST['link'].".com");
  $data = strip_tags($data,"<a>");
  $d = preg_split("/<\/a>/",$data);
  foreach ( $d as $k=>$u ){
      if( strpos($u, "<a href=") !== FALSE ){
          $u = preg_replace("/.*<a\s+href=\"/sm","",$u);
          $u = preg_replace("/\".*//*","",$u);
          echo $u."\n";
      }
  }
  //print_r($weather2);
  //echo $weather2[0];
}*/
$url="https://www.google.com";
$data=file_get_contents($url);
$data = strip_tags($data,"<a>"); 
$d = preg_split("/<\/a>/",$data);
foreach ( $d as $k=>$u ){
    if( strpos($u, "<a href=") !== FALSE ){
        $u = preg_replace("/.*<a\s+href=\"/sm","",$u);
        $u = preg_replace("/\".*/","",$u);
        print $u."\n";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    body {
    background-image: url("weather.jpg");
    background-color: #cccccc;

}
.container{
  text-align: center;
  margin-top:150px;
}
#weather{
  margin-top: 20px;
}
    </style>
    <title>Weather Scraper!</title>
  </head>
  <body>

    <div class="container">
      <h1>what's the weather?</h1>
      <form method="post">
    <div class="form-group">
      <label for="link">Get all links of this website. </label>
      <input type="text" class="form-control" id="link" name="link" placeholder="Enter website">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

     </form>
         <!-- <div id="website">
           <!-- <?php
           if($weather2[0])
           {
             echo '<div class="alert alert-success" role="alert">'.$weather2[0].'
</div>';
           }
           else{
             echo '<div class="alert alert-danger" role="alert"> <p>You may have mistyped the address <br/>or the page may have moved.</p>
</div>';
           }
           ?> -->
         </div> -->

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
