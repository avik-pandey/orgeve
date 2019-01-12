<?php
$link = mysqli_connect("localhost","root","","orgeve");
if(mysqli_connect_error())
{
  die("ther was an error ");

}
else
{
$query = "SELECT * FROM users";
  if($result=mysqli_query($link,$query))
  {
     $row=mysqli_fetch_array($result);
     print_r ($row);
  }
  else
  {
  echo "unsuccessful";
  }
}
?>
