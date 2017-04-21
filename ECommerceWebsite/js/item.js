/**
 * Created by Calvin on 4/14/2017.
 */
var idPicked = document.getElementById("xxs");

function zoomIn() {
    var element = document.getElementById("overlay");
    element.style.display = "inline-block";
    var img = document.getElementById("imgZoom");
    var posX = event.offsetX ? (event.offsetX) : event.pageX - img.offsetLeft;
    var posY = event.offsetY ? (event.offsetY) : event.pageY - img.offsetTop ;
    element.style.backgroundPosition=(-posX * 10)+"px "+(-posY * 10)+"px";

    // var posXElement = document.getElementById("posX");
    // posXElement.style.display = "block"
    // posXElement.innerHTML = "Pos X : " + (-posX * 6);
    // var posYElement = document.getElementById("posY");
    // posYElement.innerHTML = "Pos Y : " + (-posY * 6);
    // posYElement.style.display = "block"
}

function zoomOut() {
    var element = document.getElementById("overlay");
    element.style.display = "none";

    // document.getElementById("posX").style.display = "none";
    // document.getElementById("posY").style.display = "none";
}

function sizeSelect(sizeClick) {
    var sizeID = [document.getElementById("xxs"), document.getElementById("xs"), document.getElementById("s"),
        document.getElementById("m"), document.getElementById("l"), document.getElementById("xl"), document.getElementById("xxl")];
    var id = document.getElementById(sizeClick);
    idPicked = id;
    for(i = 0; i < 7;++i)
    {
        if(sizeID[i] == id)
            id.style.borderColor="red";
        else
            sizeID[i].style.borderColor="black";
    }
}

function itemSelect(itemClick) {
    var sizeID = [document.getElementById("whiteShirt"), document.getElementById("blackShirt"), document.getElementById("blueShirt"),
        document.getElementById("greenShirt"), document.getElementById("greyShirt"), document.getElementById("redShirt"), document.getElementById("xxl")];
    var id = document.getElementById(itemClick);
    for(i = 0; i < 7; ++i)
    {
        if(sizeID[i] == id)
        {
            // document.getElementById("imgZoom").src = "../ite"
        }
    }
}

function buyItem() {
    window.location.href = "../../buyItem.html";
    // var itemPicked = document.getElementById("itemPicked");
    // var img = IEWIN ? Image() : document.createElement('img');
    // img.src = item.get
    // itemPicked.innerHTML =
    var sizePicked = document.getElementById("sizePicked");
    var size = idPicked.id;
    sizePicked.style.display = "block";
    sizePicked.innerHTML = "Size: " + size;

}
