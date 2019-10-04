<?php

$servername = "localhost";
$username = "genuinev_root";
$password = "qw4hd123";
$dbname = "genuinev_VA";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
		echo $e;
    	die("OOPs something went wrong");
    }
 
?>
