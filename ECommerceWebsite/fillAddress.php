<?php
require_once ('dbConnect.php');

$state = $_GET['term'];
$stmt = $conn->query("SELECT DISTINCT `City` FROM  `ZipCodes` WHERE  `City` LIKE  '$state%' LIMIT 5");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $return_arr[] = $row['City'];
    }
    echo json_encode($return_arr)


//this works
//$state = $_POST['query'];
//$stmt = $conn->query("SELECT DISTINCT `City` FROM  `ZipCodes` WHERE  `City` LIKE  '$state%' LIMIT 5");
//while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    //    echo "<div>".$row['City']."</div>";
//}

?>