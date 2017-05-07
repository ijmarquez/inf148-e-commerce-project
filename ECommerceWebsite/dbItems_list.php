<?php
    echo"LIST";
    $stmt= $pdo->query("SELECT ID, cost, generalName, imageLocation FROM MainProduct");
    echo '<table>'."\n";
    $i = 0;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        if($i == 0) {
            echo"<tr>";
        }
        if ($i == 3) {
            echo "</tr>";
            $i=0;
        }
        $i++;
        echo "<td><div class='image_thumbnail'>";
        echo('<a href="index.php?page=item"><img class="image_thumbnail" src= "'.row['imageLocation'].'" alt="'.row['generalName'].'"></a></div>');
        echo "<div class='items-name'><p>";
        echo $row['generalName'];
        echo "</p></div><div class='items-price'><p>";
        echo $row['cost'];
        echo"</p></div></td>";
    };
    echo '</table>';
?>