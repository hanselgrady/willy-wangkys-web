<?php
include 'connector.php';
if (isset($_POST["choco_id"]) && isset($_POST["amount"]) && isset($_COOKIE["username"])) {

    $connector = new Connector();
    $id = $_POST["choco_id"];
    $amount = $_POST["amount"];
    $query = "
        UPDATE chocolate 
        SET amount = amount + {$amount}
        WHERE id = {$id};
    ";
    $connector->run($sql);
}
?>