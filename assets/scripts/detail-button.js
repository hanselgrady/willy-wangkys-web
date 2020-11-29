function detailAddStock() {
    
    document.getElementById("detail-form-stock").style.display = "block"
    document.getElementById("detail-add-stock-button").style.display = "none"
    document.getElementById("LabelTitle").innerHTML = "Add Stock"
    document.getElementById("item-label").style.display = "initial";

}

function cancelAddStock() {
    
    document.getElementById("detail-form-stock").style.display = "none";
    document.getElementById("detail-add-stock-button").style.display = "block"
    document.getElementById("LabelTitle").innerHTML = document.getElementById("item-name").innerHTML;
    document.getElementById("item-label").style.display = "none";
}

function detailBuy() {

    document.getElementById("detail-form-buy").style.display = "block"
    document.getElementById("detail-buy-button").style.display = "none"
    document.getElementById("LabelTitle").innerHTML = "Buy"
    document.getElementById("item-label").style.display = "initial";

}

function cancelBuy() {
    
    document.getElementById("detail-form-buy").style.display = "none"
    document.getElementById("detail-buy-button").style.display = "block"
    document.getElementById("LabelTitle").innerHTML = document.getElementById("item-name").innerHTML;
    document.getElementById("item-label").style.display = "none";

}

let buyButton = document.getElementById("buy-button");
let buyAmount = document.getElementById("buy-amount");
let stockAmount = document.getElementById("StockAmount");
let totalPrice = document.getElementById("total-price");
let itemPrice = document.getElementById("item-price");

function verifyBuyAmount() {
    if (parseInt(buyAmount.value) > 0 && parseInt(buyAmount.value) <= parseInt(stockAmount.innerHTML)) {
        buyButton.disabled = false;
    } else {
        buyButton.disabled = true;
    }
    totalPrice.innerHTML = 'Total Price: Rp' + (parseInt(buyAmount.value) * parseInt(itemPrice.value));

}


buyAmount.onkeyup = verifyBuyAmount;
buyAmount.onchange = verifyBuyAmount;
