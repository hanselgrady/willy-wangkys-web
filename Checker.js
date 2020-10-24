let username = document.getElementById("username");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirm = document.getElementById("confirm");

username.addEventListener("blur", checkUsername);
email.addEventListener("blur", checkEmail);
password.addEventListener("blur", checkPassword);
confirm.addEventListener("blur", checkConfirmPassword);

function checkUsername() {
    var xmlhttp = new XMLHttpRequest();
    data = username.value;
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var resp = JSON.parse(this.responseText);
            [resp] = resp;
            if (resp != null) {
                document.getElementById("error-username").style.visibility = "visible";
            }
            else {
                document.getElementById("error-username").style.visibility = "hidden";
            }
        }
    };
}

function checkEmail() {
    var xmlhttp = new XMLHttpRequest();
    data = email.value;
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var patt = new RegExp("[\w-\.]+@([\w-]+\.)+[\w-]{2,4}");
            var verd = patt.test(data);
            if (!verd) {
                document.getElementById("error-email").style.visibility = "visible";
                document.getElementById("email").setCustomValidity("invalid");
            }
            else {
                document.getElementById("error-email").style.visibility = "hidden";
                document.getElementById("email").setCustomValidity("");
            }
        }
    };
}

function checkPassword() {
    data = password.value;
    if (data.length < 8) {
        document.getElementById("error-password").style.visibility = "visible";
        document.getElementById("password").setCustomValidity("invalid");
    }
    else {
        document.getElementById("error-password").style.visibility = "hidden";
        document.getElementById("password").setCustomValidity("");
    }
}

function checkConfirmPassword() {
    pass = password.value;
    conf = confirm.value;
    if (pass != conf) {
        document.getElementById("error-confirm").style.visibility = "visible";
        document.getElementById("confirm").setCustomValidity("invalid");
    }
    else {
        document.getElementById("error-confirm").style.visibility = "hidden";
        document.getElementById("confirm").setCustomValidity("");
    }
}