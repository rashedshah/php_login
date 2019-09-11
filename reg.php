<html>
	<body>
	<center><h3>Registration Zone</h3></center><br><br>
	<form style="margin-top:50px" name="form1" method="post" action="" enctype="multipart/form-data"/>
	<table>
		<tr>
			<td><label>Enter Your Id...</label></td> 
			<td><input type="text" name="id"></td>
		</tr>

		<tr>
			<td><label>Enter Your Password...</label></td><br>
			 <td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td><label>Enter Your Full Name...</label></td>
			<td><input type="text" name="fname">
		</tr>

		<tr>
			<td><button type="submit" name="submit">Register</button></td>
		</tr>


	</table>
	</form>
	<br><a href="index1.php">Go to Login?</a>
	</body>	



		<?php
			include("config1.php");
			$id =$_POST['id'];
			$pass =$_POST['pass'];
			$fname =$_POST['fname'];
			if(isset($_POST["submit"]))
			{
				$sql ="insert into test1(email,pass,f_name) values('$id','$pass','$fname')";
				$query=mysqli_query($con,$sql);
				if($query)
				{
					/*echo"Insert Successfully ";*/
    				echo "<script>alert('Registered Successfully!');</script>";
					echo "<script>location.href='index1.php?email=$user_name'</script>";

				}
			}	

		?>
	
</html>