<?php

if($_GET)
{
	$i=2
	$prime= true;
	while($i<$_GET['number'])
	{
	if($_GET['number']%$i==0)
	{
	$prime==false;
	}
	$i++;
	}
	if($prime)
	{
	echo "<p>".$_GET['number']."is a prime</p>";
	}
	else
	{
	echo "<p>".$_GET['number']."is a not prime</p>";
	}
}
?>
<form>
<input name="number" type="text">
<input type="submit" value="submit">
</form>