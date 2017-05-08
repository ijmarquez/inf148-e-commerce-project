<?php include('header.php'); ?>

    <div class="itemName">
    <?php
        require_once ('dbConnect.php');
        $product = $_GET['product'];
        $image = $_GET['image'];
        $displayName = $conn->query("SELECT  `Display Name` FROM  `MainProduct` ,  `Product` 
                            WHERE MainProduct.generalName =  \"$product\" && Product.Location =  \"$image\"");
        $itemName = $displayName->fetchColumn(0);

        //display item name
        echo("<h2>");
        echo($itemName);
        echo("</h2>");

        //display item image
        echo('<div class="productContainer"><img id="productContainerImg" src=\'');
        echo($image);
        echo("'>");

    ?>
    </div>
        <ul class="itemCategories">
            <li class="productList">
                <div class="productListChoice">
                    <h3>Change View:</h3>
                </div>

                <div class="list">
                    <ul class="boxList">
                        <?php
                            $stmt = $conn-> query("SELECT  `Location` ,  `Display Name` ,  `description`, `generalName` FROM  `Product` ,  `MainProduct`
                                            WHERE MainProduct.generalName =  \"$product\" && MainProduct.ID = Product.ID");
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo('<li class="itemList"> ');
                                echo('<a class="items" href="item.php?product='.$row['generalName'].'&amp;image='.$row['Location'].'">');
                                echo('<img class="itemImg" src="'.$row['Location'].'">');
                                echo('</a></li>');
                            }

                        ?>
                    </ul>
                </div>
            </li>

    <li class="sizeList">
        <div class="sizeChoice">
            <h3>Choose a Size:</h3>
        </div>
        <ul class="boxList">
            <li>
                <a title="XXSmall" class="sizeSelection" id="xxs" onclick="sizeSelect(this.id)" >XXSmall</a>
            </li>
            <li>
                <a title="XSmall" class="sizeSelection" id="xs" onclick="sizeSelect(this.id)">XSmall</a>
            </li>
            <li>
                <a title="Small" class="sizeSelection" id="s" onclick="sizeSelect(this.id)">Small</a>
            </li>
            <li>
                <a title="Medium" class="sizeSelection" id="m" onclick="sizeSelect(this.id)">Medium</a>
            </li>
            <li>
                <a title="Large" class="sizeSelection" id="l" onclick="sizeSelect(this.id)">Large</a>
            </li>
            <li>
                <a title="XLarge" class="sizeSelection" id="xl" onclick="sizeSelect(this.id)">XLarge</a>
            </li>
            <li>
                <a title="XXLarge" class="sizeSelection" id="xxl" onclick="sizeSelect(this.id)">XXLarge</a>
            </li>
        </ul>
    </li>
</ul>

        <div id="btnContainer">
            <?php
                $btnQuery = $conn->query("SELECT  `cost` FROM  `MainProduct` ,  `Product` 
                    WHERE Product.`Display Name` =  \"$itemName\" && Product.productID = MainProduct.product");
                $showCost = $btnQuery->fetchColumn(0);

                //show cost
                echo('<p id="cost">$');
                echo($showCost);
                echo('</p>');

                //submit button
                echo('<input id="btn" type="button" value="BUY NOW" onclick="buyItem(\''.$image.'\', \''.$itemName.'\')"/>');
            ?>
        </div>
    </div>

    <div class="descriptionContainer">
        <h3 id="descriptionHeader"> Description</h3>
        <?php
            $descriptionQuery = $conn->query("SELECT  `description` FROM  `MainProduct` ,  `Product` 
                WHERE Product.`Display Name` =  \"$itemName\" && Product.productID = MainProduct.product");
            $showDescription = $descriptionQuery->fetchColumn(0);
            echo('<p>');
            echo($showDescription);
            echo('</p>');
        ?>
    </div>

<?php include('dbClose.php');;?>
<?php include('footer.php'); ?>