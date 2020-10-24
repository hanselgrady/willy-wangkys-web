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
                        <input text="text" placeholder="e.g. johndoe13" id="username" required>
                        <label>Username</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-username">Username is not valid!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" placeholder="e.g. johndoe@gmail.com" id="email" required>
                        <label>Email</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-email">Email is not valid!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" type="password" placeholder="Password" id="password" required>
                        <label>Password</label>
                    </div>
                    <div class="invalid-register">
                        <p id="error-password">Password is too short!</p>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="input-wrapper">
                        <input text="text" type="password" placeholder="Confirm Password" id="confirm" required>
                        <label>Confirm Password</label>
                    </div>
                </div>
                <div class="component-wrapper">
                    <div class="button-wrapper">
                        <input type="submit" value="Register">
                        <input type="button" onclick="location.href = 'login.php'" value="Login Here!">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
