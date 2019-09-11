
<?php
//Start the session
session_start();
?>
<html>
	<body>
	<a href=""> Log Out</a><br>
	</body>



<?php
	include("config1.php");

	

?>
<?php
	$user=$_SESSION["email"];
	echo "Logged In as ";
	echo "$user";
	//echo "Logged In as ".$_SESSION["email"].".<br>";
	//Echo session variables that were set on previous page.
?>	
</html>