/**
 * Created by Calvin on 4/20/2017.
 */


function getValues() {
    var item = localStorage.getItem('item');
    var imgPick = localStorage.getItem('img');
    var sizePick = localStorage.getItem('size');
    var costPick = localStorage.getItem('cost');

    var itemPicked = document.getElementById("itemPicked");
    var showImg = document.getElementById("showImg");
    var sizePicked = document.getElementById("sizePicked");
    var costPicked = document.getElementById("costPicked");


    itemPicked.style.display = "block";
    itemPicked.innerHTML = "Item Purchased: " + item;

    showImg.src=imgPick;

    sizePicked.style.display = "block";
    sizePicked.innerHTML = "Size: " + sizePick;

    costPicked.style.display = "block";
    costPicked.innerHTML = "Cost: " + costPick;
}

function updateTotal() {
   var a = Number(document.getElementById("quantity").value);
   var b = 10.00;
   var c = a * b;
   var total = c.toFixed(2);

   var totalCost = document.getElementById("totalCost");
   totalCost.style.display="block";
   totalCost.innerHTML = "Total: $" + total;
}

function checkForm() {
    var quantityField = document.userInfo.quantity;
    var firstNameField = document.userInfo.firstName;
    var lastNameField = document.userInfo.lastName;
    var emailAddress = document.userInfo.emailAddress;
    var phoneArea = document.userInfo.phoneArea;
    var phoneThree = document.userInfo.phoneThree;
    var phoneFour = document.userInfo.phoneFour;
    var creditCard = document.userInfo.creditCard;
    var ccExpire = document.userInfo.ccExpire;
    var billAddress = document.userInfo.billAddress;
    var billCity = document.userInfo.billCity;
    var billState = document.userInfo.billState;
    var billZipCode = document.userInfo.billZipCode;
    var shipAddress = document.userInfo.shipAddress;
    var shipCity = document.userInfo.shipCity;
    var shipState = document.userInfo.shipState;
    var shipZipCode = document.userInfo.shipZipCode;
    var val=ccExpire.value.split("/");

    //check quantity cannot be 0 (Done)
    if(!(parseInt(quantityField.value)>0))  {
        alert("Quantity must be at least 1");
        return(false);
    }
    else if(!quantityField.value.match(/^[0-9]+$/)) {
        alert("Quantity must be numbers");
        return(false);
    }
    //check first name (done)
    else if(firstNameField.value=="") {
        alert("First name cannot be blank");
        return false;
    }
    else if (!firstNameField.value.match(/^[a-zA-Z]+$/))
    {
        alert("First name cannot have numbers");
        return false;
    }

    //check last name (done)
    else if(lastNameField.value=="") {
        alert("Last name cannot be blank");
        return false;
    }
    else if (!lastNameField.value.match(/^[a-zA-Z]+$/))
    {
        alert("First name cannot have numbers");
        return false;
    }

    //check email (works)
    else if(emailAddress.value==""){
        alert("Email Address cannot be blank");
        return false;
    }
    else if(!emailAddress.value.match(/\S+@\S+\.\S+/)){
        alert("Email Address is not valid");
        return false;
    }

    //check phone number (works)
    else if(phoneArea.value=="" || phoneThree.value=="" || phoneFour.value=="") {
        alert("Phone Number cannot be blank");
        return false;
    }
    else if(phoneArea.value.length < 3 || phoneArea.value.length > 3 ) {
        alert("Area code must be 3 digits");
        return false;
    }
    else if(phoneThree.value.length < 3 || phoneThree.value.length > 3 ||
        phoneFour.value.length < 4 || phoneFour.value.length > 4) {
        alert("Phone number is not valid");
        return false;
    }

    //check credit card (works)
    else if(creditCard.value.length != 16) {
        alert("Credit card must be have 16 digits");
        return false;
    }
    else if(creditCard.value =="") {
        alert("Credit card cannot be blank");
        return false;
    }
    else if (!creditCard.value.match(/^[0-9]+$/))
    {
        alert("Invalid CreditCard");
        return false;
    }

    //check cc expiration date (works)
    else if (isNaN(val[0]) || isNaN(val[1])  || !ccExpire.value.match(/^(0[1-9]|1[0-2])\/\d{2}$/)){
        alert("Credit card Expiration must be in MM/YY");
        return false;
    }

    //check billing address (works)
    else if(billAddress.value=="") {
        alert("Billing Address cannot be blank");
        return false;
    }

    //check billing city (works)
    else if(billCity.value=="") {
        alert("Billing Address city cannot be blank");
        return false;
    }
    else if(!billCity.value.match(/^[a-zA-Z]+$/)) {
        alert("Invalid Billing City");
        return false;
    }

    //check billing state (works)
    else if(billState.value=="") {
        alert("Billing Address State cannot be blank");
        return false;
    }
    else if(billState.value.length != 2 || !billState.value.match(/^[a-zA-Z]+$/)) {
        alert("Invalid Billing State, format XX");
        return false;
    }

    //check billing zip code (works)
    else if(billZipCode.value.length != 5 || !billZipCode.value.match(/^[0-9]+$/)) {
        alert("Invalid Billing Zip Code")
        return false;
    }

    //check shipping address
    else if(shipAddress.value=="") {
        alert("Shipping Address cannot be blank");
        return false;
    }

    //check shipping city
    else if(shipCity.value=="") {
        alert("Shipping Address city cannot be blank");
        return false;
    }
    else if(!shipCity.value.match(/^[a-zA-Z]+$/)) {
        alert("Invalid Shipping City");
        return false;
    }

    //check shipping state
    else if(shipState.value=="") {
        alert("Shipping State cannot be blank");
        return false;
    }
    else if(shipState.value.length != 2 || !shipState.value.match(/^[a-zA-Z]+$/)) {
        alert("Invalid Shipping State, format XX");
        return false;
    }

    //check shipping zip code
    else if(shipZipCode.value.length != 5 || !shipZipCode.value.match(/^[0-9]+$/)) {
        alert("Invalid Shipping Zip Code")
        return false;
    }
    sendEmail()
    return true;
}

function sendEmail(check) {
    if(!check){ return; }

    var itemPicked = document.getElementById(itemPicked).value;
    var sizePicked = document.getElementById(sizePicked).value;
    var quantity = document.getElementById(quantity).value;
    var totalCost = document.getElementById(totalCost).value;

    var firstName = document.getElementsByName(firstName);
    var lastName = document.getElementsByName(lastName);
    var email = document.getElementsByName(emailA);

    var body = "Order Invoice\n" +
        itemPicked + "\n" +
        sizePicked + "\n" +
        quantity + "\n" +
        totalCost + "\n" +
        firstName + " " + lastName + "\n" +
        email;


    window.location.href = "mailto:panteater@uci.edu?subject=Order Place&body="+body;
}