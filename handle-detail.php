<?php

include_once 'validate-auth.php';
include_once 'connector.php';

include_once 'accdetail.php';

if (isset($_POST["choco_id"]) && isset($_POST["amount"]) && isset($_COOKIE["username"]) && (isSuperuser($_COOKIE["username"])) ){

    $connector = new Connector();
    $id = $_POST["choco_id"];
    $amount = $_POST["amount"];
    $query = "
        UPDATE chocolate 
        SET amount = amount + {$amount}
        WHERE id = {$id};
    ";
    $connector->run($query);
    header("Location: /detail.php?itemID={$_POST["choco_id"]}");
}
else if (isset($_POST["amount"]) && isset($_COOKIE["username"]) && (isset($_POST["address"]))) {
    $connector = new Connector();
    $id = $_POST["choco_id"];
    $amount = $_POST["amount"];
    $query_uname = "SELECT id FROM user WHERE username='{$_COOKIE['username']}'";
    $query = "
        SELECT chocolate.id AS chocoID, price, chocolate.amount AS amount
        FROM chocolate LEFT OUTER JOIN transaction
        ON transaction.chocolate_id = chocolate.id
        WHERE chocolate.id = " . $_POST['choco_id']; 
    $connector = new Connector();
    $result = $connector->getAllData($query_uname); 
    if (count($result) == 0) {
        header("Location: /logout.php");
    }
    $uid = $result[0]['id'];
    $result = $connector->getAllData($query); 
    if (count($result) == 0) {
        header("Location: /detail.php?itemID={$_POST["choco_id"]}");
    }
    if ($result[0]['amount'] < $_POST["amount"]) {
        
        die("Chocolate not enough");
        
    }
    $total_price = $amount * $result[0]['price'];
    $new_amount = $result[0]['amount'] - $amount;
    print $new_amount . "\n" . $total_price . "\n" . $result[0]['chocoID'];
    $chocoID = $result[0]['chocoID'];
    $address = $_POST['address'];
    $query = "INSERT INTO transaction (`user_id`, `chocolate_id`, `amount`, `total_price`, `time`, `address`) VALUES ({$uid}, {$result[0]['chocoID']}, {$amount}, {$total_price},  NOW() , '{$address}');";
    $connector->run($query);
    $query = "UPDATE chocolate SET amount = {$new_amount} WHERE id = {$chocoID};";
    $connector->run($query);

    print $_POST["address"];
    header("Location: /detail.php?itemID={$_POST["choco_id"]}");
}
else {
    header("Location: /detail.php?itemID={$_POST["choco_id"]}");
}
?>
