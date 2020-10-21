<!DOCTYPE HTML>
<html lang="en" dir="lttr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/styles/LoginRegister.css">
    </head>
    <body>
        <div class="header">
            <form>
                <input type="text">
            </form>
            <?php
                if (isset($COOKIES['username'] && isSuperuser($COOKIE))) {
                    echo '
                        
                    ';
                } else {
                    echo '
                    ';
                }
            ?>
            <button>Logout</button>
        </div>
        <div class="content">
        </div>
    </body>
</html>
