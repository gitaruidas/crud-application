<?php
include ('crud.php');
if(isset($_REQUEST['submit']))
	{
		$obj=new Crud();
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];

		$sql="INSERT INTO checkoop(name,phone,email,pass) VALUES('$name','$phone','$email','$pass')";

		if($obj->insert($sql))
			{
				echo "data inserted successfully";
			}
		else
		{
			echo " data can not be inserted";
		}

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
<form action="index.php" method="POST">
	<table border="5">
		<tr><td>name:</td><td><input type="text" name="name"></td></tr>
		<tr><td>phone no:</td><td><input type="text" name="phone"></td></tr>
		<tr><td>email:</td><td><input type="email" name="email"></td></tr>
		<tr><td>password:</td><td><input type="password" name="pass"></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>


	</table>

	</form>

</body>
</html>

