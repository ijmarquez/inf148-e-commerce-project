/**
 * Created by Calvin on 4/20/2017.
 */

function getValues() {
    var imgPick = localStorage.getItem("img");
    var sizePick = localStorage.getItem("size");
    var costPick = localStorage.getItem("cost");

    var itemPicked = document.getElementById("showImg");
    var sizePicked = document.getElementById("sizePicked");
    var costPicked = document.getElementById("costPicked");

    itemPicked.src=imgPick;

    sizePicked.style.display = "block";
    sizePicked.innerHTML = "Size: " + sizePick;

    costPicked.style.display = "block";
    costPicked.innerHTML = "Cost: " + costPick;
}

function checkForm() {
    var quantityField = document.userInfo.quantity;
    var firstNameField = document.userInfo.firstName;
    var lastNameField = document.userInfo.lastName;
    var emailAddress = document.userInfo.emailAddress;
    var phoneNumber = document.userInfo.phoneNumber
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

    //check quantity cannot be 0
    // if(!(parseInt(quantityField.value)>0))  {
    //     alert("Quantity must be at least 1");
    //     return(false);
    // }
    //
    //check first name
    // if(firstNameField.value=="") {
    //     alert("First name cannot be blank");
    //     return false;
    // }
    //
    //check last name
    // if(lastNameField.value=="") {
    //     alert("Last name cannot be blank");
    //     return false;
    // }
    //
    //check email
    // if(emailAddress.value==""){
    //     alert("Email Address cannot be blank");
    //     return false;
    // }
    //
    //check phone number
    // if(phoneNumber.value=="")
    // {
    //     alert("Phone Number cannot be blank");
    //     return false;
    // }

    //check credit card (works)
    // if(creditCard.value.length != 16) {
    //     alert("Credit card must be have 16 digits");
    //     return false;
    // }
    // else if(creditCard.value =="") {
    //     alert("Credit card cannot be blank");
    //     return false;
    // }

    //check cc expiration date (works)
    // var val=ccExpire.value.split("/");
    // if (isNaN(val[0]) || isNaN(val[1])  ||!ccExpire.value.match(/^(0[1-9]|1[0-2])\/\d{2}$/)){
    //     alert("Credit card Expiration must be in MM/YY");
    //     return false;
    // }

    //check billing address


    //check billing city


    //check billing state


    //check billing zip code


    //check shipping address


    //check shipping city


    //check shipping state


    //check shipping zip code



    return true;
}