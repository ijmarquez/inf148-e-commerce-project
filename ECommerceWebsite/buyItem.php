<body onload="getValues()">
<div class="form">
    <form method="post" action="index.php?page=insertCustomerInfo" name="userInfo" onsubmit="checkForm()">
        <label for="mail">
            <div class="itemSelected">
                <div>
                   <p>Item Purchase:</p>
                    <input id="itemPicked" name="itemPurchase" class="inputReadOnly" readonly> </input>
                </div>
                <img id="showImg">
                <div>
                    <p>Size: <input id="sizePicked" name="itemSize" class="inputReadOnly" size="7"readonly> </input> </p>
                </div>
            </div>

            <table class="buyItemTableContainer">
                <h2 class="formSep">Personal Information</h2>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstName"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastName"></td>
                </tr>
                <tr>
                    <td> Email Address: </td>
                    <td> <input type="email" name="emailAddress"> </td>
                </tr>
                <tr>
                    <td> Phone Number: </td>
                    <td> <input type="tel" name="phoneArea"> - </td>
                    <td> <input type="tel" name="phoneThree"> - </td>
                    <td> <input type="tel" name="phoneFour"> </td>
                </tr>
            </table>


            <table class="buyItemTableContainer">
                <h2 class="formSep">Billing Information</h2>
                <tr>
                    <td>Credit Card Type:</td>
                    <td>
                        <select name="ccType">
                            <option value="Visa">Visa</option>
                            <option value="MasterCard">MasterCard</option>
                            <option value="AMEX">AMEX</option>
                            <option value="Discover">Discover</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Credit Card:</td>
                    <td><input type="text" name="creditCardNumber"> </td>
                </tr>
                <tr>
                    <td> Expiration Date:</td>
                    <td><input type="text" name="ccExpire"> </td>
                </tr>
                <tr>
                    <td>Billing Address: </td>
                    <td> <input type="text" name="billAddress"> </td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td> <input type="text" name="billCity"> </td>
                </tr>
                <tr>
                    <td>State: </td>
                    <td> <input type="text" name="billState"> </td>
                </tr>
                <tr>
                    <td>Zip Code: </td>
                    <td> <input type="text" name="billZipCode"> </td>
                </tr>
            </table>

            <table class="buyItemTableContainer">
                <h2 class="formSep"> Shipping Information</h2>
                <tr>
                    <td>Shipping Address: </td>
                    <td> <input type="text" name="shipAddress"></td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td> <input type="text" name="shipCity"> </td>
                </tr>
                <tr>
                    <td>State: </td>
                    <td> <input type="text" name="shipState"> </td>
                </tr>
                <tr>
                    <td>Zip Code: </td>
                    <td> <input type="text" name="shipZipCode"> </td>
                </tr>
                <tr>
                    <td>Delivery Option: </td>
                    <td>
                        <select id="deliveryType" name="deliveryType" onchange="updateTotal()">
                            <option value="Overnight" selected="selected">Overnight.....$10</option>
                            <option value="2 Days" >    2 Days.........$5</option>
                            <option value="7-10Days" > 7-10 Days......$3</option>
                        </select>
                    </td>
                </tr>
            </table>
        </label>

        <div class="costContainer">
            <h2 class="formSep">Overview</h2>
            <div class="centerOverview">
                <p>Cost: $<input id="costPicked" name="unitPrice" class="inputReadOnly" readonly> </input></p>
                Quantity:
                <input id="quantity" type="text" name="quantity" size="3" value=1 onkeyup="updateTotal()"> <br>
                <p>Tax: $ <input id="taxPicked" name="tax" value="0.15" onkeyup="updateTotal()" class="inputReadOnly" readonly> </input></p>
                <p>Total: $ <input input id="totalCost" name="total" value="10.00" class="inputReadOnly" readonly> </input></p>

            </div>
            <div id="submitOrder">
                <input id="btn" type="submit" value="Submit Order" onclick="return checkForm(); return false">
            </div>
        </div>
    </form>
</div>
