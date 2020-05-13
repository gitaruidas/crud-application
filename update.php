<?php
include('crud.php');
$obj=new Crud();
$sql="SELECT * FROM checkoop WHERE id=".$_GET['id'];
$res=$obj->fetch($sql);

?>
<html>
<head>
	<title>registration</title>
</head>
<body>
<form action="updatedo.php" method="POST">

<?php while($row=mysqli_fetch_assoc($res))
{

	?>

	<table border="5">
		<tr><td>name:</td><td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td></tr>
		<tr><td>phone no:</td><td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td></tr>
		<tr><td>email:</td><td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td></tr>
		<tr><td>password:</td><td><input type="password" name="pass" value="<?php echo $row['pass']; ?>"></td></tr>
		<tr><td></td><td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>


	</table>

	<?php
}
	?>

	</form>

</body>
</html>