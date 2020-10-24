<?php
    include_once 'connector.php';
    $email_input = $_POST["email"];
    $email_regex = '/^\w+(\.\w+)*@\w+(\.\w+)+$/i';
    if (!preg_match($email_regex, $email_input)) {
        echo json_encode(array('checkRes' => False));
    } else {
        $query = "SELECT * FROM user WHERE email = '{$email_input}'";
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
