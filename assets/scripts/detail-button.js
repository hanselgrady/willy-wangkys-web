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
