<?php
    include_once 'connector.php';

    $username_input = $_POST["username"];
    $username_regex = '/^\w+$/i';
    if (!preg_match($username_regex, $username_input)) {
        echo json_encode(array('checkRes' => False));
    } else {
        $query = "SELECT * FROM user WHERE username = '{$username_input}'";
        $connector = new Connector();
        $data = $connector->getAllData($query);
        if (count($data) > 0) {
            // [$data] = $data;
            echo json_encode(array('checkRes' => False));
        }
        else {
            echo json_encode(array('checkRes' => True));
        }
        $connector->close();
    }
?>
