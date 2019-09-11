
<?php
//Start the session
session_start();
?>
<html>
	<head>
		
	</head>


	<body>
			<center><h3>Login Zone</h3></center><br><br>
			<form name="f1" action="" method="post">
				<input type="text" name="email" placeholder="Enter email..." title="Enter your email: " required><br>
				<input type="password" name="pass" placeholder="Enter Password..." title="Enter your Password: " required><br><br>
				<input type="submit" value="Submit" name="submit">
				<input type ="reset" value="Cancel"><br>
				<a href="reg.php">Not yet register???</a>

			</form>	




	</body>

</html>	

<?php
	include("config1.php");
	error_reporting(0);
	$user_name=$_POST["email"];
	$password=$_POST["pass"];
	$sql= "select email,pass from test1 where email='$user_name'";
	$result= $con->query($sql);
	$row= $result->fetch_assoc();


	if($_REQUEST['submit'])
	{
		if(($row['email']==$user_name) and( $row['pass']==$password))
		{
      		session_start();
   			$_SESSION['lid']=$user_name;
			/*echo"Insert Successfully ";*/
    		echo "<script>alert('Login Successfull!');</script>";
    		echo "<script>location.href='welcome1.php'</script>";
	
		} 
		else{
			echo "<script>alart('Login Unsuccessfull!!!');</script>";
		}       

	}

?>
<?php
	//Set session variables
	$_SESSION["email"]= $user_name;
	echo "Session variables are set.";
	//Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
?>
    



