<div class="items-container">
    <div class="items-contents">
        <table class="itemListTable">
            <?php
                require_once('dbConnect.php');

                $stmt= $conn->query("SELECT cost, generalName, imageLocation FROM MainProduct");
                $i = 1;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                    if($i == 1) {
                        echo"<tr>";
                    }
                    if ($i == 5) {
                        echo "</tr>";
                        $i=1;
                    }
                    //create column
                    echo "<td> \n";

                    //display item
                    echo "<div class='image_thumbnail_holder'>";
                    echo('<a href="item.php?product='.$row['generalName'].'&amp;image='.$row['imageLocation'].'">');
                    echo('<img class="image_thumbnail" src="'.$row['imageLocation'].'" alt="'.$row['generalName'].'">');
                    echo "</a></div>";
                    //display item name
                    echo "<div class='items-name'><p>";
                    echo($row['generalName']);
                    echo "</p></div>";

                    //display item prices
                    echo "<div class='items-price'><p>";
                    echo("$".$row['cost']);
                    echo "</p></div>";

                    //end of column
                    echo"</td> \n";
                    $i++;
                };
                include('dbClose.php');
            ?>
        </table>
    </div>
</div>

