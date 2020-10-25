function detailAddStock() {
    
    document.getElementById("detail-form").style.display = "initial";
    document.getElementById("detail-add-stock-button").style.display = "none";
    document.getElementById("LabelTitle").innerHTML = "Add Stock"
    document.getElementById("item-label").style.display = "initial";

}

function cancelAddStock() {
    
    document.getElementById("detail-form").style.display = "none";
    document.getElementById("detail-add-stock-button").style.display = "initial";
    document.getElementById("LabelTitle").innerHTML = document.getElementById("item-name").innerHTML;
    document.getElementById("item-label").style.display = "none";
}

function detailBuy() {

}
