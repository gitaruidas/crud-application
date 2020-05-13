<?php

include('crud.php');
$obj=new Crud();
$sql="UPDATE checkoop SET name='".$_POST['name']."',phone='".$_POST['phone']."',email='".$_POST['email']."',pass='".$_POST['pass']."' WHERE id=".$_POST['id'];

if($obj->update($sql))
{
	header("location:fetch.php");
}
else
{
	echo "can not update";
}

?>