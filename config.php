<?php

$con  = mysqli_connect("localhost","root","","std_data") or die(mysqli_error($con));

if($con)
{
	echo "<h3><b>Database connected</b></h3>";
}
else
{
	echo "<h3><b>Database not connected</b></h3>";
}
?>