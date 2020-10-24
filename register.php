<!DOCTYPE HTML>
<html lang="en" dir="lttr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/styles/LoginRegister.css">
    </head>
    <body>
        <div class="outer-box">
            <h1>Willy Wangky Choco Factory</h1>
            <form method="POST" action="">
            <div class="input-area-register">
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" name="usrename" placeholder="e.g. johndoe13" id="username" onkeyup="checkUsername(this.value)" required>
                        <label>Username</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-username">Username is not valid!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" name="email" placeholder="e.g. johndoe@gmail.com" id="email" onkeyup="checkEmail(this.value)" required>
                        <label>Email</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-email">Email is not valid!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" name="password" type="password" placeholder="Password" id="password" onkeyup="checkPassword(this.value)" required>
                        <label>Password</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-password">Password is too short!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" name="confirm" type="password" placeholder="Confirm Password" id="confirm" onkeyup="checkConfirmPassword(this.value, getElementById('password'))" required>
                        <label>Confirm Password</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-confirm">Password and confirm password do not match!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="button-wrapper">
                        <input type="submit" value="Register" id="register-button" disabled>
                        <input type="button" onclick="location.href = 'login.php'" value="Login Here!">
                    </div>
                </div>
            </div>
            </form>
        </div>
        <script src="assets/scripts/register-checker.js"></script>
    </body>
</html>
