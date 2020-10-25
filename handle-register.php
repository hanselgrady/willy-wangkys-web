<?php include 'connector.php';

    $username_input = $_POST["username"];
    $email_input = $_POST["email"];
    $password_input = $_POST["password"];
    $query = "INSERT INTO user (username, email, password, description, superuser) VALUES ('{$username_input}', '{$email_input}', '{$password_input}', 'regular user', 0)";
    echo $query;
    $connector = new Connector();
    $connector->run($query);
    $connector->close();

    setcookie('username', 
    $_POST["username"], time() + 86400 * 30, '/');
    header('Location: /dashboard.php');

?>
