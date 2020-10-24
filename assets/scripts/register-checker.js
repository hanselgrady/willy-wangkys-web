let username = document.getElementById("username");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirm = document.getElementById("confirm");
let confirmButton = document.getElementById("register-button");

username.addEventListener("blur", checkUsername);
email.addEventListener("blur", checkEmail);
password.addEventListener("blur", checkPassword);
confirm.addEventListener("blur", checkConfirmPassword);

let uValid = false;
let eValid = false;
let pValid = false;
let cValid = false;

function updateConfirmButton() {
    if (uValid && eValid && pValid && cValid) {
        confirmButton.disabled = false;
    } else {
        confirmButton.disabled = true;
    }
}

function checkUsername() {
    var xmlhttp = new XMLHttpRequest();
    data = username.value;
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var resp = JSON.parse(this.responseText);
            if (!resp.checkRes) {
                document.getElementById("error-username").style.visibility = "visible";
                uValid = false;
            }
            else {
                document.getElementById("error-username").style.visibility = "hidden";
                uValid = true;
            }
            updateConfirmButton();
        }
    };
    xmlhttp.open('POST', '/check-username.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send('username='+data);
}

function checkEmail() {
    var xmlhttp = new XMLHttpRequest();
    data = email.value;
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var resp = JSON.parse(this.responseText);
            var patt = new RegExp("[\\\w\\\-\\\.]+@([\\\w\-]+\\\.)+[\\\w\\\-]{2,4}");
            var verd = patt.test(data);
            if (!verd || !resp.checkRes) {
                document.getElementById("error-email").style.visibility = "visible";
                document.getElementById("email").setCustomValidity("invalid");
                eValid = false;
            }
            else {
                document.getElementById("error-email").style.visibility = "hidden";
                document.getElementById("email").setCustomValidity("");
                eValid = true;
            }
            updateConfirmButton();
        }
    };
    xmlhttp.open('POST', '/check-email.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send('email='+data);
}

function checkPassword() {
    data = password.value;
    if (data.length < 8) {
        document.getElementById("error-password").style.visibility = "visible";
        document.getElementById("password").setCustomValidity("invalid");
        pValid = false;
    }
    else {
        document.getElementById("error-password").style.visibility = "hidden";
        document.getElementById("password").setCustomValidity("");
        pValid = true;
    }
            updateConfirmButton();
}

function checkConfirmPassword() {
    pass = password.value;
    conf = confirm.value;
    if (pass != conf) {
        document.getElementById("error-confirm").style.visibility = "visible";
        document.getElementById("confirm").setCustomValidity("invalid");
        cValid = false;
    }
    else {
        document.getElementById("error-confirm").style.visibility = "hidden";
        document.getElementById("confirm").setCustomValidity("");
        cValid = true;
    }
            updateConfirmButton();
}
