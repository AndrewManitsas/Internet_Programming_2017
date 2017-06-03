<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$dbName = "papershare_db";

	//Create connection
	$connect = mysqli_connect($server_name, $username, $password, $dbName);

	//Chech if connection is live
	if (!$connect)
	{
		die("Connection Failed: " . mysqli_connect_error());
	}
	else
	{
		//echo "Successfull Connection<br>";
	}
?>