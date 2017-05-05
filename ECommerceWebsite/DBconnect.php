<?php
//include $_SERVER['DOCUMENT_ROOT'].'/../dbconfig.php';
//    $hostname = DB_HOST;
//    $username = DB_USER;
//    $password = DB_PASSWORD;
//    $dbname = DB_DATABASE;
$servername = "sylvester-mccoy-v3.ics.uci.edu";
$username = "inf124-db-063";
$password = "GSaxgpMPZKhN";
$dbname = "inf124-db-063";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>

