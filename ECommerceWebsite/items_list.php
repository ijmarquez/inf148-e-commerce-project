<div class="items-container">
    <div class="items-contents">
        <table border="1">
            <?php
                require_once('dbConnect.php');
                echo("test get list");

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
                    echo "<div class='image_thumbnail'>";
                    echo('<a href="item.php?product='.$row['generalName'].'&amp;image='.$row['imageLocation'].'">');
                    echo('<img class="image_thumbnail" src="'.$row['imageLocation'].'" alt="'.$row['generalName'].'">');
                    echo "</a></div>";
                    echo($row['generalName']);
                    echo "</p></div>";

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
    <hr>
</div>


<!--        <table>-->
<!--            <tr>-->
<!--                <td> <!-- [0][0]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <a href="index.php?page=item">-->
<!--                            <!--<a hritem.phphtml?Item_Color=images/item1/tshirtBlack.jpg">-->-->
<!--                            <img class="image_thumbnail" src="images/item1/tshirtBlack.png" alt="T-Shirt">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Men's Plain T-Shirt</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [0][1]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itvneckBlack.png.jpg">-->-->
<!--                        <a href="items/item2/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item2/vneckBlack.png" alt="V-Neck Shirt">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Men's V-Neck Shirt</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [0][2]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itlongsleeveBlack.png.jpg">-->-->
<!--                        <a href="items/item3/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item3/longSleeveBlack.png" alt="Long-sleeved Shirt">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Men's Long-Sleeved Shirt</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [0][3]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itlongsleeveVneckBlack.png.jpg">-->-->
<!--                        <a href="items/item4/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item4/longSleeveVneckBlack.png" alt="Long-sleeved V-Neck Shirt">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Men's Long-Sleeved V-Neck</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td> <!-- [1][0]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/ithoodieBlack.png.jpg">-->-->
<!--                        <a href="items/item5/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item5/hoodieBlack.png" alt="Hooded Shirt">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Men's Hooded Shirt</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [1][1]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itjerseyBlack.png.jpg">-->-->
<!--                        <a href="items/item6/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item6/jerseyBlack.png" alt="Jersey Shirt">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Men's Jersey Shirt</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [1][2]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itwomenChiffonTopBlue.png.png">-->-->
<!--                        <a href="items/item7/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item7/womenChiffonTopBlue.png" alt="Chiffon Blouse">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Women's Chiffon Blouse</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [1][3]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itwomenRacerBackTankOrange.png.png">-->-->
<!--                        <a href="items/item8/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item8/womenRacerBackTankOrange.png" alt="Racerback Top">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="items-name">-->
<!--                        <p>Women's Racerback Top</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td> <!-- [2][0]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itwomenOfficeBlue.png.png">-->-->
<!--                        <a href="items/item9/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item9/womenOfficeBlue.png" alt="Office Blouse">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Women's Office Blouse</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!---->
<!--                <td> <!-- [2][1]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itewomenPleatedBlack.png.png">-->-->
<!--                        <a href="items/item10/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item10/womenPleatedBlack.png" alt="Pleated Blouse">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Women's Pleated Blouse</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td> <!-- [2][2]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itewomenLooseFitCoffee.png.png">-->-->
<!--                        <a href="items/item11/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item11/womenLooseFitCoffee.png" alt="Loose-Fit Top">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Women's Loose-Fit Top</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td> <!-- [2][3]-->-->
<!--                    <div class="image_thumbnail">-->
<!--                        <!--<a hritem.phphtml?Item_Color=images/itewomenCasualBurgundy.png.png">-->-->
<!--                        <a href="items/item12/item1.html">-->
<!--                            <img class="image_thumbnail" src="images/item12/womenCasualBurgundy.png" alt="Casual Top">-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-name">-->
<!--                        <p>Women's Casual Top</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="items-price">-->
<!--                        <p>$10.00</p>-->
<!--                    </div>-->
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
