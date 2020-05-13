<?php
session_start();
include ('crud.php');
if(isset($_REQUEST['submit']))
	{
		$obj=new Crud();
		$email=$_POST['email'];
		$pass=$_POST['pass'];

		$sql="SELECT * FROM checkoop WHERE email='$email' AND pass='$pass'";
		$res=$obj->fetch($sql);
		if($row=mysqli_fetch_array($res))
		{
			$_SESSION['uid']=$email;
			header("location:welcome.php")
			//echo "login successfull";
		}
		else
		{
			echo "login unsuccessfull. click here to login";
			echo "<a href='login.php'>login</a>";

		}

	}

?>