<?php include 'connector.php';

    $username_input = $_POST["username"];
    $email_input = $_POST["email"];
    $password_input = $_POST["password"];
    $query = "INSERT INTO user (email, username, password, description, superuser) VALUES ('{$email_input}', '{$username_input}', '{$password_input}', 'ordinary user', 0)";
    $connector = new Connector();
    $connector->run($query);
    //header("Location: http://localhost:8080");
    $connector->close();

?>