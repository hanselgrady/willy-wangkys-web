<?php include 'connector.php';

    $email_input = $_POST["email"];
    $password_input = $_POST["password"];
    $query = "SELECT * FROM user WHERE email = '{$email_input}' AND password = '{$password_input}'";
    $connector = new Connector();
    $data = $connector->getAllData($query);
    if (count($data) > 0) {
        //[$data] = $data;
        setcookie('username', $data[0]['username'], time() + 86400 * 30, '/');
        header('Location: /dashboard.php');
    }
    else {
        header('Location: /login.php?auth=invalid');
    }
    $connector->close();

?>
