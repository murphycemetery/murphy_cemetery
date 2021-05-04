<?php
//PHP PDO connection file
//This file is used to connect to the database.
//Include file into your application as needed

$serverName = 'localhost';
//$username = 'murphy_admin'; 	//usernane of database
$username = 'emanning11_murphy-cemetery';
$password = 'MurphyCemetery_Group2';			//password of database
//$databaseName = 'murphy-cemetery';		//name of the database you will be accessing
$databaseName = 'emanning11_murphy-cemetery';		//name of the database you will be accessing



try {
	//$conn is a constructor methord (initializes a new object)
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected successfully";
    }

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
