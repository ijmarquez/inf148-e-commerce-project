<?php
require_once ('dbConnect.php');
    $zip=$_GET["zip"];

    $stmt = $conn->query("SELECT  `CombinedRate` ,  `State` ,  `TaxRegionName` 
              FROM  `TaxRates` WHERE ZipCode =  \"$zip\"");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        $tax = $row['CombinedRate'];
        $state = $row['State'];
        $city = $row['TaxRegionName'];
    }

    echo($tax.", ".$state.", ".$city);
include ('dbClose.php');
?>
