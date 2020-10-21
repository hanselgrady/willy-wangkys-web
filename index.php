<?php
    if (isset($_COOKIES["username"]) == False) {
        header("Location: /login.php");
    }
?>
