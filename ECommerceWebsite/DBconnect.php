<?php
    include $_SERVER['DOCUMENT_ROOT'].'/../dbconfig.php';;
    $hostname = DB_HOST;
    $username = DB_USER;
    $password = DB_PASSWORD;
    $dbname = DB_DATABASE;

    try {
        echo"inside try \n";
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        echo"afterPDO \n";
        //set the PDO error to exception
        $conn->setAttribute(PDO::ATTR_ERRMOD, PDO::ERRMODE_EXCEPTION);
        echo"it works \n";
    } catch (PDOException $e) {
        echo"Username: " .$username;
        echo"Connection failed: " .$e->getMessage();
    }

    $conn = null;
?>
