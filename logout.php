<?php

    include 'validate-auth.php';
    setcookie('username', $data[0]['username'], time() + 86400 * 30, '/');
    header('Location: /login.php');

?>
