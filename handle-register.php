<?php include 'connector.php';

    $username_input = $_POST["username"];
    $email_input = $_POST["email"];
    $password_input = $_POST["password"];
    $query = "INSERT INTO user (username, email, password, superuser) VALUES ('{$username_input}', '{$email_input}', '{$password_input}', 0)";
    $connector = new Connector();
    $connector->run($query);
    //header("Location: http://localhost:8080");
    $connector->close();

?>