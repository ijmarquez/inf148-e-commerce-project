
<body>
    <div class="confirmContainer">
        <h2> Order Complete </h2>
        <br>
        <h3> Order Summary</h3>
        <br>
        <?php
            require_once ('dbConnect.php');

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $emailAddress = $_POST['emailAddress'];
            $phoneArea = $_POST['phoneArea'];
            $phoneThree = $_POST['phoneThree'];
            $phoneFour = $_POST['phoneFour'];
            $ccType = $_POST['ccType'];
            $creditCardNumber = $_POST['creditCardNumber'];
            $ccExpire = $_POST['ccExpire'];
            $billAddress = $_POST['billAddress'];
            $billCity = $_POST['billCity'];
            $billState = $_POST['billState'];
            $billZipCode = $_POST['billZipCode'];
            $shipAddress = $_POST['shipAddress'];
            $shipCity = $_POST['shipCity'];
            $shipState = $_POST['shipState'];
            $shipZipCode = $_POST['shipZipCode'];
            $deliveryType = $_POST['deliveryType'];
            $phoneNumber = $phoneArea.$phoneThree.$phoneFour;
            $itemPurchase = $_POST['itemPurchase'];
            $itemSize = $_POST['itemSize'];
            $quantity = $_POST['quantity'];
            $unitPrice = $_POST['unitPrice'];
            $tax = $_POST['tax'];
            $total = $_POST['total'];
        //    echo($creditCardNumber);
        //    echo("ccType = " .$ccType);
        //    echo("PhoneNumber = ".$phoneNumber);
        //    echo("deliveryType = ".$deliveryType);
//            echo("ItemPurchase = ".$itemPurchase);
//            echo("ItemSize = ".$itemSize);
//            echo("Quantity = ".$quantity);
//            echo("UnitPrice = ".$unitPrice);
//            echo("Tax = ".$tax);
//            echo("Total = ".$total);

            $sql = "INSERT INTO Customer (firstName, lastName, emailAddress, phoneNumber, ccType, creditCardNumber, ccExpire,
                     billAddress, billCity, billState, billZipCode, shipAddress, shipCity, shipState, shipZipCode, deliveryType,
                     itemPurchase, itemSize, quantity, unitPrice, tax, total)
                     VALUES (:firstName, :lastName, :emailAddress, :phoneNumber, :ccType, :creditCardNumber, :ccExpire,
                     :billAddress, :billCity, :billState, :billZipCode, :shipAddress, :shipCity, :shipState, :shipZipCode, 
                     :deliveryType, :itemPurchase, :itemSize, :quantity, :unitPrice, :tax, :total)";

            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':firstName' => $_POST['firstName'],
                ':lastName' => $_POST['lastName'],
                ':emailAddress' => $_POST['emailAddress'],
                ':phoneNumber' => $phoneNumber,
                ':ccType' => $_POST['ccType'],
                ':creditCardNumber' => $_POST['creditCardNumber'],
                ':ccExpire' => $_POST['ccExpire'],
                ':billAddress' => $_POST['billAddress'],
                ':billCity' => $_POST['billCity'],
                ':billState' => $_POST['billState'],
                ':billZipCode' => $_POST['billZipCode'],
                ':shipAddress' => $_POST['shipAddress'],
                ':shipCity' => $_POST['shipCity'],
                ':shipState' => $_POST['shipState'],
                ':shipZipCode' => $_POST['shipZipCode'],
                ':deliveryType' => $_POST['deliveryType'],
                'itemPurchase' => $_POST['itemPurchase'],
                ':itemSize' => $_POST['itemSize'],
                ':quantity' => $_POST['quantity'],
                ':unitPrice' => $_POST['unitPrice'],
                ':tax' => $_POST['tax'],
                ':total' => $_POST['total'] ));


            include ('dbClose.php');

            //item info
            echo('<p> Item ordered: '.$itemPurchase.'</p>');
            echo('<p> Size ordered: '.$itemSize.'</p>');
            echo('<p> Cost per unit: $'.$unitPrice.'</p>');
            echo('<p> Quantity ordered: '.$quantity.'</p>');
            echo('<p> Tax purchased: '.$tax.'</p>');
            echo('<p> Total Cost: $'.$total.'</p>');

            //personal info
            echo('<h4> Personal Information</h4>');
            echo('<p> Name: '.$firstName.' '.$lastName.'</p>');
            echo('<p> Email Address: '.$emailAddress.'</p>');
            echo('<p> Phone Number: '.$phoneNumber.'</p>');

            //Billing info
            echo('<h4> Billing Information</h4>');
            echo('<p> Credit Card: '.$ccType.' </p>');
            echo('<p> Billing Address: <br>'.$billAddress.'<br> '.$billCity.' '.$billState.', '.$billZipCode.'</p>');

            //Shipping info
            echo('<h4> Shipping Information</h4>');
            echo('<p> Shipping Address: <br>'.$shipAddress.'<br> '.$shipCity.' '.$shipState.', '.$shipZipCode.'</p>');
            echo('<p>Delivery Option: '.$deliveryType.'</p>');
        ?>
    </div>

    <div id="orderCompleteContainer">
        <input id="orderCompleteBtn" type="submit" value="Finish" onclick="location.href='index.php?page=items_list'">
    </div>
</body>
