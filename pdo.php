<?php
$servername = "localhost";
$dbname = "asf";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


$stmt = $conn->prepare("SELECT * FROM pumps");
$stmt->execute();
//var_dump($stmt);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);

?>