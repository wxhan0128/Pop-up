<?php
ob_start(); // turns on output buffering
session_start();
$timezone = date_default_timezone_set("America/Indiana/Indianapolis");
$con = mysqli_connect("db.soic.indiana.edu", "p565s17_wenxhan", "my+sql=p565s17_wenxhan", "p565s17_wenxhan"); //Connecton var
if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
?>