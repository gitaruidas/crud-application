<?php

	include ('crud.php');
	$obj=new Crud();
	$sql="SELECT * FROM checkoop";
	$res=$obj->fetch($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>fetch</title>
</head>
<body>

	<table border="5">
		
		<tr><th>id</th><th>name</th><th>phone</th><th>email</th><th>password</th><th>action</th></tr>

<?php while ($row=mysqli_fetch_array($res))
 {
?>


		<tr><td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['phone']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['pass']; ?></td><td><a href="update.php?id=<?php echo $row['id']; ?>">Update |</a><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td></tr>

		<?php

}

?>


	</table>

</body>
</html>

