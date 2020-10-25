function detailAddStock() {
    
    document.getElementById("detail-form-stock").style.display = "block"
    document.getElementById("detail-add-stock-button").style.display = "none"
}

function cancelAddStock() {
    document.getElementById("detail-form-stock").style.display = "none"
    document.getElementById("detail-add-stock-button").style.display = "block"
}
function detailBuy() {
    document.getElementById("detail-form-buy").style.display = "block"
    document.getElementById("detail-buy-button").style.display = "none"
}

function cancelBuy() {
    document.getElementById("detail-form-buy").style.display = "none"
    document.getElementById("detail-buy-button").style.display = "block"
}