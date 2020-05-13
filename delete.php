<?php
include ('crud.php');
$obj=new Crud();
$id=$_GET['id'];
$sql="DELETE FROM checkoop WHERE id=".$id;

if($obj->delete($sql))
{
	header("location:fetch.php");
	//echo "data deleted successfully";
}
else
{
	echo "data can not deleted";
}


?>