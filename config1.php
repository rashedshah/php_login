<?php
	$server_name="localhost";
	$user_name="root";
	$password="Rashed";
	$db="2nd_con";
	$con=mysqli_connect($server_name,$user_name,$password,$db);
	if(!$con){
		echo "Error".mysqli_connect_error();
	}
	else{
		echo "Connection Successfull!!!";
	}
?>	
