<?php
    $invalidLoginVisibility = 'hidden';
    if (isset($_GET['auth'])) {
        if ($_GET['auth'] == 'invalid') {
            $invalidLoginVisibility = 'visible';
        }
    }
?>

<!DOCTYPE HTML>
<html lang="en" dir="lttr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/styles/LoginRegister.css">
    </head>
    <body>
        <div class="outer-box">
            <h1>Willy Wangky Choco Factory</h1>
            <form method="POST" action="handle-login.php">
                <div class="input-area-login">
                    <div class="component-wrapper">
                        <div class="input-wrapper">
                            <input text="text" id="email" name="email" placeholder="Email" required>
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="component-wrapper">
                        <div class="input-wrapper">
                            <input text="text" type="password" id="password" name="password" placeholder="Password" required>
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="invalid-login" style="visibility: <?php echo $invalidLoginVisibility; ?>;">
                        <p id="error-login">Invalid username or password!</p>
                    </div>
                    <div class="component-wrapper">
                        <div class="button-wrapper">
                            <input type="submit" value="Login">
                            <input type="button" onclick="location.href = 'register.html'" value="Register Here!">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
