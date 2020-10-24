<?php include 'connector.php';

    $email_input = $_POST["email"];
    $password_input = $_POST["password"];
    $query = "SELECT * FROM user WHERE email = '{$email_input}' AND password = '{$password_input}'";
    $connector = new Connector();
    $data = $connector->getAllData($query);
    if (count($data) > 0) {
        echo "Success";
        //[$data] = $data;
        //$data = json_encode($connector->getAllData($query));
        //echo $data;
    }
    else {
        $response = [
            "status" => "404",
            "message" => "Error User Not Found"
        ];
        echo json_encode($response);
    }
    $connector->close();

?>