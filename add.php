<?php include 'connector.php';

    if (isset($_COOKIES["username"]) == False) {
        header("Location: /login.php");
    }
    else {
        $chocolate_name = $_POST["name"];
        $chocolate_price = $_POST["price"];
        $chocolate_description = $_POST["description"];
        $chocolate_image = "";
        if (isset($_POST["image"]) == False) {
            $chocolate_image = "NULL";
        } else {
            $chocolate_image = "{$_POST["image"]}";
        }
        $chocolate_amount = $_POST["amount"];

        $connector = new Connector();
        $query = "INSERT INTO chocolate (name, price, description, image, amount) 
        VALUES ('{$chocolate_name}', {$chocolate_price}, '{$chocolate_description}', '{$chocolate_image}, {$chocolate_amount})";
        $connector->run($query);
        
    }
?>
