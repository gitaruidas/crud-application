<?php

class DBconfig
{
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $database="regdata";

	protected $con;
	
	function __construct()
	{
		if(!($this->con=mysqli_connect($this->host,$this->user,$this->pass,$this->database)))
			echo "database not connected";
		return $this->con;
	}
}

?>