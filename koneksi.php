<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "mahasiswa";

	try{
		$db = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		die("Connection error: " . $exception->getMessage());
	}

?>