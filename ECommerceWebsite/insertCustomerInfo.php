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
    $itemPurchase = "black";
    $itemSize = "XXSmall";
    $quantity = $_POST['quantity'];
    $unitPrice = "10.00";
    $tax = "0.09";
    $total = "10.09";
//    echo("ccType = " .$ccType);
//    echo("PhoneNumber = ".$phoneNumber);
//    echo("deliveryType = ".$deliveryType);
//    echo("ItemPurchase = ".$itemPurchase);
//    echo("ItemSize = ".$itemSize);
//    echo("Quantity = ".$quantity);
//    echo("UnitPrice = ".$unitPrice);
//    echo("Tax = ".$tax);
//    echo("Total = ".$total);

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
        'itemPurchase' => $itemPurchase,
        ':itemSize' => $itemSize,
        ':quantity' => $_POST['quantity'],
        ':unitPrice' => $unitPrice,
        ':tax' => $tax,
        ':total' => $total ));

    include ('dbClose.php');
?>

<!--//             VALUES ('$firstname', '$lastName', '$emailAddress', '$phoneNumber', '$ccType', '$creditCardNumber',-->
<!--//             '$ccExpire', '$billAddress', '$billCity', '$billState', '$billZipCode', '$shipAddress', '$shipCity',-->
<!--//             '$shipState', '$shipZipCode', '$deliveryType', '$itemPurchase', '$itemSize', '$quantity', '$unitPrice',-->
<!--//             '$tax', '$total')";-->
<!--':billAddress' => $billAddress,-->
<!--':billCity' => $billCity,-->
<!--':billState' => $billState,-->
<!--':billZipCode' => $billZipCode,-->
<!--':shipAddress' => $shipAddress,-->
<!--':shipCity' => $shipCity,-->
<!--':shipState' => $shipState,-->
<!--':shipZipCode' => $shipZipCode,-->
<!--':deliveryType' => $deliveryType,-->
<!--'itemPurchase' => $itemPurchase,-->
<!--':itemSize' => $itemSize,-->
<!--':quantity' => $quantity,-->
<!--':unitPrice' => $unitPrice,-->
<!--':tax' => $tax,-->
<!--':total' => $total ));-->
